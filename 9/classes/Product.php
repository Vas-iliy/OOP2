<?php

class Product
{
    private $name;
    protected $price;

    private $discount = 0;

   /* public $public = 'PUBLIC';
    protected $protected = 'PROTECTED';
    private $private = 'PRIVATE';*/

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct ()
    {
        $out = "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена: {$this->getPrice()}<br>";

        return $out;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price - ($this->discount/100*$this->price);
    }


    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }
}