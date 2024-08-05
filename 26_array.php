<?php

// $colors = array("Blue", 27, "Pink", 9.0, "Red"); #can store for multiple datatypes.
$colors = ["Blue", 27, "Pink", 9.0, "Red"]; #2nd brace bracket method.

$colors[0] = "Blue";
$colors[1] = "27";
$colors[2] = "Pink";    # array 3rd method...
$colors[3] = "9.0";
$colors[4] = "Red";


// echo $colors[0] ."<br>";
// echo $colors[1] ."<br>";
// echo $colors[2] ."<br>";

echo "<pre>"; # increase readibility of array by using "<pre>"...
print_r($colors); # inbuilt method to print all the arrays (bacisally for testing purpose).
echo "<pre>";