<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\DataObject\Import\Resolver\Code' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'DataObject'.\DIRECTORY_SEPARATOR.'Import'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'ResolverInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'DataObject'.\DIRECTORY_SEPARATOR.'Import'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'AbstractResolver.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'DataObject'.\DIRECTORY_SEPARATOR.'Import'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'Code.php';

return $this->privates['Pimcore\\DataObject\\Import\\Resolver\\Code'] = new \Pimcore\DataObject\Import\Resolver\Code(($this->services['Pimcore\\Localization\\LocaleServiceInterface'] ?? $this->load('getLocaleServiceInterfaceService.php')));
