<?php

// define(name,value,case-insensitive);
$arr = ['a','b','c'];
define("greeting", $arr, false);


function sayHello(){
    echo greeting['0'];
};

sayHello();

?>