<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'presta_sitemap.eventlistener.route_annotation' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'presta'.\DIRECTORY_SEPARATOR.'sitemap-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RouteAnnotationEventListener.php';

return $this->privates['presta_sitemap.eventlistener.route_annotation'] = new \Presta\SitemapBundle\EventListener\RouteAnnotationEventListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'default');