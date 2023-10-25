<!-- Write a PHP script to extract the values from an associative array using the array_values()
function. -->

<?php

$student = array(
    "first_name" => "Paras",
    "last_name" => "Parmar",
    "age" => 20,
    "email" => "paras123@example.com"
);

$keys = array_values($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>