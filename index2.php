<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/doctrine.php';

$entityManager = getEntityManager();


/** @var \SON\Entity\Vehicle $vehicle */
$vehicle= $entityManager->getRepository(\SON\Entity\Vehicle::class);
$result = $vehicle->find(1);
$result->setColor('black');
$result->setWheelage(20);
$entityManager->persist($result);
$entityManager->flush();
dump($result);

$truck = new \SON\Entity\Truck();
$truck->setColor('white');
$truck->setWheelage('14');
$entityManager->persist($truck);
$entityManager->flush();

