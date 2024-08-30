<?php

$food = ["orange", "apple", "banana", "grapes"];

echo current($food); // tells the current position;
echo "<br>";
echo key($food); // gives the current element index or key;
echo "<br>";
echo pos($food); // similar to current function;
echo "<br>";
echo next($food); // gives the next value;
echo "<br>";
echo prev($food); // gives the previous value;
echo "<br>";
echo end($food); // goes to last value in end;
echo "<br>";

// Using foreach to simulate 'each'
echo "<pre>";
foreach ($food as $key => $value) {
    echo "Key: $key, Value: $value<br>";
}
echo "</pre>";

echo reset($food); // wherever you are it will take you to the beginning; 
echo "<br>";
?>
