<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.l1CuC14' shared service.

return $this->privates['.service_locator.l1CuC14'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'event' => ['privates', '.errored..service_locator.l1CuC14.Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent', NULL, 'Cannot autowire service ".service_locator.l1CuC14": it references class "Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent" but no such service exists.'],
], [
    'event' => 'Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent',
]);
