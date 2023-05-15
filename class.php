<?php

    // Задача 1.

    // имя класса
    class Student {
    // свойства класса
    ####################################################################################################################
        public $name;
        public $lastName;
        public $age;
        public $year;
    ####################################################################################################################
        // конструктор класса
        public function __construct($name, $lastName, $age, $year) {
            $this->name =$name;
            $this->lastName = $lastName;
            $this->age = $age;
            $this->year =$year;
        }
    ####################################################################################################################
        // методы сеттер и геттер
        public function setName($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
    ####################################################################################################################
        public function setLastName($lastName) {
            $this->lastName = $lastName;
        }
        public function getLastName() {
            return $this->lastName;
        }
    ####################################################################################################################
        public function setAge($age) {
            $this->age = $age;
        }
        public function getAge() {
            return $this->age;
        }
    ####################################################################################################################
        // метод геттер для получения всей информации
        public function getInfo() { // метод геттер для получения всей информации
            return "Name: $this->name \n" . "Lastname: $this->lastName \n" . "Age: $this->age \n" . "Year: $this->year \n";
        }
    }

    // создание нового объекта "Student"
    $student = new Student('Kane', 'Johnson', 17, 2);
    echo $student->getInfo();









    // Задача 2.

    Class Car {
        public $brand;

        public $model;

        public $colour;

        public $realiseYear;

    ####################################################################################################################
        // Конструктор класса
        public function __construct ($brand, $model, $colour, $realiseYear) {
            $this->brand = $brand;
            $this->model = $model;
            $this->colour =$colour;
            $this->realiseYear = $realiseYear;
        }

    ####################################################################################################################
        // Методы сеттер и геттер для $brand
        public function setBrand($brand) {
            $this->brand = $brand;
        }
        public function getBrand() {
            return $this->brand;
        }
    ####################################################################################################################
        // Методы сеттер и геттер для $model
        public function setModel($model) {
            $this->model = $model;
        }
        public function getModel() {
            return $this->model;
        }
    ####################################################################################################################
        // Методы сеттер и геттер для $colour
        public function setColour($colour) {
            $this->colour = $colour;
        }
        public function getColour() {
            return $this->colour;
        }
    ####################################################################################################################
        // Методы сеттер и гиттер для $realiseYear
        public function setRealiseYear($realiseYear) {
            $this->realiseYear = $realiseYear;
        }
        public function getRealiseYear() {
           return $this->realiseYear;
        }
    ####################################################################################################################
        // метод геттер для получения всей информации
        public function getCarInfo() {
            return "Brand: $this->brand \n" . "Model: $this->model \n" . "Colour: $this->colour \n" . "Realise year: $this->realiseYear \n";
        }

    }

    $car = new Car ('Opel', 'Insignia', 'Grey', '2014');









    // Задача 3.

    class Circle {
        public $radius;
        public $area;
    ####################################################################################################################
        public function __construct ($radius) {
            $this->radius = $radius;
        }
    ####################################################################################################################
        public function calculateArea() {
            return $this->area = ($this->radius * 2) * 3.14;
        }
    }

    $circle = new Circle(5);
    echo $circle->calculateArea();


    // Задача 4.

    class Human {
        public $name;
        public $age;
        public $gender;
    ####################################################################################################################
        public function __construct($name, $age, $gender) {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }
    ####################################################################################################################
        public function is_adult() {
            if ($this->age > 18) {
                return true;
            }
        }
    }

    $person = new Human('Alex', 20, 'male');

    echo $person->is_adult();




