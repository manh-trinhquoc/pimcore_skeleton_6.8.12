<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'pimcore.templating.view_helper.device' shared autowired service.

@trigger_error('The "pimcore.templating.view_helper.device" service is deprecated and will be removed in Pimcore 7', E_USER_DEPRECATED);

return $this->services['pimcore.templating.view_helper.device'] = new \Pimcore\Templating\Helper\Device();
