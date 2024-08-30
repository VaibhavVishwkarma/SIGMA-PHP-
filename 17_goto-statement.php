<?php

// Define the upper limit for the loop
$num = 10;

// Start a for loop from 1 to less than $num
for ($i = 1; $i < $num; $i++) {
    // If $i equals 3, jump to the label 'abc'
    if ($i == 3) {
        goto abc;
    }
    
    // Output the value of $i followed by a line break
    echo $i . "<br>";
}

// Label 'abc': code execution jumps here when 'goto' is used
abc:
echo "Hello, Vaibhav <br>";

// Define two variables with the value 10
$a = 10;
$b = 10;

// Output the sum of $a and $b
echo $a + $b;

?>
