<?php

# Call by value
// function argument($value)
// {
//     $value  = "Vaibhav";
//     echo $value . "<br>";
// }

// $str = "Harshit";
// argument($str);
// echo $str;

# call by refrence

// function argument(&$value)
// {
//     $value = "Vaibhav";
//     echo $value ."<br>";
// }

// $str = "Harshit";
// argument($str);
// echo $str;

function first($number)
{
    $number +=5;
}

function second(&$number)
{
    $number +=5;
}

$num = 10;
first($num);
echo "original value $num <br>";


$num = 10;
second($num);
echo "original value $num <br>";
