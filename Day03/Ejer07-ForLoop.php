<?php
# Write a program which will count the "r" characters in the text "w3resource"

$text="w3resource";

$count=0;

for ($i=0; $i < strlen($text); $i++) { 
    if ($text[$i]=="r"){
        $count=$count + 1;
    }
}

echo $count;




 






?>

