<?php

namespace Farm;

class Chicken extends Animal
{
    function __construct()
    {
        $this->product = new Product("яйца",0,"шт");
    }

    // производим случайное количество продукта
    public function produceProduct(): int
    {
        $this->product->setProductCount(rand(0, 1));
        return $this->product->getProductCount();
    }
}