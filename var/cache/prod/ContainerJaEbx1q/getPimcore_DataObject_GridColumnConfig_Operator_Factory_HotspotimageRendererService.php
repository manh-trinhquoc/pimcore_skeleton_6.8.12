<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pimcore.data_object.grid_column_config.operator.factory.hotspotimage_renderer' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'DataObject'.\DIRECTORY_SEPARATOR.'GridColumnConfig'.\DIRECTORY_SEPARATOR.'Operator'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'OperatorFactoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'DataObject'.\DIRECTORY_SEPARATOR.'GridColumnConfig'.\DIRECTORY_SEPARATOR.'Operator'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'DefaultOperatorFactory.php';

return $this->privates['pimcore.data_object.grid_column_config.operator.factory.hotspotimage_renderer'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\HotspotimageRenderer');
