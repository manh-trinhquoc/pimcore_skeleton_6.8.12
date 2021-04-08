<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'pimcore.implementation_loader.asset.metadata.data' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ImplementationLoader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ImplementationLoader'.\DIRECTORY_SEPARATOR.'ClassNameLoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ImplementationLoader'.\DIRECTORY_SEPARATOR.'ImplementationLoader.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'DataLoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'DataLoader.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ImplementationLoader'.\DIRECTORY_SEPARATOR.'AbstractClassNameLoader.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'ImplementationLoader'.\DIRECTORY_SEPARATOR.'ClassMapLoader.php';

return $this->services['pimcore.implementation_loader.asset.metadata.data'] = new \Pimcore\Model\Asset\Metadata\Loader\DataLoader([0 => new \Pimcore\Loader\ImplementationLoader\ClassMapLoader(['asset' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Asset', 'checkbox' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Checkbox', 'date' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Date', 'document' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Document', 'input' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Input', 'object' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\DataObject', 'select' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Select', 'textarea' => '\\Pimcore\\Model\\Asset\\MetaData\\ClassDefinition\\Data\\Textarea'])]);
