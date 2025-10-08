<?php
 
 #Write a PHP script using nested for loop that creates a chess board as shown below.

 echo "<table>";

 for ($fila=1; $fila <= 8; $fila++) { 
    echo "<tr>";
    for ($columna=1; $columna <=8 ; $columna++) { 
           if (($fila + $columna) % 2 == 0) {
            $color = "white";
        } else {
            $color = "black";
        }

        echo "<td style= 'background-color:$color'></td>";
        
    }
    echo "</tr>";
 }

echo "</table>";






?>