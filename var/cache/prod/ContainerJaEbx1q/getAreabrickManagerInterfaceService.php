<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Extension\Document\Areabrick\AreabrickManagerInterface' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Document'.\DIRECTORY_SEPARATOR.'Areabrick'.\DIRECTORY_SEPARATOR.'AreabrickManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Document'.\DIRECTORY_SEPARATOR.'Areabrick'.\DIRECTORY_SEPARATOR.'AreabrickManager.php';

return $this->services['Pimcore\\Extension\\Document\\Areabrick\\AreabrickManagerInterface'] = new \Pimcore\Extension\Document\Areabrick\AreabrickManager(($this->services['Pimcore\\Extension\\Config'] ?? $this->get('Pimcore\\Extension\\Config', 1)), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []));
