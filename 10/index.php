<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';
require_once 'classes/I3D.php';

function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

$book = new BookProduct('Три пидораса', 1000, 500);

debug($book);

echo $book->getProduct();

$book->addProduct('kjkjhk', 'f');
$book->test();
