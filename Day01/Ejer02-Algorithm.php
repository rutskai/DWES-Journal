<?php

# Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.

function difference($n)
{
    $result = abs(51-$n);

    if ($n > 51) {
        return $result * 3;
    }

    return $result;
}

echo (difference(53));

?>