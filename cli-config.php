<?php

require_once __DIR__ . '/src/doctrine.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$entityManager = getEntityManager();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);