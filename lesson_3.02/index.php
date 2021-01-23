<?php 

$fruits = array(
    "Apple",
    "Banana",
    "Mango",
    "Jackfruit",
);

// var_dump($fruits);

// ai vabe array ar value ar man change kora jay 
// $fruits[2] = "Guava";

// array_shift upor theke akta akta kore data remove hoy 
$fruit = array_shift($fruits);

// array_shift nich theke akta akta kore data remove hoy 
$fruit = array_pop($fruits);

// array_push nicher dik theke data add kore
array_push($fruits, "kamal");
$fruits[] = "Ariful";

// array_push uporer dik theke data add kore
array_unshift($fruits, "Jamal");



$n = count($fruits);
for($i = 0; $i < $n; $i++){
    echo $fruits[$i] . "\n";
}


