<h1>
    <i>This is testing h1 tag.</i>
</h1>


<?php

$name = "calvin klein";

echo strlen($name);
echo str_word_count($name);
echo "<br>";

echo substr($name,0,6); // substring

echo "<pre>";
var_dump(str_split($name,5));
echo "<br>";

echo "<pre>";
var_dump(explode("c",$name,3));

echo "<br>";
echo strtoupper($name);
echo "<br>";

echo ucwords($name);
echo "<br>";

echo str_replace("calvin","kalvin",$name);  
echo "<br>";


$test = "<h1>
    <i>This is testing h1 tag.</i>
</h1>";

echo strip_tags($test);


?>
