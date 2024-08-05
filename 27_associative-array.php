 <!-- associative array nothing else like simple array but we can give index name accordingly(like object).... -->

<?php

$age = array(
    "Vaibhav" => 18,
    "Vaishnawi" => 17,
    "Ansh" => 19,
    "Piyush" => 16
);

$age ["Elon"] = 29;

echo "<pre>";
echo var_dump($age) ."<br>";  
echo "<pre>";  


echo $age["Vaibhav"];

?>