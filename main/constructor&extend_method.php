<?php

class Animals
{
    public $name;
    public $color;

    public function __construct($animalName = 'default', $animalColor = 'default')
    {
        $this->name = $animalName;
        $this->color = $animalColor;
    }
    public function sleeping()
    {
        echo "good night";
    }
}

//extends

class Dog extends Animals
{
    public function greeting()
    {
        echo "hello, dog!";
    }
}

$animals = new Animals('bull', 'blue');

echo $animals->name;
echo "<br>";

$dog = new Dog('aung net', 'black');

$dog->sleeping();
echo "<br>";

echo $dog->name;
