<?php
#Escribe un programa que sume los números del 1 al 10.
#A partir del anterior, refactorizar para que funcione con inicio y fin.


function sumRange(int $start, int $end): int {

    $sum = 0;

    for ($i = $start; $i <= $end; $i++) {
        $sum = $sum + $i;
    }

    return $sum;
}

echo "La suma de los números es: " . sumRange(5, 10);

?>


