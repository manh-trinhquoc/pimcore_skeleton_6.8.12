<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_prune' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'FrameworkBundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CachePoolPruneCommand.php';

$this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => ($this->services['cache.app'] ?? $this->load('getCache_AppService.php'));
}, 1));

$instance->setName('cache:pool:prune');

return $instance;
