<?php

class Car
{
    //properties
    private $name;
    public $price;

    //methods
    public function setName($name = 'this is setName default')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCarName($userName = "default") // type function
    {
        $this->name = $userName;
        return $this->name;
    }

    public function getCarPrice($userPrice = 0) // void function
    {
        $this->price = $userPrice;
        echo $this->price;
    }
}

// $result = new Car(); // object create;  

// $carName = $result->getCarName(); // type function
// echo $carName;
// echo "<br>";

// $result->getCarPrice(); // void function

// echo $result->name;

$result->setName();

$name = $result->getName();
echo $name;
