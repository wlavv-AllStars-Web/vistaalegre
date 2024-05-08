<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder79c32 = null;
    private $initializerf1fbf = null;
    private static $publicPropertiesa87d1 = [
        
    ];
    public function getConnection()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getConnection', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getMetadataFactory', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getExpressionBuilder', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'beginTransaction', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getCache', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'transactional', array('func' => $func), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'commit', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->commit();
    }
    public function rollback()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'rollback', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getClassMetadata', array('className' => $className), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'createQuery', array('dql' => $dql), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'createNamedQuery', array('name' => $name), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'createQueryBuilder', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'flush', array('entity' => $entity), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'clear', array('entityName' => $entityName), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->clear($entityName);
    }
    public function close()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'close', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->close();
    }
    public function persist($entity)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'persist', array('entity' => $entity), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'remove', array('entity' => $entity), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'refresh', array('entity' => $entity), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'detach', array('entity' => $entity), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'merge', array('entity' => $entity), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'contains', array('entity' => $entity), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getEventManager', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getConfiguration', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'isOpen', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getUnitOfWork', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getProxyFactory', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'initializeObject', array('obj' => $obj), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'getFilters', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'isFiltersStateClean', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, 'hasFilters', array(), $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        return $this->valueHolder79c32->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf1fbf = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder79c32) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder79c32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder79c32->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf1fbf && ($this->initializerf1fbf->__invoke($valueHolder79c32, $this, '__get', ['name' => $name], $this->initializerf1fbf) || 1) && $this->valueHolder79c32 = $valueHolder79c32;
        if (isset(self::$publicPropertiesa87d1[$name])) {
            return $this->valueHolder79c32->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
