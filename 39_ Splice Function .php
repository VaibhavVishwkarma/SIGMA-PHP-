<?php

# Splice function changes in existing array

$colours = ["Red", "Green", "Blue", "Yellow", "Brown"];
$fruits = ["Orange", "Apple"];

// array_splice($colours, 1,2);

echo "<br>";

array_splice($colours,1,2, $fruits);


echo "<pre>";
print_r($colours);
echo "</pre>";

