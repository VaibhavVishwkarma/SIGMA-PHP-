<?php

$str = "Hello World!. It's a beautiful day";

$newArr = explode(" ", $str);

echo "<pre>";
print_r($newArr);
echo "</pre>";
echo "<br>";


$array = ['Hello', 'Gamers', 'How', 'Gaming', 'Is', 'Going', 'On'];


$str2 = implode(" ", $array);

echo "<pre>";
print_r($str2);
echo "</pre>";
echo "<br>";

// join function is also same as implode function;