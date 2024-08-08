<?php

$a1 = [ "a" => "Sanjay", "b" => "Aman","c" => "Mohan"];
$a2 = ["f" => "Sanjay", "c" => "Mohan"];
// $a3 = ["a" => "Mohan", "b" => "Sanjay", "c" => "Kaalu"];

// $newArray = array_intersect($a1, $a2);    # For common values;
// $newArray = array_intersect_key($a1, $a2);    # For key match;
// $newArray = array_intersect_assoc($a1, $a2);    # For key match and value;
$newArray = array_intersect_uassoc($a1, $a2, "compare");    # For key match and value by user define function;
$newArray = array_uintersect_uassoc($a1, $a2, "compare", "compareValue");    # For key match and value by user define function;

function compare($a1, $a2) 
{
    if($a1 === $a2)
    {
        return 0;
    }

    return ($a1 < $a2) ?-1:1;
  
}

function compareValue($a1, $a2) 
{
    if($a1 === $a2)
    {
        return 0;
    }

    return ($a1 < $a2) ?-1:1;
  
}

echo "<pre>";
print_r($newArray);
echo "</pre>";


// strcasecmp 

// if you want to compare via itself you can give user define function add in front u add pass third parameter and make function;