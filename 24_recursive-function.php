<?php

// function display($number)
// {
//     if ($number <= 10) {
//         display($number + 1);
//         echo "$number <br>";
//     }
// }

// display(1);

# this is a recursive program to calculate factorial => recursive means the functions which calls itself...

function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return ($n * factorial($n - 1));
    }
}
echo factorial(3);

?>