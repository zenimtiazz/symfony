<?php

namespace ContainerY6FCNUy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc486a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf357c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1d5ad = [
        
    ];

    public function getConnection()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getConnection', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getMetadataFactory', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getExpressionBuilder', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'beginTransaction', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getCache', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'transactional', array('func' => $func), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'commit', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->commit();
    }

    public function rollback()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'rollback', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getClassMetadata', array('className' => $className), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'createQuery', array('dql' => $dql), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'createNamedQuery', array('name' => $name), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'createQueryBuilder', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'flush', array('entity' => $entity), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'clear', array('entityName' => $entityName), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->clear($entityName);
    }

    public function close()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'close', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->close();
    }

    public function persist($entity)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'persist', array('entity' => $entity), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'remove', array('entity' => $entity), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'refresh', array('entity' => $entity), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'detach', array('entity' => $entity), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'merge', array('entity' => $entity), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'contains', array('entity' => $entity), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getEventManager', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getConfiguration', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'isOpen', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getUnitOfWork', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getProxyFactory', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'initializeObject', array('obj' => $obj), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'getFilters', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'isFiltersStateClean', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'hasFilters', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return $this->valueHolderc486a->hasFilters();
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

        $instance->initializerf357c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc486a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc486a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc486a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, '__get', ['name' => $name], $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        if (isset(self::$publicProperties1d5ad[$name])) {
            return $this->valueHolderc486a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc486a;

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

        $targetObject = $this->valueHolderc486a;
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
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc486a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc486a;
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
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, '__isset', array('name' => $name), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc486a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc486a;
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
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, '__unset', array('name' => $name), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc486a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc486a;
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
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, '__clone', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        $this->valueHolderc486a = clone $this->valueHolderc486a;
    }

    public function __sleep()
    {
        $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, '__sleep', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;

        return array('valueHolderc486a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf357c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf357c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf357c && ($this->initializerf357c->__invoke($valueHolderc486a, $this, 'initializeProxy', array(), $this->initializerf357c) || 1) && $this->valueHolderc486a = $valueHolderc486a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc486a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc486a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
