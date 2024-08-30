<?php
// Simple string variable
$stringVar = "Hello, Vaibhav";
echo $stringVar; // Outputs: Hello, Vaibhav
echo "<br>";

// Integer variable
$intVar = 42;
echo "Integer value: " . $intVar; // Outputs: Integer value: 42
echo "<br>";

// Floating-point variable
$floatVar = 3.14;
echo "Floating-point value: " . $floatVar; // Outputs: Floating-point value: 3.14
echo "<br>";

// Boolean variable
$boolVar = true;
echo "Boolean value: " . ($boolVar ? "true" : "false"); // Outputs: Boolean value: true
echo "<br>";

// Array variable
$arrayVar = array("apple", "banana", "cherry");
echo "Array values: ";
print_r($arrayVar); // Outputs: Array values: Array ( [0] => apple [1] => banana [2] => cherry )
echo "<br>";

// Associative array variable
$assocArrayVar = array("first" => "apple", "second" => "banana", "third" => "cherry");
echo "Associative array values: ";
print_r($assocArrayVar); // Outputs: Associative array values: Array ( [first] => apple [second] => banana [third] => cherry )
echo "<br>";
?>