<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Targeting\EventListener\DocumentTargetGroupListener' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Targeting'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'DocumentTargetGroupListener.php';

return $this->privates['Pimcore\\Targeting\\EventListener\\DocumentTargetGroupListener'] = new \Pimcore\Targeting\EventListener\DocumentTargetGroupListener(($this->services['Pimcore\\Http\\Request\\Resolver\\DocumentResolver'] ?? $this->getDocumentResolverService()), ($this->privates['Pimcore\\Targeting\\ActionHandler\\DelegatingActionHandler'] ?? $this->getDelegatingActionHandlerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
