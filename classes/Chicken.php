<?php


class Chicken extends Animal
{
    function produceProduct(): int {
        $this->setProductCount(rand(0, 1));
        return $this->productCount;
    }
}