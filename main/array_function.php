<!-- array built-in function -->
<?php

$arr = ["apple","banana","coconut","mango"];

echo count($arr);
echo "<br>";

//start
echo current($arr);
echo "<br>";

echo end($arr); //end
echo "<br>";

echo $arr[array_rand($arr)];
echo "<br>";

$number = range(0,30);

echo in_array("banana",$arr) ? "true" : "false";
echo "<br>";

$person = [
    "name" => "calvin",
    "age" => 18,
    "job" => "developer"
];

echo array_key_exists("age",$person) ? "true" : "false";
echo "<pre>";
 
var_dump(array_keys($person));
var_dump(array_values($person));
echo "<br>";

$car = ["ford","marcedes","toyota","crown"];

echo "<pre>";
var_dump(implode(" ",$car)); // array to string

$car_st = "ford";
var_dump(explode(" ",$car_st)); // string to array

