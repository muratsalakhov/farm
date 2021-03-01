<?php


class Cow extends Animal
{
    function produceProduct():int {
        $this->setProductCount(rand(8, 12));
        return $this->productCount;
    }
}