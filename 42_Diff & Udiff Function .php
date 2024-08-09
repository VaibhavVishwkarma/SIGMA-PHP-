<?php

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "red", "f" => "green", "d" => "purple");
// $a3 = array("a"=> "red", "b"=> "black", "h"=> "yellow");

// $newArr = array_diff($a1, $a2, $a3); # to check that exist value in array 1 and not exist in array 2;
// $newArr = array_diff($a1, $a2); # to compare the keys and the key doesn't common in array 2 that will return new array
// $newArr = array_diff_assoc($a1, $a2); # compare both key and valye;
// $newArr = array_diff_uassoc($a1, $a2, "compareFunction"); # user define function
// $newArr = array_udiff_assoc($a1, $a2, "compareFunction"); # user define function exactly same to upper;
//  $newArr = array_diff_ukey($a1, $a2,"compareFunction"); #compare key by user define;
$newArr = array_udiff($a1, $a2, "compareFunction"); # for value check by user define function;
$newArr = array_udiff_uassoc($a1, $a2, "compareFunction", "compareValue"); # user define function first function check key and second function check values;

function compareFunction($a1, $a2)
{
    if ($a1 === $a2) {
        return 0;
    }

    return ($a1 < $a2) ? -1 : 1;
}
function compareValue($a1, $a2)
{
    if ($a1 === $a2) {
        return 0;
    }

    return ($a1 < $a2) ? -1 : 1;
}


echo "<pre>";
print_r($newArr);
echo "</pre>";
