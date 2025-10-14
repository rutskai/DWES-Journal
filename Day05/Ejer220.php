<?php

#Escribe un programa que muestre los números pares del 0 al 50 (desordena el array).


    $numbers=[];

    for ($i=0; $i <= 50; $i++) { 
        if($i%2==0){
        array_push($numbers, $i);
        }
    }

    shuffle($numbers);

   
    echo "Array desordenado: " . implode(", ", $numbers);


    ?>