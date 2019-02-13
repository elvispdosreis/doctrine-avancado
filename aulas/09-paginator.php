<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 13/02/2019
 * Time: 16:23
 */


require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/doctrine.php';

$entityManager = getEntityManager();

$post1 = new \SON\Entity\Post();
$post1->setTitle('titulo 1')
    ->setContent('content 1');
