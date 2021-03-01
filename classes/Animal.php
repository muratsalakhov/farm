<?php

class Animal {
    protected int $regId;
    protected int $productCount;

    function __construct() {
        $this->regId = rand(1000,9999);
        $this->productCount = 0;
    }

    function produceProduct(): int
    {
        return $this->productCount;
    }

    /**
     * @return mixed
     */
    public function getRegId(): int
    {
        return $this->regId;
    }

    /**
     * @param mixed $regId
     */
    public function setRegId(int $regId)
    {
        $this->regId = $regId;
    }

    /**
     * @return mixed
     */
    public function getProductCount(): int
    {
        return $this->productCount;
    }

    /**
     * @param mixed $productCount
     */
    public function setProductCount(int $productCount)
    {
        $this->productCount = $productCount;
    }
}