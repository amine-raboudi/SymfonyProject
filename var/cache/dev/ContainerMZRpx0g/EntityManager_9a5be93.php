<?php

namespace ContainerMZRpx0g;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder84423 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8b32a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties02aef = [
        
    ];

    public function getConnection()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getConnection', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getMetadataFactory', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getExpressionBuilder', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'beginTransaction', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getCache', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'transactional', array('func' => $func), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'commit', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->commit();
    }

    public function rollback()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'rollback', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getClassMetadata', array('className' => $className), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'createQuery', array('dql' => $dql), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'createNamedQuery', array('name' => $name), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'createQueryBuilder', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'flush', array('entity' => $entity), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'clear', array('entityName' => $entityName), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->clear($entityName);
    }

    public function close()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'close', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->close();
    }

    public function persist($entity)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'persist', array('entity' => $entity), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'remove', array('entity' => $entity), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'refresh', array('entity' => $entity), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'detach', array('entity' => $entity), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'merge', array('entity' => $entity), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'contains', array('entity' => $entity), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getEventManager', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getConfiguration', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'isOpen', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getUnitOfWork', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getProxyFactory', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'initializeObject', array('obj' => $obj), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'getFilters', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'isFiltersStateClean', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'hasFilters', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return $this->valueHolder84423->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer8b32a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder84423) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder84423 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder84423->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, '__get', ['name' => $name], $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        if (isset(self::$publicProperties02aef[$name])) {
            return $this->valueHolder84423->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84423;

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

        $targetObject = $this->valueHolder84423;
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
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84423;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder84423;
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
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, '__isset', array('name' => $name), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84423;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder84423;
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
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, '__unset', array('name' => $name), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84423;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder84423;
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
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, '__clone', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        $this->valueHolder84423 = clone $this->valueHolder84423;
    }

    public function __sleep()
    {
        $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, '__sleep', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;

        return array('valueHolder84423');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8b32a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8b32a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8b32a && ($this->initializer8b32a->__invoke($valueHolder84423, $this, 'initializeProxy', array(), $this->initializer8b32a) || 1) && $this->valueHolder84423 = $valueHolder84423;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder84423;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder84423;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
