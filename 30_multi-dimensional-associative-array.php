<?php

$marks = [
    "Vaibhav" => [
        "physics" => 90,
        "Chemistry" => 78,
        "Maths" => 87,
    ],
    "Vaishnawi" => [
        "physics" => 99,
        "Chemistry" => 88,
        "Maths" => 82,
    ],
    "Ram" => [
        "physics" => 79,
        "Chemistry" => 90,
        "Maths" => 99,
    ],

];

echo "<table border = '5px' cellspacing = '0' cellpadding = '20' >
<tr>
<th> Student Name </th>
<th> Physics </th>
<th> Chemistry </th>
<th> Maths </th>
</tr>
";
foreach($marks as $key => $value)
{
    echo "<tr>;
    <td> $key  </td>";

    foreach($value as $value2){
        echo "<td>$value2 </td>";
    }

    echo "</tr>";

    echo "<tr>";
}

echo "</table>";
// echo "<pre>";
// print_r($marks);
// echo "</pre>";
?>
