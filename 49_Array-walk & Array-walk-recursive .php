<?php

//It dosen't return the value while map function return

$a = [
    "Bill"=> "10",
    "Peter"=> "20",
    "Martin"=> "30",
];

$newArr = array_walk($a, "myFunction", "is a key of"); # for index and associative array only;

function myFunction($value, $key, $param)
{
    echo "$key $param $value <br>";
}

echo "<br>";

$b = ["a"=> "Rajat", "b" => "Mohit"];

$c = [
    $b,
    "Bill"=> "10",
    "Peter"=> "20",
    "Martin"=> "30",
];

$newArr = array_walk_recursive($c, "myFunction2", "is a key of");

function myFunction2($value, $key, $param)
{
    echo "$key $param $value <br>";
}