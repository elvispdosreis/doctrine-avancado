<?php

require_once __DIR__ . '/vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

require_once __DIR__ . '/src/doctrine.php';

$entityManager = getEntityManager();

$order = new \SON\Entity\Order();
$invoice = new \SON\Entity\Invoice();
$order->setInvoice($invoice);
$entityManager->persist($order);
$entityManager->flush();