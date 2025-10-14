<?php

#Crea las siguientes funciones:

#Una función que averigüe si un número es par: esPar(int $num): bool
#Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array
#Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados: arrayPares(array &$array): int


    function isEven(int $num) : bool{
        if($num%2==0){
        return true;
        }
        return false;
}

if (isEven(5)){
    echo "El número es par.\n";
}else{
    echo "El número no es par.\n";
}

function randomArray(int $size, int $min, int $max) : array{

$array=[];

    for ($i=0; $i < $size; $i++) { 
        $array[]=rand($min, $max);
    }

    shuffle($array);

    return $array;
}

echo "Array desordenado: " . implode(", ", randomArray(20, 2,10)) . "\n";

function evenArray(array &$numbers) : int{
    $count=0;
    for ($i=0; $i < count($numbers); $i++) { 
        if($numbers[$i]%2==0){
            $count++;
        }
    }
    return $count;
}

$numbers=[2,4,5];

echo "En este array: " . implode(", ", $numbers) . "\n\tHay " . evenArray($numbers) . " números pares.";

?>