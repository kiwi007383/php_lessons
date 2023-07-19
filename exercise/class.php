<?php

class Dog
{
    public $name;
    public $color;

    public function setDogName($name)
    {
        $this->name = $name;
        echo $this->name;
    }
    public function setDogColor($color)
    {
        $this->color = $color;
        echo $this->color;
    }
}

$dog = new Dog();
$dog->setDogName('ang net');
$dog->setDogColor('black');

echo "<br>";

class User
{
    public $userName;
    public $userId;

    public function register($a = 'default')
    {
        $this->userName = $a;
        return $this->userName;
    }
}

$calvin = new User();

$firstUser = $calvin->register('calvin');
echo $firstUser;
