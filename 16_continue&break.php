<?php

$num = 10;

for ($i = 1; $i <= $num; $i++) {

    if ($i == 3) {
        continue;
    }

    echo $i . "<br>";
}
