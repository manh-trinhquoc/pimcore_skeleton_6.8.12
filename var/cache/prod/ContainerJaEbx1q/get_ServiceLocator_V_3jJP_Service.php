<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.V.3jJP.' shared service.

return $this->privates['.service_locator.V.3jJP.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'service' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects', 'getDataObjectsService.php', true],
], [
    'service' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects',
]);