    <?php

    # Write a function to check whether a number is prime or not.
    #Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.

function prime($num){
    if($num <= 1){
        return false; 
    }

    for ($i = 2; $i < $num; $i++) { 
        if ($num % $i == 0) {
            return false; 
        }
    }

    return true; 
}

$isPrime = prime(2);

if($isPrime){
    echo "Es primo.";
}else{
    echo "No es primo.";
}

?>
