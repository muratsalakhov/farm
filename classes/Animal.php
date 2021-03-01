<?php


class Animal
{
    protected string $regId;
    protected Product $product;

    function __construct()
    {
        $this->regId = uniqid();
    }

    public function produceProduct(): int
    {
        return $this->productCount->getgetProductCount();
    }

    public function getProductName(): string
    {
        return $this->product->getProductName();
    }

    public function getProductUnit(): string
    {
        return $this->product->getProductUnit();
    }

    public function getProductCount(): string
    {
        return $this->product->getProductCount();
    }

    /**
     * @return string
     */
    public function getRegId(): string
    {
        return $this->regId;
    }

    /**
     * @param string $regId
     */
    public function setRegId(string $regId): void
    {
        $this->regId = $regId;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }
}