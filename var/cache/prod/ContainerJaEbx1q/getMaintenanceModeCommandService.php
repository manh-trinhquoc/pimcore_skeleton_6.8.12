<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Pimcore\Bundle\CoreBundle\Command\MaintenanceModeCommand' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'AbstractCommand.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'bundles'.\DIRECTORY_SEPARATOR.'CoreBundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MaintenanceModeCommand.php';

return $this->services['console.command.public_alias.Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceModeCommand'] = new \Pimcore\Bundle\CoreBundle\Command\MaintenanceModeCommand();
