<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'bundles'.\DIRECTORY_SEPARATOR.'AdminBundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AdminExceptionListener.php';

$this->privates['Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminExceptionListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener();

$instance->setPimcoreContextResolver(($this->services['Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver'] ?? $this->getPimcoreContextResolverService()));

return $instance;
