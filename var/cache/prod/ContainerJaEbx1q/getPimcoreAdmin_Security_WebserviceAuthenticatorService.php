<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'pimcore_admin.security.webservice_authenticator' shared autowired service.

@trigger_error('The "pimcore_admin.security.webservice_authenticator" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

$this->services['pimcore_admin.security.webservice_authenticator'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\Guard\WebserviceAuthenticator();

$a = ($this->services['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService());

$instance->setLogger($a);
$instance->setLogger($a);

return $instance;
