<?php

class Animal {
    private $reg_id;
    private $product_count;

    function __construct() {
        $this->reg_id = rand(1000,9999);
        $this->product_count = 0;
    }

    function produceProduct() {
        return $this->product_count;
    }

    /**
     * @return mixed
     */
    public function getRegId()
    {
        return $this->reg_id;
    }

    /**
     * @param mixed $reg_id
     */
    public function setRegId($reg_id)
    {
        $this->reg_id = $reg_id;
    }

    /**
     * @return mixed
     */
    public function getProductCount()
    {
        return $this->product_count;
    }

    /**
     * @param mixed $product_count
     */
    public function setProductCount($product_count)
    {
        $this->product_count = $product_count;
    }
}