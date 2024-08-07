<?php

// $emp = [

//     [1, "Vaibhav", "Web Developer", 600000],
//     [2, "Krishna", "Android Developer", 400000],
//     [3, "Vaishnawi", "Data Analyst", 500000],
//     [4, "Ansh", "Sales Man", 200000],
//     [5, "Priya", "Cloud Developer", 300000],

// ];

$emp = [
    ["id" => 1,
    "Name" => "Vaibhav",
    "Designation" => "Web Developer",
    "Salary" => 600000,
],
    ["id" => 1,
    "Name" => "Krishna",
    "Designation" => "Android Developer",
    "Salary" => 400000,
],
    ["id" => 1,
    "Name" => "Vaishnawi",
    "Designation" => "Data Analyst",
    "Salary" => 500000,
],
    ["id" => 1,
    "Name" => "Ansh",
    "Designation" => "Sales Man",
    "Salary" => 300000,
],
    ["id" => 1,
    "Name" => "Priya",
    "Designation" => "Cloud Developer",
    "Salary" => 600000,
]
];

// echo "<table border = '2px' cellspacing = '0' cellpadding = '10' >

// <tr> 
// <th> ID</th>
// <th> Name</th>
// <th> Designation</th>
// <th> salary</th>
// </tr>

// ";

// foreach($emp as list( $id, $name,$designation,$salary))
// {
//     echo " <tr> <td>$id </td> <td> $name </td> <td> $designation </td> <td> $salary </td> </tr>";
// }

// echo "<table>";


echo "<table border = '2px' cellspacing = '0' cellpadding = '10' >

<tr> 
<th> ID</th>
<th> Name</th>
<th> Designation</th>
<th> salary</th>
</tr>

";

foreach($emp as list( "id" => $id, "Name" => $name, "Designation"=> $designation, "Salary"=> $salary))
{
    echo " <tr> <td>$id </td> <td> $name </td> <td> $designation </td> <td> $salary </td> </tr>";
}

echo "<table>";



?>