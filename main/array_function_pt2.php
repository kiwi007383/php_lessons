<?php
$arr = ["apple","banana","orange"];

// // add back
// array_push($arr,"coconut"); 

// echo "<pre>";
// var_dump($arr);
// echo "<br>";

// // add front 

// array_unshift($arr,"mango"); 

// echo "<pre>";
// var_dump($arr);
// echo "<br>";

// //remove back

// array_pop($arr); 

// echo "<pre>";
// var_dump($arr);
// echo "<br>";

// //remove front

// array_shift($arr); 
// array_shift($arr);  

// echo "<pre>";
// var_dump($arr);
// echo "<br>";

 $num = [1,2,3,4,5,6];

 shuffle($num);

 echo "<pre>";
 var_dump($num);

//  rsort($num); // reverse
// //  sort($num); // ascending

// //  for($i=0; $i < count($num); $i++){
// //     echo $num[$i];
// //  };
//  echo "<br>";

//  foreach($num as $items){
//     echo $items;
//     echo "<br>";
//  };
//   echo "<br>";


 $personOne = [
    "name" => "calvin",
    "address" => "yangon",
    "job" => "developer"
 ];
 
//  asort($personOne); // sort value ascending

 ksort($personOne); // sort key ascending

 foreach($personOne as $person){
    echo $person;
    echo "<br>";
 };