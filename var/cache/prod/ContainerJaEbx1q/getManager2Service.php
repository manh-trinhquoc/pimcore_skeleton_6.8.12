<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\AdminBundle\GDPR\DataProvider\Manager' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'bundles'.\DIRECTORY_SEPARATOR.'AdminBundle'.\DIRECTORY_SEPARATOR.'GDPR'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'Manager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'CollectionServiceLocator.php';

return $this->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Manager'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\Manager(new \Pimcore\DependencyInjection\CollectionServiceLocator(['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets' => function () {
    return ($this->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets'] ?? $this->load('getAssetsService.php'));
}, 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects' => function () {
    return ($this->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects'] ?? $this->load('getDataObjectsService.php'));
}, 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers' => function () {
    return ($this->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers'] ?? $this->load('getPimcoreUsersService.php'));
}, 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail' => function () {
    return ($this->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail'] ?? ($this->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\SentMail()));
}]));
