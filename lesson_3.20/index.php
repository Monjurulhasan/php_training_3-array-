<?php 
$fruits = array('a' => 'Apple', 'b' => 'Banana', 'c' => 'Cherry', 'd' => 'Dates');
// shuffle($fruits);
// print_r($fruits);

$_fruits = $fruits;
shuffle($_fruits);

$key = array_rand($fruits);
// echo $key;
// echo $fruits[$key];
// print_r($fruits);
print_r($_fruits);