<?php


class Chicken extends Animal
{
    function produceProduct() {
        $this->setProductCount(rand(0, 1));
        return $this->product_count;
    }
}