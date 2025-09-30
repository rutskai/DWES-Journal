   <?php

   #Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.

   function triple($x, $y)
   {
      if ($x == $y) {
         return ($x + $y) * 3;
      } else {
         return $x + $y;
      }
   }

   echo "Inicializando programa...\n";
   echo triple(1, 2) . "\n";
   echo triple(3, 2) . "\n";
   echo triple(2, 2) . "\n";

   ?>