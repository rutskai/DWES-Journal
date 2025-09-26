<?php

# Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.

function factorial($number)
{

    $result = 1;

    for ($i = 1; $i <= $number; $i++) {
        $result = $result * $i;
    }

    return $result;
}

echo (factorial(4));

?>
