<?php

namespace ContainerAAS6rdD;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3de50 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercd053 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0b9b = [
        
    ];

    public function getConnection()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getConnection', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getMetadataFactory', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getExpressionBuilder', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'beginTransaction', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getCache', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getCache();
    }

    public function transactional($func)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'transactional', array('func' => $func), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'wrapInTransaction', array('func' => $func), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'commit', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->commit();
    }

    public function rollback()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'rollback', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getClassMetadata', array('className' => $className), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'createQuery', array('dql' => $dql), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'createNamedQuery', array('name' => $name), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'createQueryBuilder', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'flush', array('entity' => $entity), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'clear', array('entityName' => $entityName), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->clear($entityName);
    }

    public function close()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'close', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->close();
    }

    public function persist($entity)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'persist', array('entity' => $entity), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'remove', array('entity' => $entity), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'refresh', array('entity' => $entity), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'detach', array('entity' => $entity), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'merge', array('entity' => $entity), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getRepository', array('entityName' => $entityName), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'contains', array('entity' => $entity), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getEventManager', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getConfiguration', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'isOpen', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getUnitOfWork', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getProxyFactory', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'initializeObject', array('obj' => $obj), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'getFilters', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'isFiltersStateClean', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'hasFilters', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return $this->valueHolder3de50->hasFilters();
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

        $instance->initializercd053 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3de50) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3de50 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3de50->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, '__get', ['name' => $name], $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        if (isset(self::$publicPropertiesb0b9b[$name])) {
            return $this->valueHolder3de50->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3de50;

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

        $targetObject = $this->valueHolder3de50;
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
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3de50;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3de50;
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
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, '__isset', array('name' => $name), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3de50;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3de50;
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
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, '__unset', array('name' => $name), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3de50;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3de50;
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
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, '__clone', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        $this->valueHolder3de50 = clone $this->valueHolder3de50;
    }

    public function __sleep()
    {
        $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, '__sleep', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;

        return array('valueHolder3de50');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercd053 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercd053;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercd053 && ($this->initializercd053->__invoke($valueHolder3de50, $this, 'initializeProxy', array(), $this->initializercd053) || 1) && $this->valueHolder3de50 = $valueHolder3de50;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3de50;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3de50;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
