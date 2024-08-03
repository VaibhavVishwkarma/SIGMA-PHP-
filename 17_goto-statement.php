<?php

$num = 10;

for ($i = 1; $i < $num; $i++) {
    if ($i == 3) {
        goto abc;
    }
    echo $i . "<br>";
}

abc:
echo "Helo, Vaibhav <br>";

$a = 10;
$b = 10;

echo $a + $b;
