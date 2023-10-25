<!-- Create a PHP script to check if a specific key exists in an associative array using the
array_key_exists() function. -->

<?php

$person = array(
    "name" => "Paras",
    "age" => 20,
    "city" => "jamnagar",
    "country" => "india"
);


$keyToCheck = "city";


if (array_key_exists($keyToCheck, $person)) {

    echo "Key '$keyToCheck' exists in the associative array.";

} else {

    echo "Key '$keyToCheck' does not exist in the associative array.";
}

?>
