<?php

class Product
{
    private string $productName;
    private int $productCount;
    private string $productUnit;

    function __construct(string $productName, int $productCount, $productUnit)
    {
        $this->productName = $productName;
        $this->productCount = $productCount;
        $this->productUnit = $productUnit;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return int
     */
    public function getProductCount(): int
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     */
    public function setProductCount(int $productCount): void
    {
        $this->productCount = $productCount;
    }

    /**
     * @return string
     */
    public function getProductUnit(): string
    {
        return $this->productUnit;
    }

    /**
     * @param string $productUnit
     */
    public function setProductUnit(string $productUnit): void
    {
        $this->productUnit = $productUnit;
    }


}