<?php

# For associative array we use array_replace function; 

$a = ["Vaibhav", "Vaishnawi", "Rohan", "Raj"];
$b = ["Piya","Anu","Shree" ];
$colors = ["Red", "Green", "Blue"];

$newArray = array_replace($a, $b, $colors);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

# For multidimensional array we use array_replace_recursive method;

$array1 = array("a"=>array("green", "pink") , "b" => array("black"));
$array2 = array("a"=>array("red", "maroon"), "b" => array("beige"));

$newarray = array_replace_recursive($array1, $array2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

?>