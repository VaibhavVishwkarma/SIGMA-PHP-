<?php

// return single value;

function myFunction($n, $m) // in starting n has no value & in m first value come orange loop runs again;
{
    return $n . " - " . $m;  // also i can do the addition of all the valus;
} 

$a = ["orange", "apple", "banana"];

$newArr = array_reduce($a, "myFunction", "lemon");

echo "<pre>";
print_r($newArr);
echo "</pre>";