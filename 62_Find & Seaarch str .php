<?php

$a= "I Love PHP & I Love PHP too";

// $newStr = strpos( $a,"Love"); # case sensitive;
// $newStr = strrpos( $a,"Love"); # case sensitive;
// $newStr = stripos( $a,"Love"); # case insensitive;
$newStr = strripos( $a,"LOVE"); # case insensitive;

echo $newStr;