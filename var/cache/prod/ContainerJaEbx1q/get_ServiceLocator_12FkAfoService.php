<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.12FkAfo' shared service.

return $this->privates['.service_locator.12FkAfo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'siteConfigProvider' => ['privates', 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider', 'getSiteConfigProviderService.php', true],
    'translator' => ['services', 'Symfony\\Contracts\\Translation\\TranslatorInterface', 'getTranslatorInterfaceService', false],
], [
    'siteConfigProvider' => 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider',
    'translator' => '?',
]);
