<?php 
$fruits = array('apple', 'banana', 'orange', 'plum', 'guava', 'dates', 'mange');
$random = array("a" => 10, "b" => 11, "c" => 12, "d" => 13, "e" => 14, "f" => 15, 10 => 16, "h" => 17);

$newFruits = array("Jackfruit", "Watermelon");
$someFruits = array_splice($fruits, 2, -1, $newFruits);
print_r($someFruits);

print_r($fruits);
// print_r($random); 