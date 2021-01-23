<?php 
$foods = [
    'vegetables' => 'brinjal, brocoli, carrot, capsicum',
    'fruits' => 'Orange, Mango, Banana, Guava',
    'drinks' => 'water, milk'
];
// echo $foods['vegetables'];

$foods['drinks'] = $foods['drinks'].", Orange Juice";

// foreach ($foods as $key => $value) {
//     echo $key . "=" . $value . "\n";
// }

// $keys = array_keys($foods);
// for($i = 0; $i < count($keys); $i++){
//     $key = $keys[$i];
//     echo $foods[$key]."\n";
// }

$values = array_values($foods);
for($i = 0; $i < count($values); $i++){
    $key = $values[$i];
    echo $key."\n";
}