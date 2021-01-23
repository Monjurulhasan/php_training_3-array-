<?php 
$person = array('fname' => 'Hello', 'lname' => 'World');
$newPerson = $person; //Copy by value, deep copy
// $newPerson = &$person; //Copy by reference shallow copy
$newPerson['lname'] = 'Pluto';

print_r($person);
print_r($newPerson);

function printDate(&$person){
    $person['fname'] .= " Changed";
    print_r($person);
}

printDate($person);
print_r($person);