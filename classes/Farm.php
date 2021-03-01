<?php


class Farm
{
    private array $animals = [];
    private array $productsCount = [];

    public function addAnimal(Animal &$animal):void
    {
        $this->animals[$animal->getRegId()] = $animal;
        $this->productsCount[$animal->getProductName()] = null;
    }

    public function collectProducts():array {
        foreach ($this->productsCount as $product) {
            $product = 0;
        }
        foreach ($this->animals as $animal) {
            $this->productsCount[$animal->getProductName()] += $animal->produceProduct();
        }
        return $this->productsCount;
    }

    public function showHarvest():string {
        $str = "Всего было собрано:\n";
        foreach ($this->productsCount as $productName => $productCount) {
            $str = $str . $productName . " " . $productCount . "\n";
        }
        return $str;
    }

    /**
     * @return array
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }

    /**
     * @param array $animals
     */
    public function setAnimals(array $animals): void
    {
        $this->animals = $animals;
    }

    /**
     * @return array
     */
    public function getProductsCount(): array
    {
        return $this->productsCount;
    }

    /**
     * @param array $productsCount
     */
    public function setProductsCount(array $productsCount): void
    {
        $this->productsCount = $productsCount;
    }
}