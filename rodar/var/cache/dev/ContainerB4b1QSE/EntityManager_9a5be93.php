<?php

namespace ContainerB4b1QSE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera49e8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera629a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd523f = [
        
    ];

    public function getConnection()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getConnection', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getMetadataFactory', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getExpressionBuilder', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'beginTransaction', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getCache', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getCache();
    }

    public function transactional($func)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'transactional', array('func' => $func), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->transactional($func);
    }

    public function commit()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'commit', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->commit();
    }

    public function rollback()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'rollback', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getClassMetadata', array('className' => $className), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'createQuery', array('dql' => $dql), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'createNamedQuery', array('name' => $name), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'createQueryBuilder', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'flush', array('entity' => $entity), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'clear', array('entityName' => $entityName), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->clear($entityName);
    }

    public function close()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'close', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->close();
    }

    public function persist($entity)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'persist', array('entity' => $entity), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'remove', array('entity' => $entity), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'refresh', array('entity' => $entity), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'detach', array('entity' => $entity), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'merge', array('entity' => $entity), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getRepository', array('entityName' => $entityName), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'contains', array('entity' => $entity), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getEventManager', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getConfiguration', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'isOpen', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getUnitOfWork', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getProxyFactory', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'initializeObject', array('obj' => $obj), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'getFilters', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'isFiltersStateClean', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'hasFilters', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return $this->valueHoldera49e8->hasFilters();
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

        $instance->initializera629a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera49e8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera49e8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera49e8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, '__get', ['name' => $name], $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        if (isset(self::$publicPropertiesd523f[$name])) {
            return $this->valueHoldera49e8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera49e8;

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

        $targetObject = $this->valueHoldera49e8;
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
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera49e8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera49e8;
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
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, '__isset', array('name' => $name), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera49e8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera49e8;
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
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, '__unset', array('name' => $name), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera49e8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera49e8;
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
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, '__clone', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        $this->valueHoldera49e8 = clone $this->valueHoldera49e8;
    }

    public function __sleep()
    {
        $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, '__sleep', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;

        return array('valueHoldera49e8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera629a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera629a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera629a && ($this->initializera629a->__invoke($valueHoldera49e8, $this, 'initializeProxy', array(), $this->initializera629a) || 1) && $this->valueHoldera49e8 = $valueHoldera49e8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera49e8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera49e8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
