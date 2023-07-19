<?php

class Car
{
    public $brand;
    public $price;
    public function __construct($a, $b)
    {
        $this->brand = $a;
        $this->price = $b;
    }
    public function greeting()
    {
        echo 'hello there';
    }
}

class SecondCar extends Car
{
    public function second()
    {
        echo "this is second";
    }
}

$bmw = new Car('bmw', 49999);
$toyota = new SecondCar('toyota', 39999);
// echo $bmw->brand;
// echo "<br>";

// echo $bmw->price;

echo $toyota->greeting();
echo "<br>";
echo $toyota->price;
