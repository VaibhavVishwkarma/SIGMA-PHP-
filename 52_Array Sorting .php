<?php

$food = ["orange", "banana", "grapes", "apple"];

sort($food); // for ascending order;
rsort($food); // for decending order means reverse sort;

echo "<pre>";
print_r($food);
echo "</pre>";

echo "<br>";

// for associative array;

$veggie = ["a"=>"brinjal", "b"=> "carrot", "c"=>"pea", "d" => "coriander"];

// sort($veggie); // for ascending order;
// rsort($veggie); // for decending order means reverse sort;

// asort($veggie); // keys will show with (a) for ascending order;
// arsort($veggie); // keys will show with (a) for decending order means reverse sort;
 krsort($veggie); // only keys will be short for decending order means reverse sort;


echo "<pre>";
print_r($veggie);
echo "</pre>";

echo "<br>";


$array1 = ["img12.png", "img10.png", "img2.png", "img1.png"]; // in these value i is small in all
$array1 = ["Img12.png", "img10.png", "Img2.png", "Img1.png"]; // in some value I is big so we use natcasesort

// natsort($array1);  // means natural sort it is not case sensitive;
natcasesort($array1);  // means natural sort but it is case sensitive; 


echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<br>";



$a = ["orange", "banana"]; // both array length should equal;
$b = ["pea", "carrot"];  // both array length should equal;

array_multisort($a, $b);

echo "<pre>";
print_r($a);
echo "</pre>";
echo "<br>";

echo "<pre>";
print_r($b);
echo "</pre>";
echo "<br>";

// array_reverse try yourself 