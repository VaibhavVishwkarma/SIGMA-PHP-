<?php

// It is multidimensional array that have outer array and inner array with column and row
$emp = [

    [1, "Vaibhav", "Web Developer", 600000],
    [1, "Krishna", "Android Developer", 400000],
    [1, "Vaishnawi", "Data Analyst", 300000],
    [1, "Ansh", "Sales Man", 200000],
    [1, "Priya", "Cloud Developer", 300000],

];
// echo $emp[2][1] . "<br>";

// for($row = 0; $row<5; $row++)
// {
//     for($col = 0; $col<4; $col++)
//     {
//         echo $emp[$row][$col] ." ";
//     }
//     echo "<br>";
// }

echo "<table border = '2px' cellspacing ='0' cellpadding = '0'>";
echo "<tr> 
<th> ID </th>
<th> Name </th>
<th> Designation </th>
<th> Salary </th>
</tr>";
foreach ($emp as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }

    echo "</tr>";
}
echo "</table>";


// echo "<pre>";
// print_r ($emp);
// echo "</pre>";
