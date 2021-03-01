<?php


class Farm
{
    private array $animals = [];
    private array $productsCounter = [];

    public function addAnimal(Animal &$animal):void
    {
        $this->animals[$animal->getRegId()] = $animal;
        $this->productsCounter[$animal->getProductName()] = null;
    }

    public function collectProducts():array 
    {
        foreach ($this->productsCounter as $product) {
            $product = 0;
        }
        foreach ($this->animals as $animal) {
            $this->productsCounter[$animal->getProductName()] += $animal->produceProduct();
        }
        return $this->productsCounter;
    }

    public function showHarvest():string 
    {
        $str = "Всего было собрано:\n";
        foreach ($this->productsCounter as $productName => $productCount) {
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
    public function getproductsCounter(): array
    {
        return $this->productsCounter;
    }

    /**
     * @param array $productsCounter
     */
    public function setproductsCounter(array $productsCounter): void
    {
        $this->productsCounter = $productsCounter;
    }
}