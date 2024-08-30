<?php

$x = 100;  # It is a gloabl var that dosen't work inside scope.
function test()
{
    // $x = 100;  # It is a local var that dosen't work outside scope.

    # If u want to use global var inside scope use global keyword.

    global $x;
    echo "x inside function : $x <br>";
}
test();
echo "x outside function : $x";