<?php

namespace ContainerTcQyRbu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54368 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbe779 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd7f1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getConnection', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getMetadataFactory', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getExpressionBuilder', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'beginTransaction', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getCache', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'transactional', array('func' => $func), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->transactional($func);
    }

    public function commit()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'commit', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->commit();
    }

    public function rollback()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'rollback', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getClassMetadata', array('className' => $className), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'createQuery', array('dql' => $dql), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'createNamedQuery', array('name' => $name), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'createQueryBuilder', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'flush', array('entity' => $entity), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'clear', array('entityName' => $entityName), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->clear($entityName);
    }

    public function close()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'close', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->close();
    }

    public function persist($entity)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'persist', array('entity' => $entity), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'remove', array('entity' => $entity), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'refresh', array('entity' => $entity), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'detach', array('entity' => $entity), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'merge', array('entity' => $entity), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'contains', array('entity' => $entity), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getEventManager', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getConfiguration', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'isOpen', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getUnitOfWork', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getProxyFactory', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'initializeObject', array('obj' => $obj), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'getFilters', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'isFiltersStateClean', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'hasFilters', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return $this->valueHolder54368->hasFilters();
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

        $instance->initializerbe779 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54368) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54368 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54368->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, '__get', ['name' => $name], $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        if (isset(self::$publicPropertiesdd7f1[$name])) {
            return $this->valueHolder54368->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54368;

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

        $targetObject = $this->valueHolder54368;
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
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54368;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54368;
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
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, '__isset', array('name' => $name), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54368;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54368;
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
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, '__unset', array('name' => $name), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54368;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54368;
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
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, '__clone', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        $this->valueHolder54368 = clone $this->valueHolder54368;
    }

    public function __sleep()
    {
        $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, '__sleep', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;

        return array('valueHolder54368');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe779 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe779;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbe779 && ($this->initializerbe779->__invoke($valueHolder54368, $this, 'initializeProxy', array(), $this->initializerbe779) || 1) && $this->valueHolder54368 = $valueHolder54368;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54368;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54368;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
