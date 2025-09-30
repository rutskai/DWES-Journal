<?php

# Write a PHP script which decodes the following JSON string

$example= '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';

$decode=json_decode($example, true);

function echoFunction($value, $key) {
    echo "$key : $value" . "\n";
}

array_walk_recursive($decode, "echoFunction");

?>