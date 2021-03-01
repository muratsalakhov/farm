<?php


class Cow extends Animal
{
    function produceProduct() {
        $this->setProductCount(rand(8, 12));
        return $this->product_count;
    }
}