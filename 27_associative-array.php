<!-- Associative array: similar to a simple array but with named indices (like objects) -->

<?php

// Define an associative array with names as keys and ages as values
$age = array(
    "Vaibhav" => 18,
    "Vaishnawi" => 17,
    "Ansh" => 19,
    "Piyush" => 16
);

// Add a new key-value pair to the associative array
$age["Elon"] = 29;

// Output the entire associative array in a readable format
echo "<pre>";
echo var_dump($age); // Displays the array structure and contents
echo "</pre>";

// Output the age of 'Vaibhav'
echo $age["Vaibhav"];

?>
