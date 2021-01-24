<?php 
$fruits = array('apple', 'banana', 'orange', 'plum', 'guava', 'dates', 'mange');
$random = array("a" => 10, "b" => 11, "c" => 12, "d" => 13, "e" => 14, "f" => 15, 10 => 16, "h" => 17);

// $newFruits1 = array_slice($fruits, 0, 3);
// $newFruits2 = array_slice($fruits, 3, null, true);

// print_r($newFruits1);
// print_r($newFruits2);
 

// $newFruits = array_merge($newFruits1, $newFruits2);
// print_r($newFruits);

// $newFruitsPlus = ($newFruits1 + $newFruits2);
// print_r($newFruitsPlus);

$r1 =  array_slice($random, 0, 2, true);
$r2 = array_slice($random, 4, null, true);
$r3 = array("i" => 18, "j" => 19);

$randomData = array_splice($random, 2, 2, array("i" => 18, "j" => 19));
$randomDataCorrectWay = $r1 + $r2 + $r3;

// print_r($randomData);
// print_r($random);
print_r($randomDataCorrectWay);