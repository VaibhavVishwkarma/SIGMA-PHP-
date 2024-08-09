<?php

$a = ["red", "green", "blue", "pink"];

$newArr = array_rand($a, 2); # to get random value from the array;

echo "<pre>";
print_r($newArr);
echo "</pre>";
echo "<br>";

echo "Random value change <br>";
foreach ($newArr as $key) 
{
    echo $a[$key] . "<br>";
}


$b = ["red", "green", "blue", "pink"];

shuffle($b); # to change position of array like we shuffle the cards;

echo "<br>";
echo "Shuffling of the array . <br>";
echo "<pre>";
print_r($b);
echo "</pre>";

