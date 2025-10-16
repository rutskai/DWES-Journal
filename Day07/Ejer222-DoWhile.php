<?php

#Reescribe el ejercicio anterior haciendo uso sólo de do-while

function powerFunction($base, $exponent) {
    $result = 1;
    $count=0;
    $n = abs($exponent);

    if ($n == 0){
        return 1;
    }

    do {
        $result =$result* $base;
        $count++;
    } while ($count < $n);

    #Si es negativo

     if ($exponent < 0) {
        $result = 1 / $result;
    }
    

    return $result;
}

// Ejemplos de uso
echo powerFunction(2, 3) . "\n"; 
echo powerFunction(2, 0);  


?>