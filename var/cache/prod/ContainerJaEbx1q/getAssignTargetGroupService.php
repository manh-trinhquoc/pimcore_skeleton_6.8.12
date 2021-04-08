<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Targeting\ActionHandler\AssignTargetGroup' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Targeting'.\DIRECTORY_SEPARATOR.'ActionHandler'.\DIRECTORY_SEPARATOR.'AssignTargetGroup.php';

return $this->privates['Pimcore\\Targeting\\ActionHandler\\AssignTargetGroup'] = new \Pimcore\Targeting\ActionHandler\AssignTargetGroup(($this->privates['Pimcore\\Targeting\\ConditionMatcher'] ?? $this->getConditionMatcherService()), ($this->privates['Pimcore\\Targeting\\Storage\\CookieStorage'] ?? $this->getCookieStorageService()));