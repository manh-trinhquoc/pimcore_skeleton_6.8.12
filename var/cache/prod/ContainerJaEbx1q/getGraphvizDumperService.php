<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Workflow\Dumper\GraphvizDumper' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Workflow'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'DumperInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Workflow'.\DIRECTORY_SEPARATOR.'Dumper'.\DIRECTORY_SEPARATOR.'GraphvizDumper.php';

return $this->services['Pimcore\\Workflow\\Dumper\\GraphvizDumper'] = new \Pimcore\Workflow\Dumper\GraphvizDumper(($this->services['Pimcore\\Workflow\\Manager'] ?? $this->load('getManagerService.php')));
