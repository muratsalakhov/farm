<?php

require_once "Animal.php";

class Cow extends Animal
{
    function __construct()
    {
        $this->regId = uniqid();
        $this->product = new Product("молоко",0,"л");
    }

    public function produceProduct(): int
    {
        $this->product->setProductCount(rand(8, 12));
        return $this->product->getProductCount();
    }
}