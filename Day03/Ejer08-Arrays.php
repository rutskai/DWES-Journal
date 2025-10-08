<?php

#Write a PHP script to sort the following associative array :
#array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
#a) ascending order sort by value
#b) ascending order sort by Key
#c) descending order sorting by Value
#d) descending order sorting by Key

$associativeArray=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

ksort($associativeArray);

echo "Ascending order by key:\n";
foreach($associativeArray as $key => $value){
   echo "$key: $value\n";
}

asort($associativeArray);

echo "Ascending order by value:\n";
foreach($associativeArray as $key => $value){
   echo "$key: $value\n";
}

echo "\nDescending order by value:\n";

arsort($associativeArray);

foreach($associativeArray as $key => $value){
    echo "$key: $value\n";
}

krsort($associativeArray);

echo "Descending order by key:\n";
foreach($associativeArray as $key => $value){
    echo "$key: $value\n";
}


?>