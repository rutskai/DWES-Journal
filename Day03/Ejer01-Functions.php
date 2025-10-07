<?php
# Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.

 echo factorial(4);

function factorial($x){
    $num=1;
    for ($i=1; $i <= $x; $i++) { 
        $num=$num * $i;
    }
    return $num;
}



?>