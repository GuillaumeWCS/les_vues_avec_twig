<?php

require_once '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);

$products = ['pommes', 'tomates', 'poires', 'oranges', 'noisettes'];

echo $twig->render('index.html.twig', ['products_list' => $products]);

var_dump($products);
