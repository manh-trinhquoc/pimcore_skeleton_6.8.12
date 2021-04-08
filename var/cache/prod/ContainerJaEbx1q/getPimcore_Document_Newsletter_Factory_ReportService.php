<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pimcore.document.newsletter.factory.report' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Document'.\DIRECTORY_SEPARATOR.'Newsletter'.\DIRECTORY_SEPARATOR.'AddressSourceAdapterFactoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Document'.\DIRECTORY_SEPARATOR.'Newsletter'.\DIRECTORY_SEPARATOR.'ReportAddressSourceAdapterFactory.php';

return $this->privates['pimcore.document.newsletter.factory.report'] = new \Pimcore\Document\Newsletter\ReportAddressSourceAdapterFactory(($this->services['pimcore.custom_report.adapter.factories'] ?? $this->load('getPimcore_CustomReport_Adapter_FactoriesService.php')));