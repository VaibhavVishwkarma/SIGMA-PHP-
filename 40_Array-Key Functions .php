<?php

$colors1 = ["Red", "Green", "Blue", "Yellow"];

$newArr1 = array_keys($colors1);

echo "<pre>";
print_r($newArr1);
echo "</pre>";

echo "<br>";


$colors2 = [
    "first" => "Red",
    "second" => "Green",
    "third" => "Blue",
    "fourth" => "Yellow"
];

// $newArr2 = array_keys($colors2);
//  $newArr2 = array_key_last($colors2); #First also;
//  $newArr2 = array_key_exists("first",$colors2);
  $newArr2 = key_exists("first",$colors2); #same array key exist but it is a new version;

  if($newArr2)
  {
    echo "Key exists !";
  }
  else
  {
    echo "Key not exist !";
  }

echo "<pre>";
print_r($newArr2);
echo "</pre>";


