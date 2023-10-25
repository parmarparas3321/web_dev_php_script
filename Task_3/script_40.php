<!-- Develop a PHP script to remove and replace elements from an array using the
array_splice() function. -->

<?php


$fruits = array("apple", "banana", "cherry", "mango", "kiwi");


$removed_elements = array_splice($fruits, 1, 2);

echo " Removed Elements : ";
print_r($removed_elements);

echo "<br><br>";

echo "Original Array after removal : ";
print_r($fruits);

$replacement = array("grape", "orange");

array_splice($fruits, 3, 4, $replacement);

echo "<br><br>";

echo "Array after replacement : ";
print_r($fruits);

?>
