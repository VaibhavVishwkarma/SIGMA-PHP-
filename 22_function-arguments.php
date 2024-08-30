<?php

// Call by value
// This function does not alter the original variable
// function argument($value) {
//     $value = "Vaibhav";
//     echo $value . "<br>";
// }

// $str = "Harshit";
// argument($str);
// echo $str;

// Call by reference
// This function alters the original variable
// function argument(&$value) {
//     $value = "Vaibhav";
//     echo $value . "<br>";
// }

// $str = "Harshit";
// argument($str);
// echo $str;

// Function that modifies the number passed by value (does not change the original variable)
function first($number) {
    $number += 5;
}

// Function that modifies the number passed by reference (changes the original variable)
function second(&$number) {
    $number += 5;
}

// Example using call-by-value
$num = 10;
first($num); // Calls 'first' function which does not affect $num
echo "Original value after call by value: $num <br>";

// Example using call-by-reference
$num = 10;
second($num); // Calls 'second' function which modifies $num
echo "Original value after call by reference: $num <br>";

