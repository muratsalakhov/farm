<?php


class Farm
{
    private array $animals = []; // животные
    private array $productsCounter = []; // производимые продукты

    // добавление нового животного
    public function addAnimal($newAnimal):void
    {
        $newAnimal->setRegId(uniqid());
        if (array_key_exists($newAnimal->getRegId(), $this->animals)) {
            do {
                $newAnimal->setRegId(uniqid());
            } while (array_key_exists($newAnimal->getRegId(), $this->animals));
            $this->animals[$newAnimal->getRegId()] = $newAnimal;
        } else {
            $this->animals[$newAnimal->getRegId()] = $newAnimal;
        }
        if (!array_key_exists($newAnimal->getProductName(), $this->productsCounter)) {
            $this->productsCounter[$newAnimal->getProductName()] = new Product($newAnimal->getProductName(), 0, $newAnimal->getProductUnit());
        }
    }

    // сбор продуктов у всех зарегестрированных животных
    public function collectProducts():array 
    {
        foreach ($this->productsCounter as $product) {
            $product->setProductCount(0);
        }
        foreach ($this->animals as $animal) {
            $this->productsCounter[$animal->getProductName()]->addProductCount($animal->produceProduct());
        }
        return $this->productsCounter;
    }

    // выводим результат сбора урожая
    public function showHarvest():string 
    {
        $str = "Всего было собрано:\n";
        foreach ($this->productsCounter as $product) {
            $str = $str . $product->getProductName() . ": " . $product->getProductCount() . " " . $product->getProductUnit() .".\n";
        }
        echo $str;
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
     * @return array
     */
    public function getProductsCounter(): array
    {
        return $this->productsCounter;
    }
}