<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Alchemy\\Zippy\\Adapter\\AbstractAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/AbstractAdapter.php',
    'Alchemy\\Zippy\\Adapter\\AbstractBinaryAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/AbstractBinaryAdapter.php',
    'Alchemy\\Zippy\\Adapter\\AbstractTarAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/AbstractTarAdapter.php',
    'Alchemy\\Zippy\\Adapter\\AdapterContainer' => $vendorDir . '/alchemy/zippy/src/Adapter/AdapterContainer.php',
    'Alchemy\\Zippy\\Adapter\\AdapterInterface' => $vendorDir . '/alchemy/zippy/src/Adapter/AdapterInterface.php',
    'Alchemy\\Zippy\\Adapter\\BSDTar\\TarBSDTarAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/BSDTar/TarBSDTarAdapter.php',
    'Alchemy\\Zippy\\Adapter\\BSDTar\\TarBz2BSDTarAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/BSDTar/TarBz2BSDTarAdapter.php',
    'Alchemy\\Zippy\\Adapter\\BSDTar\\TarGzBSDTarAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/BSDTar/TarGzBSDTarAdapter.php',
    'Alchemy\\Zippy\\Adapter\\BinaryAdapterInterface' => $vendorDir . '/alchemy/zippy/src/Adapter/BinaryAdapterInterface.php',
    'Alchemy\\Zippy\\Adapter\\GNUTar\\TarBz2GNUTarAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/GNUTar/TarBz2GNUTarAdapter.php',
    'Alchemy\\Zippy\\Adapter\\GNUTar\\TarGNUTarAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/GNUTar/TarGNUTarAdapter.php',
    'Alchemy\\Zippy\\Adapter\\GNUTar\\TarGzGNUTarAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/GNUTar/TarGzGNUTarAdapter.php',
    'Alchemy\\Zippy\\Adapter\\Resource\\FileResource' => $vendorDir . '/alchemy/zippy/src/Adapter/Resource/FileResource.php',
    'Alchemy\\Zippy\\Adapter\\Resource\\ResourceInterface' => $vendorDir . '/alchemy/zippy/src/Adapter/Resource/ResourceInterface.php',
    'Alchemy\\Zippy\\Adapter\\Resource\\ZipArchiveResource' => $vendorDir . '/alchemy/zippy/src/Adapter/Resource/ZipArchiveResource.php',
    'Alchemy\\Zippy\\Adapter\\VersionProbe\\AbstractTarVersionProbe' => $vendorDir . '/alchemy/zippy/src/Adapter/VersionProbe/AbstractTarVersionProbe.php',
    'Alchemy\\Zippy\\Adapter\\VersionProbe\\BSDTarVersionProbe' => $vendorDir . '/alchemy/zippy/src/Adapter/VersionProbe/BSDTarVersionProbe.php',
    'Alchemy\\Zippy\\Adapter\\VersionProbe\\GNUTarVersionProbe' => $vendorDir . '/alchemy/zippy/src/Adapter/VersionProbe/GNUTarVersionProbe.php',
    'Alchemy\\Zippy\\Adapter\\VersionProbe\\VersionProbeInterface' => $vendorDir . '/alchemy/zippy/src/Adapter/VersionProbe/VersionProbeInterface.php',
    'Alchemy\\Zippy\\Adapter\\VersionProbe\\ZipExtensionVersionProbe' => $vendorDir . '/alchemy/zippy/src/Adapter/VersionProbe/ZipExtensionVersionProbe.php',
    'Alchemy\\Zippy\\Adapter\\VersionProbe\\ZipVersionProbe' => $vendorDir . '/alchemy/zippy/src/Adapter/VersionProbe/ZipVersionProbe.php',
    'Alchemy\\Zippy\\Adapter\\ZipAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/ZipAdapter.php',
    'Alchemy\\Zippy\\Adapter\\ZipExtensionAdapter' => $vendorDir . '/alchemy/zippy/src/Adapter/ZipExtensionAdapter.php',
    'Alchemy\\Zippy\\Archive\\Archive' => $vendorDir . '/alchemy/zippy/src/Archive/Archive.php',
    'Alchemy\\Zippy\\Archive\\ArchiveInterface' => $vendorDir . '/alchemy/zippy/src/Archive/ArchiveInterface.php',
    'Alchemy\\Zippy\\Archive\\Member' => $vendorDir . '/alchemy/zippy/src/Archive/Member.php',
    'Alchemy\\Zippy\\Archive\\MemberInterface' => $vendorDir . '/alchemy/zippy/src/Archive/MemberInterface.php',
    'Alchemy\\Zippy\\Exception\\ExceptionInterface' => $vendorDir . '/alchemy/zippy/src/Exception/ExceptionInterface.php',
    'Alchemy\\Zippy\\Exception\\FormatNotSupportedException' => $vendorDir . '/alchemy/zippy/src/Exception/FormatNotSupportedException.php',
    'Alchemy\\Zippy\\Exception\\IOException' => $vendorDir . '/alchemy/zippy/src/Exception/IOException.php',
    'Alchemy\\Zippy\\Exception\\InvalidArgumentException' => $vendorDir . '/alchemy/zippy/src/Exception/InvalidArgumentException.php',
    'Alchemy\\Zippy\\Exception\\NoAdapterOnPlatformException' => $vendorDir . '/alchemy/zippy/src/Exception/NoAdapterOnPlatformException.php',
    'Alchemy\\Zippy\\Exception\\NotSupportedException' => $vendorDir . '/alchemy/zippy/src/Exception/NotSupportedException.php',
    'Alchemy\\Zippy\\Exception\\RuntimeException' => $vendorDir . '/alchemy/zippy/src/Exception/RuntimeException.php',
    'Alchemy\\Zippy\\Exception\\TargetLocatorException' => $vendorDir . '/alchemy/zippy/src/Exception/TargetLocatorException.php',
    'Alchemy\\Zippy\\FileStrategy\\AbstractFileStrategy' => $vendorDir . '/alchemy/zippy/src/FileStrategy/AbstractFileStrategy.php',
    'Alchemy\\Zippy\\FileStrategy\\FileStrategyInterface' => $vendorDir . '/alchemy/zippy/src/FileStrategy/FileStrategyInterface.php',
    'Alchemy\\Zippy\\FileStrategy\\TB2FileStrategy' => $vendorDir . '/alchemy/zippy/src/FileStrategy/TB2FileStrategy.php',
    'Alchemy\\Zippy\\FileStrategy\\TBz2FileStrategy' => $vendorDir . '/alchemy/zippy/src/FileStrategy/TBz2FileStrategy.php',
    'Alchemy\\Zippy\\FileStrategy\\TGzFileStrategy' => $vendorDir . '/alchemy/zippy/src/FileStrategy/TGzFileStrategy.php',
    'Alchemy\\Zippy\\FileStrategy\\TarBz2FileStrategy' => $vendorDir . '/alchemy/zippy/src/FileStrategy/TarBz2FileStrategy.php',
    'Alchemy\\Zippy\\FileStrategy\\TarFileStrategy' => $vendorDir . '/alchemy/zippy/src/FileStrategy/TarFileStrategy.php',
    'Alchemy\\Zippy\\FileStrategy\\TarGzFileStrategy' => $vendorDir . '/alchemy/zippy/src/FileStrategy/TarGzFileStrategy.php',
    'Alchemy\\Zippy\\FileStrategy\\ZipFileStrategy' => $vendorDir . '/alchemy/zippy/src/FileStrategy/ZipFileStrategy.php',
    'Alchemy\\Zippy\\Parser\\BSDTarOutputParser' => $vendorDir . '/alchemy/zippy/src/Parser/BSDTarOutputParser.php',
    'Alchemy\\Zippy\\Parser\\GNUTarOutputParser' => $vendorDir . '/alchemy/zippy/src/Parser/GNUTarOutputParser.php',
    'Alchemy\\Zippy\\Parser\\ParserFactory' => $vendorDir . '/alchemy/zippy/src/Parser/ParserFactory.php',
    'Alchemy\\Zippy\\Parser\\ParserInterface' => $vendorDir . '/alchemy/zippy/src/Parser/ParserInterface.php',
    'Alchemy\\Zippy\\Parser\\ZipOutputParser' => $vendorDir . '/alchemy/zippy/src/Parser/ZipOutputParser.php',
    'Alchemy\\Zippy\\ProcessBuilder\\ProcessBuilder' => $vendorDir . '/alchemy/zippy/src/ProcessBuilder/ProcessBuilder.php',
    'Alchemy\\Zippy\\ProcessBuilder\\ProcessBuilderFactory' => $vendorDir . '/alchemy/zippy/src/ProcessBuilder/ProcessBuilderFactory.php',
    'Alchemy\\Zippy\\ProcessBuilder\\ProcessBuilderFactoryInterface' => $vendorDir . '/alchemy/zippy/src/ProcessBuilder/ProcessBuilderFactoryInterface.php',
    'Alchemy\\Zippy\\ProcessBuilder\\ProcessBuilderInterface' => $vendorDir . '/alchemy/zippy/src/ProcessBuilder/ProcessBuilderInterface.php',
    'Alchemy\\Zippy\\Resource\\PathUtil' => $vendorDir . '/alchemy/zippy/src/Resource/PathUtil.php',
    'Alchemy\\Zippy\\Resource\\Reader\\Guzzle\\GuzzleReader' => $vendorDir . '/alchemy/zippy/src/Resource/Reader/Guzzle/GuzzleReader.php',
    'Alchemy\\Zippy\\Resource\\Reader\\Guzzle\\GuzzleReaderFactory' => $vendorDir . '/alchemy/zippy/src/Resource/Reader/Guzzle/GuzzleReaderFactory.php',
    'Alchemy\\Zippy\\Resource\\Reader\\Guzzle\\LegacyGuzzleReader' => $vendorDir . '/alchemy/zippy/src/Resource/Reader/Guzzle/LegacyGuzzleReader.php',
    'Alchemy\\Zippy\\Resource\\Reader\\Guzzle\\LegacyGuzzleReaderFactory' => $vendorDir . '/alchemy/zippy/src/Resource/Reader/Guzzle/LegacyGuzzleReaderFactory.php',
    'Alchemy\\Zippy\\Resource\\Reader\\Stream\\StreamReader' => $vendorDir . '/alchemy/zippy/src/Resource/Reader/Stream/StreamReader.php',
    'Alchemy\\Zippy\\Resource\\Reader\\Stream\\StreamReaderFactory' => $vendorDir . '/alchemy/zippy/src/Resource/Reader/Stream/StreamReaderFactory.php',
    'Alchemy\\Zippy\\Resource\\RequestMapper' => $vendorDir . '/alchemy/zippy/src/Resource/RequestMapper.php',
    'Alchemy\\Zippy\\Resource\\Resource' => $vendorDir . '/alchemy/zippy/src/Resource/Resource.php',
    'Alchemy\\Zippy\\Resource\\ResourceCollection' => $vendorDir . '/alchemy/zippy/src/Resource/ResourceCollection.php',
    'Alchemy\\Zippy\\Resource\\ResourceLocator' => $vendorDir . '/alchemy/zippy/src/Resource/ResourceLocator.php',
    'Alchemy\\Zippy\\Resource\\ResourceManager' => $vendorDir . '/alchemy/zippy/src/Resource/ResourceManager.php',
    'Alchemy\\Zippy\\Resource\\ResourceReader' => $vendorDir . '/alchemy/zippy/src/Resource/ResourceReader.php',
    'Alchemy\\Zippy\\Resource\\ResourceReaderFactory' => $vendorDir . '/alchemy/zippy/src/Resource/ResourceReaderFactory.php',
    'Alchemy\\Zippy\\Resource\\ResourceTeleporter' => $vendorDir . '/alchemy/zippy/src/Resource/ResourceTeleporter.php',
    'Alchemy\\Zippy\\Resource\\ResourceWriter' => $vendorDir . '/alchemy/zippy/src/Resource/ResourceWriter.php',
    'Alchemy\\Zippy\\Resource\\TargetLocator' => $vendorDir . '/alchemy/zippy/src/Resource/TargetLocator.php',
    'Alchemy\\Zippy\\Resource\\TeleporterContainer' => $vendorDir . '/alchemy/zippy/src/Resource/TeleporterContainer.php',
    'Alchemy\\Zippy\\Resource\\Teleporter\\AbstractTeleporter' => $vendorDir . '/alchemy/zippy/src/Resource/Teleporter/AbstractTeleporter.php',
    'Alchemy\\Zippy\\Resource\\Teleporter\\GenericTeleporter' => $vendorDir . '/alchemy/zippy/src/Resource/Teleporter/GenericTeleporter.php',
    'Alchemy\\Zippy\\Resource\\Teleporter\\GuzzleTeleporter' => $vendorDir . '/alchemy/zippy/src/Resource/Teleporter/GuzzleTeleporter.php',
    'Alchemy\\Zippy\\Resource\\Teleporter\\LegacyGuzzleTeleporter' => $vendorDir . '/alchemy/zippy/src/Resource/Teleporter/LegacyGuzzleTeleporter.php',
    'Alchemy\\Zippy\\Resource\\Teleporter\\LocalTeleporter' => $vendorDir . '/alchemy/zippy/src/Resource/Teleporter/LocalTeleporter.php',
    'Alchemy\\Zippy\\Resource\\Teleporter\\StreamTeleporter' => $vendorDir . '/alchemy/zippy/src/Resource/Teleporter/StreamTeleporter.php',
    'Alchemy\\Zippy\\Resource\\Teleporter\\TeleporterInterface' => $vendorDir . '/alchemy/zippy/src/Resource/Teleporter/TeleporterInterface.php',
    'Alchemy\\Zippy\\Resource\\Writer\\FilesystemWriter' => $vendorDir . '/alchemy/zippy/src/Resource/Writer/FilesystemWriter.php',
    'Alchemy\\Zippy\\Resource\\Writer\\StreamWriter' => $vendorDir . '/alchemy/zippy/src/Resource/Writer/StreamWriter.php',
    'Alchemy\\Zippy\\Zippy' => $vendorDir . '/alchemy/zippy/src/Zippy.php',
    'Archive7z\\Archive7z' => $vendorDir . '/gemorroj/archive7z/src/Archive7z.php',
    'Archive7z\\Archive7zTrait' => $vendorDir . '/gemorroj/archive7z/src/Archive7zTrait.php',
    'Archive7z\\Entry' => $vendorDir . '/gemorroj/archive7z/src/Entry.php',
    'Archive7z\\Exception' => $vendorDir . '/gemorroj/archive7z/src/Exception.php',
    'Archive7z\\Info' => $vendorDir . '/gemorroj/archive7z/src/Info.php',
    'Archive7z\\Parser' => $vendorDir . '/gemorroj/archive7z/src/Parser.php',
    'Archive7z\\SolidMode' => $vendorDir . '/gemorroj/archive7z/src/SolidMode.php',
    'Archive_Tar' => $vendorDir . '/pear/archive_tar/Archive/Tar.php',
    'Attribute' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
    'CBootCatalog' => $vendorDir . '/phpclasses/php-iso-file/classes/boot_catalog.class.php',
    'CBootCatalogEntry' => $vendorDir . '/phpclasses/php-iso-file/classes/boot_catalog_entry.class.php',
    'CBootDescriptor' => $vendorDir . '/phpclasses/php-iso-file/classes/descriptor_boot.class.php',
    'CBuffer' => $vendorDir . '/phpclasses/php-iso-file/classes/buffer.class.php',
    'CDescriptor' => $vendorDir . '/phpclasses/php-iso-file/classes/descriptor.class.php',
    'CFileDirDescriptors' => $vendorDir . '/phpclasses/php-iso-file/classes/file_dir_descriptors.class.php',
    'CISOFile' => $vendorDir . '/phpclasses/php-iso-file/classes/file_iso.class.php',
    'CIsoDate' => $vendorDir . '/phpclasses/php-iso-file/classes/iso_date.class.php',
    'CPartitionDescriptor' => $vendorDir . '/phpclasses/php-iso-file/classes/descriptor_partition.class.php',
    'CPathTableRecord' => $vendorDir . '/phpclasses/php-iso-file/classes/path_table_record.class.php',
    'CTerminatorDescriptor' => $vendorDir . '/phpclasses/php-iso-file/classes/descriptor_terminator.class.php',
    'CVolumeDescriptor' => $vendorDir . '/phpclasses/php-iso-file/classes/descriptor_volume.class.php',
    'CabArchive' => $vendorDir . '/wapmorgan/cab-archive/src/CabArchive.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Console_Getopt' => $vendorDir . '/pear/console_getopt/Console/Getopt.php',
    'Doctrine\\Common\\Collections\\AbstractLazyCollection' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php',
    'Doctrine\\Common\\Collections\\ArrayCollection' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php',
    'Doctrine\\Common\\Collections\\Collection' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php',
    'Doctrine\\Common\\Collections\\Criteria' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php',
    'Doctrine\\Common\\Collections\\Expr\\ClosureExpressionVisitor' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ClosureExpressionVisitor.php',
    'Doctrine\\Common\\Collections\\Expr\\Comparison' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Comparison.php',
    'Doctrine\\Common\\Collections\\Expr\\CompositeExpression' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php',
    'Doctrine\\Common\\Collections\\Expr\\Expression' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Expression.php',
    'Doctrine\\Common\\Collections\\Expr\\ExpressionVisitor' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php',
    'Doctrine\\Common\\Collections\\Expr\\Value' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php',
    'Doctrine\\Common\\Collections\\ExpressionBuilder' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php',
    'Doctrine\\Common\\Collections\\ReadableCollection' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/ReadableCollection.php',
    'Doctrine\\Common\\Collections\\Selectable' => $vendorDir . '/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php',
    'Doctrine\\Deprecations\\Deprecation' => $vendorDir . '/doctrine/deprecations/lib/Doctrine/Deprecations/Deprecation.php',
    'Doctrine\\Deprecations\\PHPUnit\\VerifyDeprecations' => $vendorDir . '/doctrine/deprecations/lib/Doctrine/Deprecations/PHPUnit/VerifyDeprecations.php',
    'OS_Guess' => $vendorDir . '/pear/pear-core-minimal/src/OS/Guess.php',
    'PEAR' => $vendorDir . '/pear/pear-core-minimal/src/PEAR.php',
    'PEAR_ErrorStack' => $vendorDir . '/pear/pear-core-minimal/src/PEAR/ErrorStack.php',
    'PEAR_Exception' => $vendorDir . '/pear/pear_exception/PEAR/Exception.php',
    'PhpToken' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
    'PhpZip\\Constants\\DosAttrs' => $vendorDir . '/nelexa/zip/src/Constants/DosAttrs.php',
    'PhpZip\\Constants\\DosCodePage' => $vendorDir . '/nelexa/zip/src/Constants/DosCodePage.php',
    'PhpZip\\Constants\\GeneralPurposeBitFlag' => $vendorDir . '/nelexa/zip/src/Constants/GeneralPurposeBitFlag.php',
    'PhpZip\\Constants\\UnixStat' => $vendorDir . '/nelexa/zip/src/Constants/UnixStat.php',
    'PhpZip\\Constants\\ZipCompressionLevel' => $vendorDir . '/nelexa/zip/src/Constants/ZipCompressionLevel.php',
    'PhpZip\\Constants\\ZipCompressionMethod' => $vendorDir . '/nelexa/zip/src/Constants/ZipCompressionMethod.php',
    'PhpZip\\Constants\\ZipConstants' => $vendorDir . '/nelexa/zip/src/Constants/ZipConstants.php',
    'PhpZip\\Constants\\ZipEncryptionMethod' => $vendorDir . '/nelexa/zip/src/Constants/ZipEncryptionMethod.php',
    'PhpZip\\Constants\\ZipOptions' => $vendorDir . '/nelexa/zip/src/Constants/ZipOptions.php',
    'PhpZip\\Constants\\ZipPlatform' => $vendorDir . '/nelexa/zip/src/Constants/ZipPlatform.php',
    'PhpZip\\Constants\\ZipVersion' => $vendorDir . '/nelexa/zip/src/Constants/ZipVersion.php',
    'PhpZip\\Exception\\Crc32Exception' => $vendorDir . '/nelexa/zip/src/Exception/Crc32Exception.php',
    'PhpZip\\Exception\\InvalidArgumentException' => $vendorDir . '/nelexa/zip/src/Exception/InvalidArgumentException.php',
    'PhpZip\\Exception\\RuntimeException' => $vendorDir . '/nelexa/zip/src/Exception/RuntimeException.php',
    'PhpZip\\Exception\\ZipAuthenticationException' => $vendorDir . '/nelexa/zip/src/Exception/ZipAuthenticationException.php',
    'PhpZip\\Exception\\ZipCryptoException' => $vendorDir . '/nelexa/zip/src/Exception/ZipCryptoException.php',
    'PhpZip\\Exception\\ZipEntryNotFoundException' => $vendorDir . '/nelexa/zip/src/Exception/ZipEntryNotFoundException.php',
    'PhpZip\\Exception\\ZipException' => $vendorDir . '/nelexa/zip/src/Exception/ZipException.php',
    'PhpZip\\Exception\\ZipUnsupportMethodException' => $vendorDir . '/nelexa/zip/src/Exception/ZipUnsupportMethodException.php',
    'PhpZip\\IO\\Filter\\Cipher\\Pkware\\PKCryptContext' => $vendorDir . '/nelexa/zip/src/IO/Filter/Cipher/Pkware/PKCryptContext.php',
    'PhpZip\\IO\\Filter\\Cipher\\Pkware\\PKDecryptionStreamFilter' => $vendorDir . '/nelexa/zip/src/IO/Filter/Cipher/Pkware/PKDecryptionStreamFilter.php',
    'PhpZip\\IO\\Filter\\Cipher\\Pkware\\PKEncryptionStreamFilter' => $vendorDir . '/nelexa/zip/src/IO/Filter/Cipher/Pkware/PKEncryptionStreamFilter.php',
    'PhpZip\\IO\\Filter\\Cipher\\WinZipAes\\WinZipAesContext' => $vendorDir . '/nelexa/zip/src/IO/Filter/Cipher/WinZipAes/WinZipAesContext.php',
    'PhpZip\\IO\\Filter\\Cipher\\WinZipAes\\WinZipAesDecryptionStreamFilter' => $vendorDir . '/nelexa/zip/src/IO/Filter/Cipher/WinZipAes/WinZipAesDecryptionStreamFilter.php',
    'PhpZip\\IO\\Filter\\Cipher\\WinZipAes\\WinZipAesEncryptionStreamFilter' => $vendorDir . '/nelexa/zip/src/IO/Filter/Cipher/WinZipAes/WinZipAesEncryptionStreamFilter.php',
    'PhpZip\\IO\\Stream\\ResponseStream' => $vendorDir . '/nelexa/zip/src/IO/Stream/ResponseStream.php',
    'PhpZip\\IO\\Stream\\ZipEntryStreamWrapper' => $vendorDir . '/nelexa/zip/src/IO/Stream/ZipEntryStreamWrapper.php',
    'PhpZip\\IO\\ZipReader' => $vendorDir . '/nelexa/zip/src/IO/ZipReader.php',
    'PhpZip\\IO\\ZipWriter' => $vendorDir . '/nelexa/zip/src/IO/ZipWriter.php',
    'PhpZip\\Model\\Data\\ZipFileData' => $vendorDir . '/nelexa/zip/src/Model/Data/ZipFileData.php',
    'PhpZip\\Model\\Data\\ZipNewData' => $vendorDir . '/nelexa/zip/src/Model/Data/ZipNewData.php',
    'PhpZip\\Model\\Data\\ZipSourceFileData' => $vendorDir . '/nelexa/zip/src/Model/Data/ZipSourceFileData.php',
    'PhpZip\\Model\\EndOfCentralDirectory' => $vendorDir . '/nelexa/zip/src/Model/EndOfCentralDirectory.php',
    'PhpZip\\Model\\Extra\\ExtraFieldsCollection' => $vendorDir . '/nelexa/zip/src/Model/Extra/ExtraFieldsCollection.php',
    'PhpZip\\Model\\Extra\\Fields\\AbstractUnicodeExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/AbstractUnicodeExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\ApkAlignmentExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/ApkAlignmentExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\AsiExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/AsiExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\ExtendedTimestampExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/ExtendedTimestampExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\JarMarkerExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/JarMarkerExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\NewUnixExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/NewUnixExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\NtfsExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/NtfsExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\OldUnixExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/OldUnixExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\UnicodeCommentExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/UnicodeCommentExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\UnicodePathExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/UnicodePathExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\UnrecognizedExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/UnrecognizedExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\WinZipAesExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/WinZipAesExtraField.php',
    'PhpZip\\Model\\Extra\\Fields\\Zip64ExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/Fields/Zip64ExtraField.php',
    'PhpZip\\Model\\Extra\\ZipExtraDriver' => $vendorDir . '/nelexa/zip/src/Model/Extra/ZipExtraDriver.php',
    'PhpZip\\Model\\Extra\\ZipExtraField' => $vendorDir . '/nelexa/zip/src/Model/Extra/ZipExtraField.php',
    'PhpZip\\Model\\ImmutableZipContainer' => $vendorDir . '/nelexa/zip/src/Model/ImmutableZipContainer.php',
    'PhpZip\\Model\\ZipContainer' => $vendorDir . '/nelexa/zip/src/Model/ZipContainer.php',
    'PhpZip\\Model\\ZipData' => $vendorDir . '/nelexa/zip/src/Model/ZipData.php',
    'PhpZip\\Model\\ZipEntry' => $vendorDir . '/nelexa/zip/src/Model/ZipEntry.php',
    'PhpZip\\Model\\ZipEntryMatcher' => $vendorDir . '/nelexa/zip/src/Model/ZipEntryMatcher.php',
    'PhpZip\\Util\\CryptoUtil' => $vendorDir . '/nelexa/zip/src/Util/CryptoUtil.php',
    'PhpZip\\Util\\DateTimeConverter' => $vendorDir . '/nelexa/zip/src/Util/DateTimeConverter.php',
    'PhpZip\\Util\\FileAttribUtil' => $vendorDir . '/nelexa/zip/src/Util/FileAttribUtil.php',
    'PhpZip\\Util\\FilesUtil' => $vendorDir . '/nelexa/zip/src/Util/FilesUtil.php',
    'PhpZip\\Util\\Iterator\\IgnoreFilesFilterIterator' => $vendorDir . '/nelexa/zip/src/Util/Iterator/IgnoreFilesFilterIterator.php',
    'PhpZip\\Util\\Iterator\\IgnoreFilesRecursiveFilterIterator' => $vendorDir . '/nelexa/zip/src/Util/Iterator/IgnoreFilesRecursiveFilterIterator.php',
    'PhpZip\\Util\\MathUtil' => $vendorDir . '/nelexa/zip/src/Util/MathUtil.php',
    'PhpZip\\Util\\StringUtil' => $vendorDir . '/nelexa/zip/src/Util/StringUtil.php',
    'PhpZip\\ZipFile' => $vendorDir . '/nelexa/zip/src/ZipFile.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
    'Stringable' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
    'Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher' => $vendorDir . '/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php',
    'Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcherInterface' => $vendorDir . '/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php',
    'Symfony\\Component\\EventDispatcher\\Debug\\WrappedListener' => $vendorDir . '/symfony/event-dispatcher/Debug/WrappedListener.php',
    'Symfony\\Component\\EventDispatcher\\DependencyInjection\\AddEventAliasesPass' => $vendorDir . '/symfony/event-dispatcher/DependencyInjection/AddEventAliasesPass.php',
    'Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass' => $vendorDir . '/symfony/event-dispatcher/DependencyInjection/RegisterListenersPass.php',
    'Symfony\\Component\\EventDispatcher\\Event' => $vendorDir . '/symfony/event-dispatcher/Event.php',
    'Symfony\\Component\\EventDispatcher\\EventDispatcher' => $vendorDir . '/symfony/event-dispatcher/EventDispatcher.php',
    'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => $vendorDir . '/symfony/event-dispatcher/EventDispatcherInterface.php',
    'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface' => $vendorDir . '/symfony/event-dispatcher/EventSubscriberInterface.php',
    'Symfony\\Component\\EventDispatcher\\GenericEvent' => $vendorDir . '/symfony/event-dispatcher/GenericEvent.php',
    'Symfony\\Component\\EventDispatcher\\ImmutableEventDispatcher' => $vendorDir . '/symfony/event-dispatcher/ImmutableEventDispatcher.php',
    'Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy' => $vendorDir . '/symfony/event-dispatcher/LegacyEventDispatcherProxy.php',
    'Symfony\\Component\\EventDispatcher\\LegacyEventProxy' => $vendorDir . '/symfony/event-dispatcher/LegacyEventProxy.php',
    'Symfony\\Component\\Filesystem\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/filesystem/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException' => $vendorDir . '/symfony/filesystem/Exception/FileNotFoundException.php',
    'Symfony\\Component\\Filesystem\\Exception\\IOException' => $vendorDir . '/symfony/filesystem/Exception/IOException.php',
    'Symfony\\Component\\Filesystem\\Exception\\IOExceptionInterface' => $vendorDir . '/symfony/filesystem/Exception/IOExceptionInterface.php',
    'Symfony\\Component\\Filesystem\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/filesystem/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Filesystem\\Exception\\RuntimeException' => $vendorDir . '/symfony/filesystem/Exception/RuntimeException.php',
    'Symfony\\Component\\Filesystem\\Filesystem' => $vendorDir . '/symfony/filesystem/Filesystem.php',
    'Symfony\\Component\\Filesystem\\Path' => $vendorDir . '/symfony/filesystem/Path.php',
    'Symfony\\Component\\Finder\\Comparator\\Comparator' => $vendorDir . '/symfony/finder/Comparator/Comparator.php',
    'Symfony\\Component\\Finder\\Comparator\\DateComparator' => $vendorDir . '/symfony/finder/Comparator/DateComparator.php',
    'Symfony\\Component\\Finder\\Comparator\\NumberComparator' => $vendorDir . '/symfony/finder/Comparator/NumberComparator.php',
    'Symfony\\Component\\Finder\\Exception\\AccessDeniedException' => $vendorDir . '/symfony/finder/Exception/AccessDeniedException.php',
    'Symfony\\Component\\Finder\\Exception\\DirectoryNotFoundException' => $vendorDir . '/symfony/finder/Exception/DirectoryNotFoundException.php',
    'Symfony\\Component\\Finder\\Finder' => $vendorDir . '/symfony/finder/Finder.php',
    'Symfony\\Component\\Finder\\Gitignore' => $vendorDir . '/symfony/finder/Gitignore.php',
    'Symfony\\Component\\Finder\\Glob' => $vendorDir . '/symfony/finder/Glob.php',
    'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator' => $vendorDir . '/symfony/finder/Iterator/CustomFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator' => $vendorDir . '/symfony/finder/Iterator/DateRangeFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator' => $vendorDir . '/symfony/finder/Iterator/DepthRangeFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator' => $vendorDir . '/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\FileTypeFilterIterator' => $vendorDir . '/symfony/finder/Iterator/FileTypeFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator' => $vendorDir . '/symfony/finder/Iterator/FilecontentFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator' => $vendorDir . '/symfony/finder/Iterator/FilenameFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\LazyIterator' => $vendorDir . '/symfony/finder/Iterator/LazyIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\MultiplePcreFilterIterator' => $vendorDir . '/symfony/finder/Iterator/MultiplePcreFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\PathFilterIterator' => $vendorDir . '/symfony/finder/Iterator/PathFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\RecursiveDirectoryIterator' => $vendorDir . '/symfony/finder/Iterator/RecursiveDirectoryIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator' => $vendorDir . '/symfony/finder/Iterator/SizeRangeFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\SortableIterator' => $vendorDir . '/symfony/finder/Iterator/SortableIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\VcsIgnoredFilterIterator' => $vendorDir . '/symfony/finder/Iterator/VcsIgnoredFilterIterator.php',
    'Symfony\\Component\\Finder\\SplFileInfo' => $vendorDir . '/symfony/finder/SplFileInfo.php',
    'Symfony\\Component\\Process\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/process/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Process\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/process/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Process\\Exception\\LogicException' => $vendorDir . '/symfony/process/Exception/LogicException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessFailedException' => $vendorDir . '/symfony/process/Exception/ProcessFailedException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessSignaledException' => $vendorDir . '/symfony/process/Exception/ProcessSignaledException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException' => $vendorDir . '/symfony/process/Exception/ProcessTimedOutException.php',
    'Symfony\\Component\\Process\\Exception\\RuntimeException' => $vendorDir . '/symfony/process/Exception/RuntimeException.php',
    'Symfony\\Component\\Process\\ExecutableFinder' => $vendorDir . '/symfony/process/ExecutableFinder.php',
    'Symfony\\Component\\Process\\InputStream' => $vendorDir . '/symfony/process/InputStream.php',
    'Symfony\\Component\\Process\\PhpExecutableFinder' => $vendorDir . '/symfony/process/PhpExecutableFinder.php',
    'Symfony\\Component\\Process\\PhpProcess' => $vendorDir . '/symfony/process/PhpProcess.php',
    'Symfony\\Component\\Process\\Pipes\\AbstractPipes' => $vendorDir . '/symfony/process/Pipes/AbstractPipes.php',
    'Symfony\\Component\\Process\\Pipes\\PipesInterface' => $vendorDir . '/symfony/process/Pipes/PipesInterface.php',
    'Symfony\\Component\\Process\\Pipes\\UnixPipes' => $vendorDir . '/symfony/process/Pipes/UnixPipes.php',
    'Symfony\\Component\\Process\\Pipes\\WindowsPipes' => $vendorDir . '/symfony/process/Pipes/WindowsPipes.php',
    'Symfony\\Component\\Process\\Process' => $vendorDir . '/symfony/process/Process.php',
    'Symfony\\Component\\Process\\ProcessUtils' => $vendorDir . '/symfony/process/ProcessUtils.php',
    'Symfony\\Contracts\\EventDispatcher\\Event' => $vendorDir . '/symfony/event-dispatcher-contracts/Event.php',
    'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => $vendorDir . '/symfony/event-dispatcher-contracts/EventDispatcherInterface.php',
    'Symfony\\Polyfill\\Ctype\\Ctype' => $vendorDir . '/symfony/polyfill-ctype/Ctype.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'Symfony\\Polyfill\\Php80\\Php80' => $vendorDir . '/symfony/polyfill-php80/Php80.php',
    'Symfony\\Polyfill\\Php80\\PhpToken' => $vendorDir . '/symfony/polyfill-php80/PhpToken.php',
    'System' => $vendorDir . '/pear/pear-core-minimal/src/System.php',
    'UnhandledMatchError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
    'ValueError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    'wapmorgan\\BinaryStream\\BinaryStream' => $vendorDir . '/wapmorgan/binary-stream/src/BinaryStream.php',
    'wapmorgan\\CabArchive\\TerminalInfo' => $vendorDir . '/wapmorgan/cab-archive/src/TerminalInfo.php',
    'wapmorgan\\UnifiedArchive\\Abilities' => $vendorDir . '/wapmorgan/unified-archive/src/Abilities.php',
    'wapmorgan\\UnifiedArchive\\Archive7z' => $vendorDir . '/wapmorgan/unified-archive/src/Archive7z.php',
    'wapmorgan\\UnifiedArchive\\ArchiveEntry' => $vendorDir . '/wapmorgan/unified-archive/src/ArchiveEntry.php',
    'wapmorgan\\UnifiedArchive\\ArchiveInformation' => $vendorDir . '/wapmorgan/unified-archive/src/ArchiveInformation.php',
    'wapmorgan\\UnifiedArchive\\Commands\\AddFileCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/AddFileCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\BaseArchiveCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/BaseArchiveCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\BaseCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/BaseCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\BaseFileCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/BaseFileCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\CommentCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/CommentCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\CreateCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/CreateCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\DeleteFileCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/DeleteFileCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\DetailsCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/DetailsCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\DriversCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/DriversCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\ExtractArchiveCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/ExtractArchiveCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\ExtractFileCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/ExtractFileCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\ExtractFilesCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/ExtractFilesCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\FoldersCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/FoldersCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\FormatCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/FormatCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\FormatsCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/FormatsCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\InfoCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/InfoCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\ListCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/ListCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\PrintCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/PrintCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\TableCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/TableCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\TestCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/TestCommand.php',
    'wapmorgan\\UnifiedArchive\\Commands\\TypesCommand' => $vendorDir . '/wapmorgan/unified-archive/src/Commands/TypesCommand.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\AlchemyZippy' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/AlchemyZippy.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\Basic\\BasicDriver' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/Basic/BasicDriver.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\Basic\\BasicExtensionDriver' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/Basic/BasicExtensionDriver.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\Basic\\BasicPureDriver' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/Basic/BasicPureDriver.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\Basic\\BasicUtilityDriver' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/Basic/BasicUtilityDriver.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\Cab' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/Cab.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\Iso' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/Iso.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\NelexaZip' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/NelexaZip.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\OneFile\\Bzip' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/OneFile/Bzip.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\OneFile\\Gzip' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/OneFile/Gzip.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\OneFile\\Lzma' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/OneFile/Lzma.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\OneFile\\OneFileDriver' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/OneFile/OneFileDriver.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\Rar' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/Rar.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\SevenZip' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/SevenZip.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\SplitbrainPhpArchive' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/SplitbrainPhpArchive.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\TarByPear' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/TarByPear.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\TarByPhar' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/TarByPhar.php',
    'wapmorgan\\UnifiedArchive\\Drivers\\Zip' => $vendorDir . '/wapmorgan/unified-archive/src/Drivers/Zip.php',
    'wapmorgan\\UnifiedArchive\\Exceptions\\ArchiveCreationException' => $vendorDir . '/wapmorgan/unified-archive/src/Exceptions/ArchiveCreationException.php',
    'wapmorgan\\UnifiedArchive\\Exceptions\\ArchiveExtractionException' => $vendorDir . '/wapmorgan/unified-archive/src/Exceptions/ArchiveExtractionException.php',
    'wapmorgan\\UnifiedArchive\\Exceptions\\ArchiveModificationException' => $vendorDir . '/wapmorgan/unified-archive/src/Exceptions/ArchiveModificationException.php',
    'wapmorgan\\UnifiedArchive\\Exceptions\\EmptyFileListException' => $vendorDir . '/wapmorgan/unified-archive/src/Exceptions/EmptyFileListException.php',
    'wapmorgan\\UnifiedArchive\\Exceptions\\FileAlreadyExistsException' => $vendorDir . '/wapmorgan/unified-archive/src/Exceptions/FileAlreadyExistsException.php',
    'wapmorgan\\UnifiedArchive\\Exceptions\\NonExistentArchiveFileException' => $vendorDir . '/wapmorgan/unified-archive/src/Exceptions/NonExistentArchiveFileException.php',
    'wapmorgan\\UnifiedArchive\\Exceptions\\UnsupportedArchiveException' => $vendorDir . '/wapmorgan/unified-archive/src/Exceptions/UnsupportedArchiveException.php',
    'wapmorgan\\UnifiedArchive\\Exceptions\\UnsupportedOperationException' => $vendorDir . '/wapmorgan/unified-archive/src/Exceptions/UnsupportedOperationException.php',
    'wapmorgan\\UnifiedArchive\\Formats' => $vendorDir . '/wapmorgan/unified-archive/src/Formats.php',
    'wapmorgan\\UnifiedArchive\\LzwStreamWrapper' => $vendorDir . '/wapmorgan/unified-archive/src/LzwStreamWrapper.php',
    'wapmorgan\\UnifiedArchive\\PclZipInterface' => $vendorDir . '/wapmorgan/unified-archive/src/PclZipInterface.php',
    'wapmorgan\\UnifiedArchive\\UnifiedArchive' => $vendorDir . '/wapmorgan/unified-archive/src/UnifiedArchive.php',
);