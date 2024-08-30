<?php

$a ="hello World";
$newStr =  strlen($a);
echo $newStr;

echo "<br>";

$b ="Artificial Intelligence";
$newStr =  str_word_count($b, 1); // 2nd para for making array use print_r function; we give 2 then it takes real index 
// echo $newStr;

echo "<br>";

$c ="Data Science is most popular domain.";
$newStr =  substr_count( $c, "isv",3 ); // for find the word in string;
echo $newStr;
