<?php

$x = 100;
$x = 10;
$x = "Vaibhav";   # It will print last variable.
echo $x;
echo "<br>";

# Now we will use constant variable syntax => define(name, value, case-insensitive)

define("num", 80.9, false);  # by default value = false these are global variables...
// define("num", 3, false); already defined

$int = num + 9;
echo $int;
