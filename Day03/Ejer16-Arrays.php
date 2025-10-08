<?php

# Write a PHP script to get the largest key in an array.

$people = array(
    "Sophia" => 31,
    "Jacob" => 41,
    "William" => 39,
    "Ramesh" => 40,
    "Emma" => 28,
    "Olivia" => 35,
    "Liam" => 32,
    "Noah" => 37,
    "Ava" => 29,
    "Mia" => 33,
    "Ethan" => 36,
    "Lucas" => 30,
    "Isabella" => 27,
    "Mason" => 38,
    "Harper" => 34
);

$maxKey="";

foreach($people as $key => $value){
    if($key>$maxKey){
        $maxKey=$key;
    }
}

echo "Largest key: " . $maxKey;

?>