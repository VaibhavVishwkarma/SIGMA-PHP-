<?php

$str = "Hello Vaibhav";

// $arr = str_split($str, 2);
$newstr = chunk_split($str, 2, "...");

echo "<pre>";
print_r($newstr);
echo "</pre>";