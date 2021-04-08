<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'MigrationManager.php';
class MigrationManager_012d3a8 extends \Pimcore\Migrations\MigrationManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder526a8 = null;
    private $initializer3b229 = null;
    private static $publicPropertiescc422 = [
        
    ];
    public function getConfiguration(string $migrationSet) : \Pimcore\Migrations\Configuration\Configuration
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'getConfiguration', array('migrationSet' => $migrationSet), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->getConfiguration($migrationSet);
    }
    public function getVersion(string $migrationSet, string $versionId) : \Doctrine\DBAL\Migrations\Version
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'getVersion', array('migrationSet' => $migrationSet, 'versionId' => $versionId), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->getVersion($migrationSet, $versionId);
    }
    public function getBundleConfiguration(\Symfony\Component\HttpKernel\Bundle\BundleInterface $bundle) : \Pimcore\Migrations\Configuration\Configuration
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'getBundleConfiguration', array('bundle' => $bundle), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->getBundleConfiguration($bundle);
    }
    public function getBundleVersion(\Symfony\Component\HttpKernel\Bundle\BundleInterface $bundle, string $versionId) : \Doctrine\DBAL\Migrations\Version
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'getBundleVersion', array('bundle' => $bundle, 'versionId' => $versionId), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->getBundleVersion($bundle, $versionId);
    }
    public function getInstallConfiguration(\Pimcore\Migrations\Configuration\Configuration $configuration, \Pimcore\Extension\Bundle\Installer\MigrationInstallerInterface $installer) : \Pimcore\Migrations\Configuration\InstallConfiguration
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'getInstallConfiguration', array('configuration' => $configuration, 'installer' => $installer), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->getInstallConfiguration($configuration, $installer);
    }
    public function executeVersion(\Doctrine\DBAL\Migrations\Version $version, bool $up = true, bool $dryRun = false) : array
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'executeVersion', array('version' => $version, 'up' => $up, 'dryRun' => $dryRun), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->executeVersion($version, $up, $dryRun);
    }
    public function markVersionAsMigrated(\Doctrine\DBAL\Migrations\Version $version, bool $includePrevious = true)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'markVersionAsMigrated', array('version' => $version, 'includePrevious' => $includePrevious), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->markVersionAsMigrated($version, $includePrevious);
    }
    public function markVersionAsNotMigrated(\Doctrine\DBAL\Migrations\Version $version)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'markVersionAsNotMigrated', array('version' => $version), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->markVersionAsNotMigrated($version);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Migrations\MigrationManager $instance) {
            unset($instance->connection, $instance->configurationFactory);
        }, $instance, 'Pimcore\\Migrations\\MigrationManager')->__invoke($instance);
        $instance->initializer3b229 = $initializer;
        return $instance;
    }
    public function __construct(\Pimcore\Db\ConnectionInterface $connection, \Pimcore\Migrations\Configuration\ConfigurationFactory $configurationFactory)
    {
        static $reflection;
        if (! $this->valueHolder526a8) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Migrations\\MigrationManager');
            $this->valueHolder526a8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Migrations\MigrationManager $instance) {
            unset($instance->connection, $instance->configurationFactory);
        }, $this, 'Pimcore\\Migrations\\MigrationManager')->__invoke($this);
        }
        $this->valueHolder526a8->__construct($connection, $configurationFactory);
    }
    public function & __get($name)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__get', ['name' => $name], $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        if (isset(self::$publicPropertiescc422[$name])) {
            return $this->valueHolder526a8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Migrations\\MigrationManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder526a8;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder526a8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Migrations\\MigrationManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder526a8;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder526a8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__isset', array('name' => $name), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Migrations\\MigrationManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder526a8;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder526a8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__unset', array('name' => $name), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Migrations\\MigrationManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder526a8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder526a8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__clone', array(), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        $this->valueHolder526a8 = clone $this->valueHolder526a8;
    }
    public function __sleep()
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__sleep', array(), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return array('valueHolder526a8');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Pimcore\Migrations\MigrationManager $instance) {
            unset($instance->connection, $instance->configurationFactory);
        }, $this, 'Pimcore\\Migrations\\MigrationManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3b229 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3b229;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'initializeProxy', array(), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder526a8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder526a8;
    }
}
