<?php

#Crea las siguientes funciones:

#Una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().
#Una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador ....


function majorFunction() : int {
    $numbers = func_get_args();
    $max = $numbers[0];

    foreach ($numbers as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }

    return $max;
}

echo "El mayor número de 4,8 y 2 es: " . majorFunction(4,8,2);


function concatenate(...$value) : string {
    return implode(" ", $value );
}

echo "\nPalabras separadas por espacios: " . concatenate("queso", "arroz", "miau");

?>