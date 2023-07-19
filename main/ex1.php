<?php 
   

    $num1 = 10;
    $num2 = 10;
    echo $num1 + $num2;

    $array = ['one', 'two', 'three'];

    echo "<pre>";
    var_dump($array);

    $assoArray = [
        'name' => 'mgmg',
        'role' => 'developer'
    ];

    echo $assoArray['name'];
    echo $array[0];

    $fruits = 'orange';

    // if($fruits == 'apple'){
    //     echo "this is apple";
    // }else{
    //     echo "this is other fruit";
    // };

    $result = $fruits == 'apple' ? "this is mango" : "this is other fruits";
    echo $result;

    // condition

    $name = 'kiki';
    if($name == 'calvin'){
        echo "<br>You r right";
    }elseif($name == 'kiki'){
        echo "kiki here!";
    }else{
        echo "nothing here";
    }

    echo "<br>the end";

    $car = ['toyota', 'ford','crown'];

   for($i = 0 ; $i < count($car);$i++){
    echo $car[$i]."<br>";
   }

   foreach($car as $item){
    echo $item;
   }

   $num = 1;
   while($num <= 10){
     echo $num;
    $num++; 
   }

   $num3 = 1;
   do{
    echo $num3."<br>";
    $num3++; 
   }while($num3 <= 20);

   function outputMessage($x = 'empty'){
    echo $x;
   };

   outputMessage("this is output message function!");
?>
