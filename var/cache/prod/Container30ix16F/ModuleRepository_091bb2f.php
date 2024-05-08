<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder79c32 = null;
    private $initializerf1fbf = null;
    private static $publicPropertiesa87d1 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getList', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getInstalledModules', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getMustBeConfiguredModules', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getUpgradableModules', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'setActionUrls', array('collection' => $collection), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerf1fbf = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder79c32) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder79c32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder79c32->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, '__get', ['name' => $name], $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        if (isset(self::$publicPropertiesa87d1[$name])) {
            return $this->valueHolder79c32->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79c32;
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
        $targetObject = $this->valueHolder79c32;
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
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79c32;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder79c32;
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
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, '__isset', array('name' => $name), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79c32;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder79c32;
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
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, '__unset', array('name' => $name), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79c32;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder79c32;
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
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, '__clone', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        $this->valueHolder79c32 = clone $this->valueHolder79c32;
    }
    public function __sleep()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, '__sleep', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return array('valueHolder79c32');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf1fbf = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf1fbf;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'initializeProxy', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder79c32;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder79c32;
    }
}
