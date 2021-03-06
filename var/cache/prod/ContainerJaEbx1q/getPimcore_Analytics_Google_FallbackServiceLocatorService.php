<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'pimcore.analytics.google.fallback_service_locator' shared autowired service.

return $this->services['pimcore.analytics.google.fallback_service_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider' => ['privates', 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider', 'getSiteConfigProviderService.php', true],
    'Pimcore\\Analytics\\Google\\Tracker' => ['privates', 'Pimcore\\Analytics\\Google\\Tracker', 'getTrackerService', false],
], [
    'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider' => '?',
    'Pimcore\\Analytics\\Google\\Tracker' => '?',
]);
