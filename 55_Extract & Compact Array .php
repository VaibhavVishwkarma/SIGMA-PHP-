<?php

$a ="orange";

$colors = ["a"=> "blue", "b"=>"green", "c"=>"pink"];

extract($colors, EXTR_PREFIX_SAME, "test");   

echo "Value of a is : $a <br>";
echo "Value of a is : $test_a <br>";
echo "Value of b is : $b <br>";
echo "Value of c is : $c <br>";


# EXTR_OVERWRITE; by defaut value in 2nd parameter;
# EXTR_SKIP; if u want to skip array value and want to use external value;
# EXTR_PREFIX_SAME; 
# EXTR_PREFIX_ALL; 

$first = "green";
$second = "purple";
$third = "red";
$fourth = "India";
$fifth = "japan";

$extra = ["fourth","fifth"];

$store = compact("first","second","third", $extra);

echo "<pre>";
print_r( $store );
echo "</pre>";