<?php

/* List() function works only with index array or associative array with numeric key */

/* The list() function in PHP is used to assign values from an array to a list of variables in a single operation. It's typically used with indexed arrays and helps to extract multiple values from an array quickly.*/

// $colors = ["Red", "green", "blue"];
$colors = [0=>"pink", 1=>"green", 2=>"red"];

// list($a, $b, $c) = $colors;
list($a, $b, $c) = $colors;



