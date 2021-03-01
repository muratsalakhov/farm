<?php


class Chicken extends Animal
{
    protected string $productName = "яйца";

    function produceProduct(): int {
        $this->setProductCount(rand(0, 1));
        return $this->productCount;
    }
}