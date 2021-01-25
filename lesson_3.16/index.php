<?php 
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);

function square($n){
    printf("Square of %d is %d \n", $n, $n*$n);
}
// array_walk($numbers, 'square');

function cube($n){
    return $n*$n*$n;
}

function even($n){
    return $n%2==0;
}

function odd($n){
    return $n%2==1;
}

// print_r($numbers);

// $newArray = array_map('cube', $numbers);
// print_r($newArray);

$evenNumbers = array_filter($numbers, 'even'); // 'even' hocche callback function
$oddNumbers = array_filter($numbers, 'odd'); 

print_r($evenNumbers);
print_r($oddNumbers);

$person = array('manun', 'mahmud', 'monjur', 'maruf', 'mahadi', 'rohim', 'masuk');
function filterByS($name){
    return $name[0]=='r';
}
$newPersons = array_filter($person, 'filterByS');
print_r($newPersons);