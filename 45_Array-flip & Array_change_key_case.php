<?php

$a = [
    "Joe"=> "10",
    "Peter"=> "20",
    "Martin"=> "30",
];

$newArr1 = array_flip($a); # to swap the keys and value means => key = value, value = key;

echo "<pre>";
print_r($newArr1);
echo "</pre>";
echo "<br>";

$b = [
    "Joe"=> "10",
    "Peter"=> "20",
    "Martin"=> "30",
];

$newArr2 = array_change_key_case($b, CASE_UPPER); # to chenge character uppercase and lowercase by default value is lowercase;
echo "<pre>";
print_r($newArr2);
echo "</pre>";