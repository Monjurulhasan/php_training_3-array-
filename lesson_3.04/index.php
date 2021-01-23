<?php 
// $fruits = 'Apple, Banana, Orange, Guava';
// echo $fruits;

// explode() function use kore string theke array te convert kora jay
// $fruits = explode(', ','Apple, Banana, Orange, Guava, Lychee');
// // delimiter
// var_dump($fruits); 

// preg_split() use kore Multiple delimiter use kora jay 
$fruits = preg_split('/(, |,)/','Apple, Banana, Orange, Guava,Lychee');
// delimiter
var_dump($fruits); 


// join() function use kore array theke string a convert kora jay 
$fruits_string = join(', ', $fruits);
// echo $fruits_string;
echo count($fruits);