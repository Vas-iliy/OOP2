<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/IGadget.php';

function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

function offCase (IGadget $product) {
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три пидораса', 1000, 500);
$notebook = new NotebookProduct('Del', 54000, 'AMD');

debug($book);


offCase($book);
offCase($notebook);

echo $book->getProduct();

