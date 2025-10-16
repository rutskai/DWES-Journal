<?php

#A partir de una base y exponente, mediante la
#acumulación de productos, calcula la potencia utilizando la
#instrucción for.

function powerFunction($base, $exponent) {
    $result = 1;
    $n = abs($exponent);

 if ($n == 0) {
        return 1; 
    }

    for ($count = 0; $count < $n; $count++) {
        $result = $result* $base;
    }

    # Si es negativo
    if ($exponent < 0) {
        $result = 1 / $result;
    }

      
    return $result;
}

echo powerFunction(2, 2) . "\n"; 
echo powerFunction(2, -2) . "\n"; 
echo powerFunction(2, 0);  

?>
















?>