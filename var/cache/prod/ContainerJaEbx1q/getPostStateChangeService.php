<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\CoreBundle\Command\Bundle\Helper\PostStateChange' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'bundles'.\DIRECTORY_SEPARATOR.'CoreBundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'PostStateChange.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'CacheClearer.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Tool'.\DIRECTORY_SEPARATOR.'AssetsInstaller.php';

return $this->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\Helper\\PostStateChange'] = new \Pimcore\Bundle\CoreBundle\Command\Bundle\Helper\PostStateChange(($this->services['Pimcore\\Cache\\Symfony\\CacheClearer'] ?? ($this->services['Pimcore\\Cache\\Symfony\\CacheClearer'] = new \Pimcore\Cache\Symfony\CacheClearer())), ($this->services['Pimcore\\Tool\\AssetsInstaller'] ?? ($this->services['Pimcore\\Tool\\AssetsInstaller'] = new \Pimcore\Tool\AssetsInstaller())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
