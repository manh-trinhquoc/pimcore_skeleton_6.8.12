<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Document\Editable\EditableUsageResolver' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Document'.\DIRECTORY_SEPARATOR.'Editable'.\DIRECTORY_SEPARATOR.'EditableUsageResolver.php';

return $this->services['Pimcore\\Document\\Editable\\EditableUsageResolver'] = new \Pimcore\Document\Editable\EditableUsageResolver(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['Pimcore\\Document\\Renderer\\DocumentRenderer'] ?? $this->load('getDocumentRendererService.php')));
