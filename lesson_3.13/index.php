<?php 
// $fruits = array('apple', 'banana', 'orange', 'plum', 'guava', 'dates', 'mange');
// $numbers = array(4, 6, 2, 5, 9, 10, 14, 13);
// sort($fruits);
// sort($numbers);
// print_r($fruits);
// print_r($numbers);

// $fruits = array('a'=>'apple', 'b' => 'banana', 'o' => 'orange', 'p' => 'plum', 'guava', 'dates', 'mange');
// $numbers = array(4, 6, 2, 5, 9, 10, 14, 13);
// asort($fruits);
// sort($numbers);
// print_r($fruits);
// print_r($numbers);

$numbers = array(4, 6, 2, 5, 9, 10, 14, 13);
sort($numbers, SORT_STRING);
// print_r($numbers);

$random = array("apple", "Apple", "banana", "Banana", "Pineapple");
sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random);