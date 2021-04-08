<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'two-factor-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'PersisterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'two-factor-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Persister'.\DIRECTORY_SEPARATOR.'DoctrinePersister.php';
class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder526a8 = null;
    private $initializer3b229 = null;
    private static $publicPropertiescc422 = [
        
    ];
    public function persist($user) : void
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'persist', array('user' => $user), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        $this->valueHolder526a8->persist($user);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $instance, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($instance);
        $instance->initializer3b229 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\Common\Persistence\ObjectManager $om)
    {
        static $reflection;
        if (! $this->valueHolder526a8) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHolder526a8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
        }
        $this->valueHolder526a8->__construct($om);
    }
    public function & __get($name)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__get', ['name' => $name], $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        if (isset(self::$publicPropertiescc422[$name])) {
            return $this->valueHolder526a8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
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
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
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
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
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
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
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
