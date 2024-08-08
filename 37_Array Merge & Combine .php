<?php
# This is index array;
$Fruit = ["Banana", "Papaya", "Orange"];
$Veggie = ["Brinjal", "Ladyfinger"];
$colors = ["Pink", "Blue"];

# Array_merge function only for index or associative array;

$newArray = array_merge($Fruit, $Veggie, $colors);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";

#This is associative array;

$Fruit = [ 'a' => "Apple", 'b'=> "Grapes", 'c'=> "Pineapple"];
$Veggie = [ 'b'=> "Carrot", 'a' => "Pea"];  # common keys replace the values; lile 'a' & 'b';

// $assocArray = array_merge($Fruit, $Veggie); # it replace the array;
$assocArray = array_merge_recursive($Fruit, $Veggie); # it dosen't replace value it creates a new ass- array insid;

echo "<pre>";
print_r($assocArray);
echo "</pre>";

echo "<br>";

# Combine method make first array = key and second array = value, also array must in same size and values, And generate a new associative array means like in a object form (It use only index array only);

$name = array("Vaibhav", "Vaishnawi", "Harshit");
$age = array(18, 17, 19);
// $age = array("18", "17", "19"); # Value no can be in str or no;

$combineArray = array_combine($name, $age);

echo "<pre>";
print_r($combineArray);
echo "</pre>";

?>