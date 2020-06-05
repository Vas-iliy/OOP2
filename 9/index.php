<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

$book = new NotebookProduct('Del', 2000, 'Intel');

$notebook = new BookProduct('Три пидораса', 1000, 500);

debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();