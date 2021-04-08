<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'HelperInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Helper.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'pimcore'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Navigation.php';
class Navigation_a34f8f7 extends \Pimcore\Templating\Helper\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder526a8 = null;
    private $initializer3b229 = null;
    private static $publicPropertiescc422 = [
        
    ];
    public function getName()
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'getName', array(), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->getName();
    }
    public function buildNavigation(\Pimcore\Model\Document $activeDocument, ?\Pimcore\Model\Document $navigationRootDocument = null, ?string $htmlMenuPrefix = null, ?callable $pageCallback = null, $cache = true, $maxDepth = null, $cacheLifetime = null) : \Pimcore\Navigation\Container
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'buildNavigation', array('activeDocument' => $activeDocument, 'navigationRootDocument' => $navigationRootDocument, 'htmlMenuPrefix' => $htmlMenuPrefix, 'pageCallback' => $pageCallback, 'cache' => $cache, 'maxDepth' => $maxDepth, 'cacheLifetime' => $cacheLifetime), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->buildNavigation($activeDocument, $navigationRootDocument, $htmlMenuPrefix, $pageCallback, $cache, $maxDepth, $cacheLifetime);
    }
    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'build', array('params' => $params), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->build($params);
    }
    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'getRenderer', array('alias' => $alias), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->getRenderer($alias);
    }
    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }
    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->__call($method, $arguments);
    }
    public function setCharset($charset)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'setCharset', array('charset' => $charset), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, 'getCharset', array(), $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        return $this->valueHolder526a8->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($instance);
        $instance->initializer3b229 = $initializer;
        return $instance;
    }
    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;
        if (! $this->valueHolder526a8) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Templating\\Helper\\Navigation');
            $this->valueHolder526a8 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($this);
        }
        $this->valueHolder526a8->__construct($builder, $rendererLocator);
    }
    public function & __get($name)
    {
        $this->initializer3b229 && ($this->initializer3b229->__invoke($valueHolder526a8, $this, '__get', ['name' => $name], $this->initializer3b229) || 1) && $this->valueHolder526a8 = $valueHolder526a8;
        if (isset(self::$publicPropertiescc422[$name])) {
            return $this->valueHolder526a8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Templating\\Helper\\Navigation');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Templating\\Helper\\Navigation');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Templating\\Helper\\Navigation');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Templating\\Helper\\Navigation');
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
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($this);
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
