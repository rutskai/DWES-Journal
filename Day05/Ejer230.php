<?php
#Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego muéstralo en una lista desordenada. 
#Para crear un número aleatorio, utiliza la función rand(inicio, fin).

$numbers= [];

for ($i=0; $i < 50; $i++) { 
    $numbers[]= rand(0,99);
}

shuffle($numbers);

echo "Array desordenado con números aleatorios: " . implode(", ", $numbers);


?>