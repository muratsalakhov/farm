# ООП Ферма

## 1. Абстрактный класс Animal
### 1.1 Поля класса Animal
* regId - тип string - идентификационный номер животного
* product - тип Product - производимый продукт 
### 1.2 Методы класса Animal
* Абстрактные __constructor() и produceProduct()
* getProductName(), getProductCount(), getProductUnit() - доступ к содержимому поля product
* getters и setters
## 2. Классы Сow и Chicken
Дочерние классы Animal
### 2.1 Методы классов Cow и Chicken
* __constructor() - присваивает полю product новый экземпляр Product
* produceProduct() - определяет и возвращает количество произведенного продукта
## 3. Класс Product
Класс производимого продукта
### 3.1 Поля класса Product
* productName - наименование продукта
* productCount - количество продукта
* productUnit - единица измерения продукта
### 3.2 Методы класса Product
* __constructor() - инициализирует объект класса
* addProductCount($count) - прибавляет к полю productCount значение $count 
* getters и setters
## 4. Класс Farm
### 4.1 Поля класса Farm
* animals - тип array - список зарегестрированных животных. Ключ - уникальный номер животного, содержимое - экземпляр класса животного.
* productsCounter - тип array - список продуктов, собранных на ферме. Ключ - название продукта, содержимое - экземпляр класса продукта.
### 4.2 Методы класса Farm
* addAnimal($newAnimal) - присваивает новому животному уникальный идентификатор в рамках в фермы, записывает в массив animals новое животное.
* collectProducts() - собирает у всех животных на ферме продукт и результат записывает в productsCounter
* showHarvest() - выводит информацию о собранных продуктах
* getAnimals(), getProductsCounter() - возвращают значения полей
## 5. Скрипт main.php
Выполняет последовательность действий:
1. Создание фермы | $farm = new Farm()
2. Заполнение фермы животными | $farm->addAnimal( $animal)
3. Сбор продуктов | $farm->collectProducts()
4. Вывод результатов сбора | $farm->showHarvest()