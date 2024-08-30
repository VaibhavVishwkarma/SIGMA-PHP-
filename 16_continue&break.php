<?php

// Define the upper limit for the loop
$num = 10;

// Start a for loop from 1 to $num (inclusive)
for ($i = 1; $i <= $num; $i++) {

    // Skip the current iteration if $i is equal to 3
    if ($i == 3) {
        continue;
    }

    // Output the value of $i followed by a line break
    echo $i . "<br>";
}
