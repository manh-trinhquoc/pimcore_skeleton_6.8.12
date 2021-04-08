<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Maintenance\Executor' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'ExecutorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Executor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'TaskInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'ScheduledTasksTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'LogMailMaintenanceTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'LogCleanupTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'LogErrorCleanupTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'LogArchiveTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'SanitizeElementsTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'CleanupBrickTablesTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'CleanupClassificationstoreTablesTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'CleanupFieldcollectionTablesTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'VersionsCleanupTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'VersionsCompressTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'VersionsCleanupStackTraceDbTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'RedirectCleanupTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'DbCleanupBrokenViewsTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'CacheCleanupTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'TmpStoreCleanupTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'ImageOptimizeTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'AssetDocumentConversionTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'HousekeepingTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'LowQualityImagePreviewTask.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'Tasks'.\DIRECTORY_SEPARATOR.'CheckErrorLogsDbTask.php';

$a = ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());
$b = ($this->services['Symfony\\Component\\Lock\\LockFactory'] ?? $this->getLockFactoryService());

$this->privates['Pimcore\\Maintenance\\Executor'] = $instance = new \Pimcore\Maintenance\Executor('maintenance.pid', $a, $b);

$c = ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService());
$d = ($this->services['Pimcore\\Config'] ?? ($this->services['Pimcore\\Config'] = new \Pimcore\Config()));

$instance->registerTask('scheduledtasks', new \Pimcore\Maintenance\Tasks\ScheduledTasksTask($a));
$instance->registerTask('logmaintenance', new \Pimcore\Maintenance\Tasks\LogMailMaintenanceTask($c, $d));
$instance->registerTask('cleanuplogfiles', new \Pimcore\Maintenance\Tasks\LogCleanupTask());
$instance->registerTask('httperrorlog', new \Pimcore\Maintenance\Tasks\LogErrorCleanupTask($c));
$instance->registerTask('archiveLogEntries', new \Pimcore\Maintenance\Tasks\LogArchiveTask($c, $d));
$instance->registerTask('runSanityCheck', new \Pimcore\Maintenance\Tasks\SanitizeElementsTask($a));
$instance->registerTask('cleanupBrickTables', new \Pimcore\Maintenance\Tasks\CleanupBrickTablesTask($a));
$instance->registerTask('cleanupClassificationstoreTables', new \Pimcore\Maintenance\Tasks\CleanupClassificationstoreTablesTask($a));
$instance->registerTask('cleanupFieldcollectionTables', new \Pimcore\Maintenance\Tasks\CleanupFieldcollectionTablesTask($a));
$instance->registerTask('versioncleanup', new \Pimcore\Maintenance\Tasks\VersionsCleanupTask($a, $d));
$instance->registerTask('versioncompress', new \Pimcore\Maintenance\Tasks\VersionsCompressTask($a));
$instance->registerTask('VersionsCleanupStackTraceDb', new \Pimcore\Maintenance\Tasks\VersionsCleanupStackTraceDbTask($a));
$instance->registerTask('redirectcleanup', new \Pimcore\Maintenance\Tasks\RedirectCleanupTask($a));
$instance->registerTask('cleanupbrokenviews', new \Pimcore\Maintenance\Tasks\DbCleanupBrokenViewsTask($c, $a));
$instance->registerTask('cleanupcache', new \Pimcore\Maintenance\Tasks\CacheCleanupTask(($this->services['pimcore.cache.core.handler'] ?? $this->getPimcore_Cache_Core_HandlerService()), $a, $b));
$instance->registerTask('tmpstorecleanup', new \Pimcore\Maintenance\Tasks\TmpStoreCleanupTask($c));
$instance->registerTask('imageoptimize', new \Pimcore\Maintenance\Tasks\ImageOptimizeTask(($this->services['Pimcore\\Image\\Optimizer'] ?? $this->load('getOptimizerService.php')), $a));
$instance->registerTask('asset_document_convert', new \Pimcore\Maintenance\Tasks\AssetDocumentConversionTask($a));
$instance->registerTask('housekeeping', new \Pimcore\Maintenance\Tasks\HousekeepingTask(7776000, 1800));
$instance->registerTask('low_quality_image_preview', new \Pimcore\Maintenance\Tasks\LowQualityImagePreviewTask($a, $b));
$instance->registerTask('markexpiredtagsdisabled', $this->load('getTagsExpireTaskService.php'));
$instance->registerTask('checkerrorlogsdb', new \Pimcore\Maintenance\Tasks\CheckErrorLogsDbTask($c, $d));

return $instance;