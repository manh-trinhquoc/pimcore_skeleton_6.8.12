<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.http_utils' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'HttpUtils.php';

$a = ($this->services['router'] ?? $this->getRouterService());

return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', NULL);
