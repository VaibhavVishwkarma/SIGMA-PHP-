<?php

$array = ["a", "b", "c", "d", "e"];

// $newArr = array_fill("index", "number", "values");
$newArr = array_fill(1, 2, "Vaibhav");



echo "<pre>";
print_r($newArr);
echo "</pre>";

$array = ["a", "b", "c", "d", "e"];

// $newArr = array_fill("index", "number", "values");
$newArr = array_fill_keys($array, "Vaishnawi");



echo "<pre>";
print_r($newArr);
echo "</pre>";
