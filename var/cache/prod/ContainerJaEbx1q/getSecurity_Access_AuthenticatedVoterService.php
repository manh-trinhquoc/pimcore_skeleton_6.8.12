<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access.authenticated_voter' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'VoterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'AuthenticatedVoter.php';

return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['scheb_two_factor.security.authentication.trust_resolver'] ?? $this->getSchebTwoFactor_Security_Authentication_TrustResolverService()));
