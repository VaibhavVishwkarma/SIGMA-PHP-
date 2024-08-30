<?php

// Start the table
echo "<table border='1' cellpadding='5'>";

// Outer loop: iterates for each row
for ($i = 0; $i < 10; $i++) {
    // Start a new row
    echo "<tr>";

    // Inner loop: iterates for each column
    for ($j = 0; $j < 10; $j++) {
        // Output the value of $j in a table cell
        echo "<td>$j</td>";
    }

    // End the row
    echo "</tr>";
}

// End the table
echo "</table>";

?>
