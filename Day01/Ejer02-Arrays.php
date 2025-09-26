<?php

# Write a PHP script which will display the colors in the following way : white, green, red

$color = array('white', 'green', 'red');

$isLast = false;

for ($i = 0; $i < count($color); $i++) {

    if ($i == count($color) - 1) {
        echo ($color[$i]);
        $isLast = true;
    }

    if ($isLast == false) {

        echo ("$color[$i], ");
    }
}

?>
