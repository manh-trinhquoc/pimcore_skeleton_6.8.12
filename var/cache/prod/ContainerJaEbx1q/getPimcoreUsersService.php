<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\AdminBundle\GDPR\DataProvider\PimcoreUsers' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'bundles'.\DIRECTORY_SEPARATOR.'AdminBundle'.\DIRECTORY_SEPARATOR.'GDPR'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'DataProviderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'bundles'.\DIRECTORY_SEPARATOR.'AdminBundle'.\DIRECTORY_SEPARATOR.'GDPR'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'PimcoreUsers.php';

return $this->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\PimcoreUsers(($this->services['Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver'] ?? $this->getTokenStorageUserResolverService()));
