<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Controller\Config\ControllerDataProvider' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'ControllerDataProvider.php';

return $this->services['Pimcore\\Controller\\Config\\ControllerDataProvider'] = new \Pimcore\Controller\Config\ControllerDataProvider(($this->services['kernel'] ?? $this->get('kernel', 1)), $this->parameters['pimcore.service_controllers']);
