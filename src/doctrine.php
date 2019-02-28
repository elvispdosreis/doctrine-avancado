<?php

$paths = [
    __DIR__ . '/Entity'
];

$isDevMode = true;

$cache = new \Doctrine\Common\Cache\ArrayCache();

$dbParams = [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'user' => 'root',
    'password' => '101010',
    'dbname' => 'son_doctrine_avanc_curso',
    'charset' => 'utf8'
];


$dbParams = [
    'driver_class' => 'Kafoso\DoctrineFirebirdDriver\Driver\FirebirdInterbase\Driver',
    'host' => '127.0.0.1',
    'user' => 'SYSDBA',
    'password' => 'masterkey',
    'dbname' => 'd:/music_library.fdb',
    'charset' => 'utf8'
];

$config = new \Doctrine\ORM\Configuration();
$config->setMetadataCacheImpl($cache);
$driverImpl = $config->newDefaultAnnotationDriver($paths, false);
$config->setMetadataDriverImpl($driverImpl);
$config->setQueryCacheImpl($cache);
$config->setProxyDir(__DIR__ . '/../proxy');
$config->setProxyNamespace('SON\Proxies');
$config->setAutoGenerateProxyClasses(true);

$entityManager = \Doctrine\ORM\EntityManager::create($dbParams, $config);

function getEntityManager()
{
    global $entityManager;
    return $entityManager;
}