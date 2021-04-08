<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Analytics\Piwik\EventListener\IndexSettingsListener' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Analytics'.\DIRECTORY_SEPARATOR.'Piwik'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'IndexSettingsListener.php';

return $this->privates['Pimcore\\Analytics\\Piwik\\EventListener\\IndexSettingsListener'] = new \Pimcore\Analytics\Piwik\EventListener\IndexSettingsListener(($this->privates['Pimcore\\Analytics\\Piwik\\Config\\ConfigProvider'] ?? ($this->privates['Pimcore\\Analytics\\Piwik\\Config\\ConfigProvider'] = new \Pimcore\Analytics\Piwik\Config\ConfigProvider())), ($this->privates['Pimcore\\Analytics\\Piwik\\ReportBroker'] ?? $this->load('getReportBrokerService.php')), ($this->services['Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver'] ?? $this->getTokenStorageUserResolverService()));
