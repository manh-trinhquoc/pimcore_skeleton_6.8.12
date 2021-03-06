<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'scheb_two_factor.firewall_context' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'two-factor-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'TwoFactorFirewallContext.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'two-factor-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'TwoFactorFirewallConfig.php';

return $this->services['scheb_two_factor.firewall_context'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallContext(['admin' => new \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallConfig(['auth_form_path' => '/admin/login/2fa', 'check_path' => '/admin/login/2fa-verify', 'default_target_path' => '/admin', 'always_use_default_target_path' => false, 'auth_code_parameter_name' => '_auth_code', 'trusted_parameter_name' => '_trusted', 'multi_factor' => false, 'success_handler' => NULL, 'failure_handler' => NULL, 'authentication_required_handler' => NULL, 'csrf_token_generator' => NULL, 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'two_factor', 'provider' => NULL])]);
