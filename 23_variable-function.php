<?php

# Method 1: Using Variable Function Names

// Define a function named 'wow' that greets the user
function wow($name) {
    echo "Hello $name<br>";
}

// Store the function name 'wow' in a variable
$func = "wow";

// Call the function using the variable
$func("Vaibhav Bhai kya haal hai...<br>");

# Method 2: Using Anonymous Functions (Closures)

// Define an anonymous function (closure) that greets the user
$sayHello = function($name) {
    echo "Hello Vaibhav $name<br>";
}; // Semicolon is required here to terminate the function definition

// Call the anonymous function
$sayHello("Kya haal hai bhai...<br>");

?>
