<?php

// Recursive function to display numbers from 1 to 10
function display($number) {
    if ($number <= 10) {
        // Recursive call to display the next number
        display($number + 1);
        // Output the current number after returning from recursive call
        echo "$number <br>";
    }
}

// Call the display function starting from 1
display(1);

# This is a recursive program to calculate factorial => recursive means the function calls itself...

// Recursive function to calculate factorial
function factorial($n) {
    if ($n == 0) {
        // Base case: factorial of 0 is 1
        return 1;
    } else {
        // Recursive case: n * factorial of (n-1)
        return ($n * factorial($n - 1));
    }
}

// Call the factorial function with 3
echo factorial(3);

