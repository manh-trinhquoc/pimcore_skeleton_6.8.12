<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.BTR2smf' shared service.

return $this->privates['.service_locator.BTR2smf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'actionsButtonService' => ['privates', 'Pimcore\\Workflow\\ActionsButtonService', 'getActionsButtonServiceService.php', true],
    'placeStatusInfo' => ['services', 'Pimcore\\Workflow\\Place\\StatusInfo', 'getStatusInfoService.php', true],
    'router' => ['services', 'router', 'getRouterService', false],
    'workflowManager' => ['services', 'Pimcore\\Workflow\\Manager', 'getManagerService.php', true],
], [
    'actionsButtonService' => 'Pimcore\\Workflow\\ActionsButtonService',
    'placeStatusInfo' => 'Pimcore\\Workflow\\Place\\StatusInfo',
    'router' => '?',
    'workflowManager' => 'Pimcore\\Workflow\\Manager',
]);
