<?php

#Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of 
#the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".

for ($i=1; $i <= 50; $i++) { 

    switch (true) {
        case ($i%3==0 && $i%5==0):
            echo "FizzBuzz" . "\n";
            break;
         case ($i%5==0):
            echo "Buzz" . "\n";
            break;
         case ($i%3==0):
            echo "Fizz" . "\n";
            break;
        default:
          echo $i . "\n";
            break;
    }
    
}

?>