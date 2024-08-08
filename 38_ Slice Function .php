<?php

// Index array example;

$colors = ["Red", "Green", "Blue", "Yellow", "Brown"];

$newArray = array_slice($colors,1,3, true); #for actual index know use true value in third parameter by default it is false

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

// Associative array example;


$colors = [ 'a' => "Red", 'b' => "Green", '49' => "Blue", 'd' => "Yellow", 'e' => "Brown"];

$newArray = array_slice($colors,1,3, true);


echo "<pre>";
print_r($newArray);
echo "</pre>";


?>