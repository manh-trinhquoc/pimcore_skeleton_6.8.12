<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'GuzzleHttp\Client' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'guzzlehttp'.\DIRECTORY_SEPARATOR.'guzzle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClientInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'guzzlehttp'.\DIRECTORY_SEPARATOR.'guzzle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Client.php';

return $this->services['GuzzleHttp\\Client'] = ($this->services['Pimcore\\Http\\ClientFactory'] ?? $this->load('getClientFactoryService.php'))->createClient();
