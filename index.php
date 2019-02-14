<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/doctrine.php';

$entityManager = getEntityManager();


/** @var \SON\Entity\ProductRepository $productRepository */
/** @var \SON\Entity\PriceRepository $priceRepository */
$productRepository = $entityManager->getRepository(\SON\Entity\Product::class);
$priceRepository = $entityManager->getRepository(\SON\Entity\Price::class);
$productRepository->find(1);

$arr = [
    "Colchão de Solteiro Castor Sleep Espuma D33 0,88",
    "Colchão de Solteiro Castor Sleep Espuma D33 0,78",
    "Colchão de Casal Castor Sleep Espuma D33 1,28",
    "Mesa Plástica Quadrada Firenze Dolfin Branca",
    "Tanquinho - Lavadora de Roupas Colormaq 2,7 Kg  New Pioneer 110v - Branco",
    "Suporte Brasforma de parede para Micro-ondas e forno elétrico SBR3.8 - Branco",
    "Aspirador de Pó e Água Lavor Compact Preto e Laranja-110V",
    "Suporte Tv Lcd Led Plasma e Televisão 4k 10 a 85 pol SBRU758 2PTS Brasforma com Nível",
    "Batedeira Mondial Prática B-05 3 Velocidades 1 Tigela 3,6 Litros-Branco - 110V",
    "Bandeja Para Sofá Flexível Em MDF Com Porta Copos - Tabaco",
    "Cortador de Cabelo Mondial CR-02 Hair Stylo 4 Alturas-110V",
    "Umidificador de Ar Mondial Comfort Air 2,2 litros com Desligamento Automático-110V",
    "Espremedor de Frutas Mondial E-01 Turbo Citrus-110V",
    "Espremedor de Frutas Pro Mondial E-10 250W de Potência Em Inox - Bivolt",
    "Ferro a Vapor Mondial Ceramic Express F-40 Com Sistema Alto Impactante-110V",
    "Ferro Black&Decker VFA-1110 à Seco Automático-110V",
    "Liquidificador Mondial L-31 Vitamaxis 500W 3 velocidades com filtro - 110 V",
    "Liquidificador Mondial NL-26 Power 350W de Potência 2 Velocidades-110V",
    "Liquidificador Mondial L-55 Premium 500w de Potência Jarra San Cristal Com 5 Velocidades e 2 Copos-110V",
    "Liquidificador Mondial L-66 Em Inox Com 10 Velocidades e Filtro-110V",
    "Grill e Sanduicheira Mondial S-11 Inox - 110V",
    "Panela Elétrica De Arroz Mondial PE-05 Bianca Rice 4 Xícaras Branco - 110V",
    "Panela de Pressão Elétrica Mondial PE-26 3 Litros Com Timer-110V",
    "Grill Mondial G-09 Super Grill Premium-110V",
    "Grill Mondial Premium Cook G-03 Redondo-110V",
    "Secador de Cabelos Mondial SC-10 Max Travel-Bivolt",
    "Secador de Cabelos Mondial SC-13 Power Shine Black Íon - 110V",
    "Colchão de Casal Castor Sleep Espuma D33 1,38",
    "Travesseiro Altenburg Soft 50X70",
    "Travesseiro Altenburg Liberty 50X70",
    "Poltrona do Papai Reclinável American Comfort Halley - Preto",
    "Poltrona do Papai Reclinável American Comfort Halley - Bege",
    "Forno Elétrico Layr Flexy 46L Revestimento Easy Clean-110V",
    "Purificador-Bebedouro de Mesa Newmaq Refrigerado por Compressor-110V",
    "Aquecedor de Ar Mondial-110V",
    "Sofá Bom Pastor Punto 3 e 2 lugares em Corino Café",
    "Sofá Bom Pastor Punto 3 e 2 lugares em Corino Preto",
    "Painel Home RV Chicago Com 4 Prateleiras - Nocce Fosco",
    "Tanquinho-Lavadora de Roupas Colormaq 2,7Kg  New Pioneer Preto -110V",
    "Cama Infantil Carro Gelius Rally Vermelha",
    "Cama Infantil Carro Gelius Rally Azul",
    "Chapinha-Prancha Alisadora Mondial Tourmaline Íon Plus P-11 - Bivolt",
    "Cabeceira Solteiro Gelius Podium 0,90 Branco e Lilás ou Rosa",
    "Rack RV Vintage para TV de Até 42 Polegadas Ouro Laminado",
    "Painel Home RV Vintage Para TV de Até 42 Polegadas Prata Laminado",
    "Cristaleiras Vintage RV Ametista Laminado",
    "Aparador Vintage RV Pérola Laminado",
    "Tanquinho-Lavadora de Roupas Colormaq LCM 13-13 Kg com 5 Programas de Lavagem-110V",
    "Freezer Esmaltec Horizontal 230 Litros com 1 Porta-110V",
    "Freezer Esmaltec Horizontal 439 Litros com 2 Portas-110V",
    "Panela de Pressão Elétrica Mondial PE-09 4 Litros Com Timer Digital-110V",
    "Geladeira-Refrigerador Esmaltec RCD34 276 Litros Duplex Cycle Defrost-110V",
    "Geladeira-Refrigerador Esmaltec RCD38 306 Litros Duplex Cycle Defrost-110V",
    "Cama de Solteiro Bom Pastor Colorado Com Baú Branco e Preto",
    "Cama de Solteiro Bom Pastor Colorado Com Baú Branco e Rosa",
    "Cama Juvenil Gelius Casinha Pink",
    "Cama Juvenil Gelius Casinha Branca",
    "Fogão Atlas 4 Bocas Mônaco Acendimento Automático Branco",
    "Fogão Atlas 4 Bocas Fastcook com Top Control e Queimadores Família-Branco",
    "Fogão 5 Bocas Atlas FastCook Com Acendimento Automático-Branco",
    "Cooktop à Gàs 4 Bocas Atlas Agile Com Mega Chama",
    "Cooktop à Gàs 5 Bocas Atlas Agile Com Mega Chama",
    "Rack RV Caribean para TV de Até 42 Polegadas Nocce Fosco",
    "Painel Home RV Los Angeles Com Aparador Nocce Fosco",
    "Bebedouro de Mesa Refrigerado por Compressor Newup Evidence-110V",
    "Micro-ondas Panasonic 21 Litros Dia-a-Dia com Desodorizador e Receitas Pré-programadas-110V",
    "Forno de Micro-ondas Panasonic NN-ST65HWRUN com Receitas Pré-Programadas - 32L",
    "Fogão 5 Bocas Esmaltec Topazio Com Acendimento Automático e Timer-Branco",
    "Mesa de Passar com armário RV Havaí Branco",
    "Cama de Casal Bom Pastor Jade 100% MDF Álamo e Branco",
    "Cama de Casal Bom Pastor Sentra 100% MDF Branco",
    "Balcão RV Multiuso Toronto Branco",
    "Poltrona do Papai Reclinável Matrix Azera Em Tecido Suede Marrom",
    "Poltrona do Papai Reclinável Matrix Azera Em Tecido Suede Cinza",
    "Sofá Cama-Bicama Matrix HebeCom 2 Lugares Em Tecido Suede Caqui",
    "Sofá Cama-Bicama Matrix HebeCom 2 Lugares Em Tecido Suede Marrom",
    "Mesa Lateral Vintage Patrimar Intense Vermelho",
    "Mesa Lateral Vintage Patrimar Intense Amarelo",
    "Mesa de Centro Vintage Patrimar Intense Amarelo",
    "Mini Cômoda-Bombe Patrimar Premier Com 2 Gavetas Vermelho",
    "Mini Cômoda-Bombe Patrimar Premier Com 2 Gavetas Amarelo",
    "Ventilador Mondial V-45 Com 6 Pás e 3 Velocidades 40cm Branco - 110V",
    "Ventilador de Coluna Mondial NV-06 Com 3 Velocidades Regulável Classic 40cm Branco-110V",
    "Ventilador Mondial V-37 Black Classic 6 Pás e 3 Velocidades 30cm Preto-110V",
    "Ventilador Mondial VT-31 Turbo Silêncio 3 Velocidades 30cm Preto-110V",
    "Ventilador Mondial VT-41 Turbo Silêncio 3 Velocidades 40cm Preto-110V",
    "Ventilador Mondial VT-51 Turbo Silêncio 3 Velocidades 50cm Preto-110V",
    "Ventilador de Parede Mondial VP-PRO-55 Com 5 Pás e 3 Velocidades 50cm Preto-Bivolt",
    "Ventilador de Coluna Mondial VC-PRO-55  3 Velocidades 50cm Preto-Bivolt",
    "Rádio Portátil Motobrás 7 Faixas AM-FM-OC TV Com Suporte Para Pilhas",
    "Telefone Com Fio Elgin TCF-2000 Com Chave de bloqueio-Preto",
    "Telefone Com Fio Elgin TCF-3000 Com Viva-voz e Identificador de Chamadas",
    "Sofá Rondomóveis Malta com 3 lugares Revestido em Corino Super Charme-Café",
    "Sofá Rondomóveis Malta com 2 lugares Revestido em Corino Super Charme-Café",
    "Kit de Cozinha em Aço Colormaq Com 5 Portas e 4 Gavetas Branco",
    "Kit de Cozinha em Aço Colormaq Com 5 Portas e 4 Gavetas Branco e Preto",
    "Armário-Sapateira Multiuso RV Móveis México - Noce Fosco",
    "Armário-Sapateira Multiuso RV Móveis Paris Noce Fosco",
    "Cristaleiras Vintage RV New York Com 2 Portas Noce Fosco",
    "Cama Box Casal Conjugado Umaflex Top 1,38"
];


/* Create Products
foreach ($arr as &$value) {
    $product = new \SON\Entity\Product();
    $product->setName($value);

    $i = 1;
    $x = rand(1, 5);
    while ($i <= $x) {
        $price = new \SON\Entity\Price();
        $price->setList((rand(100, 500) / 10));
        $product->addPrice($price);

        $y = 1;
        $z = rand(1, 3);
        while ($y <= $z) {
            $stock = new \SON\Entity\Stock();
            $stock->setWarehouseId($y);
            $stock->setQuantity(rand(1, 200));
            $product->addStock($stock);
            $y++;
        }
        $i++;
    }

    $entityManager->persist($product);
    $entityManager->flush();
}
 */


$qb = $entityManager->createQueryBuilder();
$query = $qb->select('p', 'pr', 'sc')
    ->from(\SON\Entity\Product::class, 'p')
    ->leftJoin('p.prices', 'pr')
    ->leftJoin('p.stocks', 'sc')
    ->setMaxResults(10)
    ->setFirstResult(0);

$paginator = new \Doctrine\ORM\Tools\Pagination\Paginator($query, $fetchJoinCollection = true);


$results = $paginator->getQuery()->getArrayResult();

echo count($results);
//dump($results);
