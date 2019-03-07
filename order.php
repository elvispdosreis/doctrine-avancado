<?php

require_once __DIR__ . '/vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

require_once __DIR__ . '/src/doctrine.php';

$entityManager = getEntityManager();

$order = $entityManager->getRepository(\SON\Entity\Order::class)->find(1);
$invoice = new \SON\Entity\Invoice();
$invoice->setNumber(2);
$order->setInvoice($invoice);
$entityManager->flush();