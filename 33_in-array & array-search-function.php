<?php


$food = ["Cookie", "Banana", "Pasta", "Momos"];

// echo in_array("Pasta", $food); synytax of in array;

if(in_array("Pasta", $food, true))
{
    echo "Find Successfully";
}
else{
    echo "Food not found";
}

echo "<br>";

echo array_search("Momos", $food, true);  // for search the key  or index this method is use


echo "<br>";


