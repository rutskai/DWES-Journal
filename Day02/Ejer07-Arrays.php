<?php
# Write a PHP script that inserts a new item in an array in any position.
# After inserting '$' the array is : 1 2 3 $ 4 5

$array = [1, 2, 3, 4, 5];

array_splice($array, 3, 0, "$");

foreach ($array as $x) {
    echo $x . " ";
}

?>