<?php
/**
 * Archive Manager for Nextcloud
 *
 * @author Claus-Justus Heine <himself@claus-justus-heine.de>
 * @copyright 2022 Claus-Justus Heine <himself@claus-justus-heine.de>
 * @license AGPL-3.0-or-later
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace OCA\FilesArchive\Service;

use Throwable;

use OC\Files\Type\Detection as MimeTypeDetector;
use Psr\Log\LoggerInterface;
use OCP\Files\IMimeTypeDetector;

use OCA\FilesArchive\Backend\ArchiveFormats;

/** Tweak the Nextcloud server to support all MIME-types needed by this app. */
class MimeTypeService
{
  use \OCA\FilesArchive\Traits\LoggerTrait;

  const MIME_TYPE_MAPPING_DATA_FILE = __DIR__ . '/../../config/nextcloud/mimetypemapping.json';
  const MIME_TYPE_ALIASES_DATA_FILE = __DIR__ . '/../../config/nextcloud/mimetypealiases.json';

  /** @var MimeTypeDetector */
  private $mimeTypeDetector;

  /** @var array */
  private $supportedMimeTypes = null;

  /** @var array<string, string> */
  private $mimeTypeMapping = null;

  // phpcs:ignore Squiz.Commenting.FunctionComment.Missing
  public function __construct(
    IMimeTypeDetector $mimeTypeDetector,
    LoggerInterface $logger,
  ) {
    $this->mimeTypeDetector = $mimeTypeDetector;
    $this->logger = $logger;
  }
  // phpcs:enable

  /**
   * Register the needed extension to MIME-type mappings with the Nextcloud server.
   *
   * @return void
   *
   * @bug This function uses internal APIs.
   */
  public function registerMimeTypeMappings():void
  {
    if (!($this->mimeTypeDetector instanceof mimeTypeDetector)) {
      return;
    }

    $cloudMimeTypeMapping = $this->mimeTypeDetector->getAllMappings();
    $mimeTypeMapping = $this->getMimeTypeMapping();

    $missingMimeMappings = array_diff_key($mimeTypeMapping, $cloudMimeTypeMapping);
    foreach ($missingMimeMappings as $extension => $mimeType) {
      // $this->logInfo('ADDING MISSING MIME-TYPE MAPPING ' . $extension . ' => ' . $mimeType[0]);
      $this->mimeTypeDetector->registerType($extension, $mimeType[0]);
    }
  }

  /**
   * @return array A flat array of supported MIME-types as determined by the
   * current backend configuration.
   */
  public function getSupportedMimeTypes():array
  {
    if ($this->supportedMimeTypes !== null) {
      return $this->supportedMimeTypes;
    }
    $mimeTypeMapping = $this->getMimeTypeMapping();
    $supportedFormats = ArchiveFormats::getSupportedDriverFormats();
    $this->supportedMimeTypes = [];
    foreach ($mimeTypeMapping as $extension => $mimeType) {
      if ($mimeType == 'application/x-gtar') {
        $this->logInfo('MIME TYPE ' . $mimeType);
      }
      $format = ArchiveFormats::detectArchiveFormat('FOO.' . $extension);
      if (!empty($supportedFormats[$format])) {
        $this->supportedMimeTypes[] = $mimeType[0];
      }
    }
    $this->supportedMimeTypes = array_values(array_unique($this->supportedMimeTypes));

    // $this->logInfo('SUPPORTED MIME TYPES ' . print_r($this->supportedMimeTypes, true));

    return $this->supportedMimeTypes;
  }

  /** @return array Slurp in and cache the extension to mime-type mapping. */
  private function getMimeTypeMapping():array
  {
    if ($this->mimeTypeMapping !== null) {
      return $this->mimeTypeMapping;
    }

    $jsonData = file_get_contents(self::MIME_TYPE_MAPPING_DATA_FILE);
    if (empty($jsonData)) {
      $this->logInfo('Unable to read "' . self::MIME_TYPE_MAPPING_DATA_FILE . '".');
      $this->mimeTypeMapping = [];
      return $this->mimeTypeMapping;
    }
    try {
      $arrayData = json_decode($jsonData, true);
    } catch (Throwable $t) {
      $this->logException($t, 'Unable to decode mime-type mapping. "' . self::MIME_TYPE_MAPPING_DATA_FILE . '".');
      $arrayData = null;
    }
    if (empty($arrayData)) {
      $this->mimeTypeMapping = [];
      return $this->mimeTypeMapping;
    }

    $this->mimeTypeMapping = array_filter($arrayData, fn(string $key) => !str_starts_with($key, '__'), ARRAY_FILTER_USE_KEY);
    // $this->logInfo('MIME MAPPINGS ' . print_r($this->mimeTypeMapping, true));

    return $this->mimeTypeMapping;
  }
}
