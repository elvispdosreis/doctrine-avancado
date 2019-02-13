<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/doctrine.php';

$entityManager = getEntityManager();


/** @var \SON\Repository\ProductRepository $productRepository */
/** @var \SON\Repository\PriceRepository $priceRepository */
$productRepository = $entityManager->getRepository(\SON\Entity\Product::class);
$priceRepository = $entityManager->getRepository(\SON\Entity\Price::class);

for ($i = 1; $i <= 10; $i++) {
    $product = new \SON\Entity\Product();
    $product->setId($i)
        ->setName("Produto {$i}");

    $price = new \SON\Entity\Price();
    $price->setList((rand(100, 500) / 10));

    $product->addPrice($price);

    $productRepository->save($product);

    for ($i = 1; $i <= 10; $i++) {
        $price = new \SON\Entity\Price();
        $product->setId($i)
            ->setName("Produto {$i}");
        $productRepository->save($product);
    }

};

/*
$qb = $entityManager->createQueryBuilder();
$results = $qb->select('p')
    ->from(\SON\Entity\Post::class, 'p')
    ->leftJoin('p.categories', 'pc')
    ->leftJoin('pc.category', 'c')
    ->andWhere("p.id LIKE :id")
    ->orWhere('c.id LIKE :category')
    ->setParameter('id', '%1')
    ->setParameter('category', '%1')
    ->getQuery()
    //->getArrayResult();
    ->getResult();
dump($results);
*/