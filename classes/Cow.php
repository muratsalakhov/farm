<?php


class Cow extends Animal
{
    protected string $productName = "молоко";

    function produceProduct():int {
        $this->setProductCount(rand(8, 12));
        return $this->productCount;
    }
}