<?php

/*

1. Purpose:
array_column is used to extract values from a specific column in a multidimensional array. In this case, it extracts the "id" values.

2. Syntax:
array_column($array, "column_name")
$array is the input multidimensional array.
"column_name" is the key whose values you want to extract.

3. How It Works:
The function looks at each sub-array within $array.
It finds the value associated with the "id" key in each sub-array.
It collects these values into a new array.

4. Output:
The new array ($newArr) contains only the "id" values.
The program then prints this array using print_r().

*/


$array = array(
    array(
        "id" => "2201",
        "first_name" => "anil",
        "last_name" => "kapoor",
    ),
    array(
        "id" => "2671",
        "first_name" => "salman",
        "last_name" => "khan",
    ),
    array(
        "id" => "3021",
        "first_name" => "imran",
        "last_name" => "hashmi",
    ),

);

// $newArr = array_column($array,"id"); #for make index array;
$newArr = array_column($array, "id", "first_name"); #for make associative array 1st parameter key & 2nd parameter value;

echo "<pre>";
print_r($newArr);
echo "</pre>";

echo "<br>";



// Array Chunk 

$cars = ["BMW", "AUDI", "LAMBO", "FERRARI", "THAR"];

$newArr2 = array_chunk($cars, 3); # to make pairs and return a multidimensional array;

echo "<pre>";
print_r($newArr2);
echo "</pre>";
echo "<br>";

$age = [

    "Mohan" => 10,
    "Sohan" => 13,
    "Rohan" => 19,
    "Raaja" => 18,

];


$newArr3 = array_chunk($age, 3, true); # to make pairs and return a multidimensional array;

echo "<pre>";
print_r($newArr3);
echo "</pre>";
