<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Log\Handler\ApplicationLoggerDb' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'ApplicationLoggerDb.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'ApplicationLoggerProcessor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'monolog'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Monolog'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'IntrospectionProcessor.php';

$this->services['Pimcore\\Log\\Handler\\ApplicationLoggerDb'] = $instance = new \Pimcore\Log\Handler\ApplicationLoggerDb(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));

$instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));
$instance->pushProcessor(new \Pimcore\Log\Processor\ApplicationLoggerProcessor());
$instance->pushProcessor(new \Monolog\Processor\IntrospectionProcessor('DEBUG', [0 => 'Pimcore\\Log\\ApplicationLogger']));

return $instance;
