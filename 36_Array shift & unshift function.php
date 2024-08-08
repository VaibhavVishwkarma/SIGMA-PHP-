<?php

$a = ["Grapes", "Bike", "Car", "Bus"];
$b = ["Grapes", "Bike", "Car", "Bus"];

array_shift($a); // remove the first element [0] of the array;

array_unshift($b,"Papaya"); // add new element from index [0] of the array;

echo "<pre>";
print_r($a);
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r($b);
echo "</pre>";

?>