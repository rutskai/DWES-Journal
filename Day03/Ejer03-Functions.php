    <?php

    # Write a function to reverse a string.

    function reverse($string){
        $reversed="";

         for($i = strlen($string) - 1; $i >= 0; $i--){
        $reversed = $reversed . $string[$i];
        
    }
    return $reversed;
    }

    echo(reverse("1234"));

?>