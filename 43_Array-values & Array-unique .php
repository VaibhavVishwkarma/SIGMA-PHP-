<?php



$colors = ["a" => "red", "b" => "green", "c" => "red", "d" => "yellow"];

// $newArr = array_values($colors); to get all the values from this associative array and make new index array;
$newArr = array_unique($colors); // remove duplicate value and give unique values only as a new array;

echo "<pre>";
print_r($newArr);
echo "</pre>";
