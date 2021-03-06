<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Targeting\DataProvider\Device' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Targeting'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'DataProviderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Targeting'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'Device.php';

$this->privates['Pimcore\\Targeting\\DataProvider\\Device'] = $instance = new \Pimcore\Targeting\DataProvider\Device(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

$instance->setCache(($this->services['pimcore.cache.core.handler'] ?? $this->getPimcore_Cache_Core_HandlerService()));
$instance->setCachePool(($this->services['pimcore.cache.core.pool'] ?? $this->getPimcore_Cache_Core_PoolService()));

return $instance;
