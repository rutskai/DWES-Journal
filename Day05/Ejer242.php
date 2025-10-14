<?php

#242matematicas.php: Añade las siguientes funciones:

#digitos(int $num): int → devuelve la cantidad de dígitos de un número.
#digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
#quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.
#quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.

function digits(int $num): int {
    $num= abs($num);
    return strlen((string) $num); 
}

echo "Número de dígitos de -14345: " . digits(-14345) . "\n";


function digitPos(int $num, int $pos): int {
    $numStr = (string) abs($num);

    return (int) $numStr[$pos - 1];
}

echo "Dígito en la posición 3 de 98765: " . digitPos(98765, 3) . "\n";


function removeEnd(int $num, int $amount): int {
    $numStr = (string) abs($num);

    if ($amount >= strlen($numStr)) {
        return 0;
    }
    return (int) substr($numStr, 0, -$amount);
}

echo "Quita 2 dígitos por detrás de 12345: " . removeEnd(12345, 2) . "\n"; 


function removeFromStart(int $num, int $amount): int {
    $numStr = (string) abs($num);

    if ($amount >= strlen($numStr)) {
        return 0;
    }
    return (int) substr($numStr, $amount);
}

echo "Quita 2 dígitos por delante de -15645: " . removeFromStart(-15645, 2) . "\n";


?>