<?php

// Function that returns a formatted string
function square($n, $m) {
    return "$n = $m";
}

$a = [1, 2, 3, 4, 5];
$b = ["lemon", "apple", "banana", "guava", "orange"];

// Apply 'square' function to arrays $a and $b
$newArr = array_map("square", $a, $b);

echo "<pre>";
print_r($newArr); // Output formatted pairs
echo "</pre>";
echo "<br>";

// Function that converts a string to uppercase
function assocArr($n) {
    return strtoupper($n);
}

$d = ["one" => "lemon", "two" => "apple", "three" => "banana", "four" => "guava", "five" => "orange"];

// Apply 'assocArr' function to associative array $d
$newArr = array_map("assocArr", $d);

echo "<pre>";
print_r($newArr); // Output uppercase values
echo "</pre>";

