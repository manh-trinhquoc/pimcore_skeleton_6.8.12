<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Model\DataObject\QuantityValue\QuantityValueConverterInterface' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'models'.\DIRECTORY_SEPARATOR.'DataObject'.\DIRECTORY_SEPARATOR.'QuantityValue'.\DIRECTORY_SEPARATOR.'QuantityValueConverterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'models'.\DIRECTORY_SEPARATOR.'DataObject'.\DIRECTORY_SEPARATOR.'QuantityValue'.\DIRECTORY_SEPARATOR.'DefaultConverter.php';

return $this->services['Pimcore\\Model\\DataObject\\QuantityValue\\QuantityValueConverterInterface'] = new \Pimcore\Model\DataObject\QuantityValue\DefaultConverter();