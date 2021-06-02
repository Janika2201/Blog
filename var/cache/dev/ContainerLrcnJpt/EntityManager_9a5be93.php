<?php

namespace ContainerLrcnJpt;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef69f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13465 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfbbec = [
        
    ];

    public function getConnection()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getConnection', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getMetadataFactory', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getExpressionBuilder', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'beginTransaction', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getCache', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'transactional', array('func' => $func), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->transactional($func);
    }

    public function commit()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'commit', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->commit();
    }

    public function rollback()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'rollback', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getClassMetadata', array('className' => $className), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'createQuery', array('dql' => $dql), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'createNamedQuery', array('name' => $name), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'createQueryBuilder', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'flush', array('entity' => $entity), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'clear', array('entityName' => $entityName), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->clear($entityName);
    }

    public function close()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'close', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->close();
    }

    public function persist($entity)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'persist', array('entity' => $entity), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'remove', array('entity' => $entity), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'refresh', array('entity' => $entity), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'detach', array('entity' => $entity), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'merge', array('entity' => $entity), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'contains', array('entity' => $entity), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getEventManager', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getConfiguration', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'isOpen', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getUnitOfWork', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getProxyFactory', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'initializeObject', array('obj' => $obj), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'getFilters', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'isFiltersStateClean', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'hasFilters', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return $this->valueHolderef69f->hasFilters();
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

        $instance->initializer13465 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderef69f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef69f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef69f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, '__get', ['name' => $name], $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        if (isset(self::$publicPropertiesfbbec[$name])) {
            return $this->valueHolderef69f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef69f;

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

        $targetObject = $this->valueHolderef69f;
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
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef69f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef69f;
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
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, '__isset', array('name' => $name), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef69f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderef69f;
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
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, '__unset', array('name' => $name), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef69f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderef69f;
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
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, '__clone', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        $this->valueHolderef69f = clone $this->valueHolderef69f;
    }

    public function __sleep()
    {
        $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, '__sleep', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;

        return array('valueHolderef69f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13465 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13465;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer13465 && ($this->initializer13465->__invoke($valueHolderef69f, $this, 'initializeProxy', array(), $this->initializer13465) || 1) && $this->valueHolderef69f = $valueHolderef69f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef69f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef69f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
