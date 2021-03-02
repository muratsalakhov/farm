<?php

namespace Farm;

class Cow extends Animal
{
    function __construct()
    {
        $this->product = new Product("молоко",0,"л");
    }

    // производим случайное количество продукта
    public function produceProduct(): int
    {
        $this->product->setProductCount(rand(8, 12));
        return $this->product->getProductCount();
    }
}