<?php
/**
 * Recursive PDF Downloader App for Nextcloud
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

namespace OCA\FilesArchive\BackgroundJob;

use InvalidArgumentException;
use Throwable;

use OCP\Files\NotFoundException as FileNotFoundException;
use OCP\BackgroundJob\QueuedJob;
use OCP\BackgroundJob\IJobList;
use Psr\Log\LoggerInterface as ILogger;
use OCP\AppFramework\Utility\ITimeFactory;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Http;
use OCP\ITempManager;
use OCP\AppFramework\IAppContainer;
use OCP\IUserSession;
use OCP\Files\IRootFolder;

use OCA\RotDrop\Toolkit\Service\UserScopeService;

use OCA\FilesArchive\Service\FileSystemWalker;
use OCA\FilesArchive\Service\NotificationService;
use OCA\FilesArchive\Controller\MountController;
use OCA\FilesArchive\Controller\ArchiveController;
use OCA\FilesArchive\Exceptions;

/**
 * Background PDF generator job in order to move time-consuming jobs out of
 * reach of the web-server limits.
 */
class ArchiveJob extends QueuedJob
{
  use \OCA\RotDrop\Toolkit\Traits\LoggerTrait;
  use \OCA\RotDrop\Toolkit\Traits\UserRootFolderTrait;

  public const TARGET_MOUNT = 'mount';
  public const TARGET_EXTRACT = 'extract';

  public const TARGET_KEY = 'target';
  public const USER_ID_KEY = 'userId';
  public const SOURCE_ID_KEY = 'sourceId';
  public const SOURCE_PATH_KEY = 'sourcePath';
  public const DESTINATION_PATH_KEY = 'destinationPath';
  public const ARCHIVE_PASSPHRASE_KEY = 'archivePassphrase';
  public const STRIP_COMMON_PATH_PREFIX_KEY = 'stripCommonPathPrefix';
  public const NEEDS_AUTHENTICATION_KEY = 'needsAuthentication';
  public const AUTH_TOKEN_KEY = 'authToken';

  /** @var IAppContainer */
  private $appContainer;

  /** @var IUserSession */
  private $userSession;

  /** @var ITempManager */
  private $tempManager;

  /** @var NotificationService */
  private $notificationService;

  // phpcs:ignore Squiz.Commenting.FunctionComment.Missing
  public function __construct(
    ITimeFactory $timeFactory,
    ILogger $logger,
    IUserSession $userSession,
    IAppContainer $appContainer,
    ITempManager $tempManager,
    NotificationService $notificationService,
  ) {
    parent::__construct($timeFactory);
    $this->logger = $logger;
    $this->tempManager = $tempManager;
    $this->appContainer = $appContainer;
    $this->userSession = $userSession;
    $this->notificationService = $notificationService;
  }
  // phpcs:enable

  /**
   * @return null|bool
   */
  public function getNeedsAuthentication():bool
  {
    $needsAuthentication = $this->argument[self::NEEDS_AUTHENTICATION_KEY] ?? false;
    return $needsAuthentication;
  }

  /**
   * @return null|string
   *
   * @throws InvalidArgumentException
   */
  public function getAuthToken():?string
  {
    $authToken = $this->argument[self::AUTH_TOKEN_KEY] ?? null;
    if ($authToken === null && $this->getNeedsAuthentication()) {
      throw new InvalidArgumentException('Auth token argument is empty.');
    }
    return $authToken;
  }

  /**
   * @return string
   *
   * @throws InvalidArgumentException
   */
  public function getTarget():string
  {
    $target = $this->argument[self::TARGET_KEY] ?? null;
    if (empty($target)) {
      throw new InvalidArgumentException('Target argument is empty.');
    }
    return $target;
  }

  /**
   * @return string
   *
   * @throws InvalidArgumentException
   */
  public function getUserId():string
  {
    $sourcePath = $this->argument[self::USER_ID_KEY] ?? null;
    if (empty($sourcePath)) {
      throw new InvalidArgumentException('User id argument is empty.');
    }
    return $sourcePath;
  }

  /**
   * @return string
   *
   * @throws InvalidArgumentException
   */
  public function getSourcePath():string
  {
    $sourcePath = $this->argument[self::SOURCE_PATH_KEY] ?? null;
    if (empty($sourcePath)) {
      throw new InvalidArgumentException('Source path argument is empty.');
    }
    return $sourcePath;
  }

  /**
   * @return int
   *
   * @throws InvalidArgumentException
   */
  public function getSourceId():int
  {
    $sourceId = $this->argument[self::SOURCE_ID_KEY] ?? null;
    if ($sourceId === null) {
      throw new InvalidArgumentException('Source id argument is empty.');
    }
    return (int)$sourceId;
  }

  /**
   * @return string
   *
   * @throws InvalidArgumentException
   */
  public function getDestinationPath():string
  {
    $destinationPath = $this->argument[self::DESTINATION_PATH_KEY];
    if (empty($destinationPath)) {
      throw new InvalidArgumentException('Destination path argument is empty.');
    }
    return $destinationPath;
  }

  /**
   * @return string
   */
  public function getArchivePassphrase():?string
  {
    $archivePassphrase = $this->argument[self::DESTINATION_PATH_KEY] ?? null;
    return $archivePassphrase;
  }

  /**
   * @return bool
   */
  public function getStripCommonPathPrefix():?bool
  {
    $archivePassphrase = $this->argument[self::DESTINATION_PATH_KEY] ?? null;
    return $archivePassphrase;
  }

  /** {@inheritdoc} */
  protected function run($argument)
  {
    try {
      /** @var UserScopeService $userScopeService */
      $userScopeService = $this->appContainer->get(UserScopeService::class);

      $loginUid = null;
      $loginPassword = null;
      if ($this->getNeedsAuthentication()) {
        $passphrase = $this->getAuthToken();
        list(
          'loginUID' => $loginUid,
          'loginPassword' => $loginPassword,
        ) = $userScopeService->getLoginCredentialsFromToken($passphrase);
      }

      $userScopeService->setUserScope($this->getUserId(), $loginUid, $loginPassword);

      $archivePath = $this->getSourcePath();
      $destinationPath = $this->getDestinationPath();
      $archivePassPhrase = $this->getArchivePassphrase();
      $stripCommonPathPrefix = $this->getStripCommonPathPrefix();

      // @todo The use of controller classes at this point is abuse, their
      // should be common service classes providing the required functionality
      // which are then shared by the backgroun job and the frontend
      // controller classes.
      switch ($this->getTarget()) {
        case self::TARGET_MOUNT:
          /** @var MountController $mountController */
          $mountController = $this->appContainer->get(MountController::class);
          $response = $mountController->mount($archivePath, $destinationPath, $archivePassPhrase, $stripCommonPathPrefix);
          $data = $response->getData();
          if ($response->getStatus() === Http::STATUS_OK) {
            $destinationPath = $data['mountPointPath'];
          }
          break;
        case self::TARGET_EXTRACT:
          /** @var ArchiveController $archiveController */
          $archiveController = $this->appContainer->get(ArchiveController::class);
          $response = $archiveController->extract($archivePath, $destinationPath, $archivePassPhrase, $stripCommonPathPrefix);
          $data = $response->getData();
          if ($response->getStatus() === Http::STATUS_OK) {
            $destinationPath = $data['targetPath'];
          }
          break;
      }

      /** @var DataResponse $response */
      if ($response->getStatus() !== Http::STATUS_OK) {
        throw new Exceptions\Exception(implode(' ', $data['messages'] ?? []));
      }

      $this->userId = $this->getUserId();
      $this->rootFolder = $this->appContainer->get(IRootFolder::class);
      $destinationFolder = $this->getUserFolder()->get($destinationPath);

      $this->logInfo('Source ' . $this->getSourcePath() . ' Target ' . $destinationFolder->getPath());
      $this->notificationService->sendNotificationOnSuccess($this, $destinationFolder);

      /** @var IJobList $jobList */
      $jobList = $this->appContainer->get(IJobList::class);
      $jobList->add(DownloadsCleanupJob::class, [
        DownloadsCleanupJob::USER_ID_KEY => $this->getUserId(),
      ]);
    } catch (Throwable $t) {
      $this->logger->error('Failed to create composite PDF.', [ 'exception' => $t ]);
      if ($t instanceof FileNotFoundException) {
        $message = $this->t('File or folder could not be found.');
      } else {
        $message = $t->getMessage();
      }
      $this->notificationService->sendNotificationOnFailure($this, $message);
    } finally {
      \OC_Util::tearDownFS();
      $this->tempManager->clean();
    }
  }

  /**
   * Translation trigger (hopefully).
   *
   * @param string $msg
   *
   * @return string
   */
  private function t(string $msg):string
  {
    return $msg;
  }
}
