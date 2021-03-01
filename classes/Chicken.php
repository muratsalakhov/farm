<?php


class Chicken extends Animal
{
    function __construct()
    {
        $this->product = new Product("яйца",0,"шт");
    }

    public function produceProduct(): int
    {
        $this->product->setProductCount(rand(0, 1));
        return $this->product->getProductCount();
    }
}