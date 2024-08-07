<?php

$food = array("Pizza", "Samosa", "Pasta", "Soup");

// echo count($food);
// echo "<br>";
// echo sizeof($food);
// echo "<br>";

$len = count($food);
for ($i = 0; $i < $len; $i++) {
    echo $food[$i] . "<br>";
}

// $food  = array(
//     "fruits" => array("Grapes","Mango","Banana"),
//     "veggie" => array("Patato","Tomato","Onion"),
// );


#for print array value only like "fruits" ==> use ["fruits] in count.
// echo count($food["fruits"], 1); # for print size inside array pass 1 by default it is 0.
// echo "<br>";
// echo sizeof($food);
// echo "<br>";


print_r(array_count_values($food)); # for check how many value in array like if there are two fruit of same name output = 2.

?>