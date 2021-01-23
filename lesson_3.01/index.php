<?php 

$students = array(
    "Rahim",
    "Karim",
    "Mina",
    22,
    "Raju"
);

$n = count($students);

for($i=0; $i < $n; $i++){
    echo $students[$i]."\n";
}

for($i= $n - 1; $i >= 0; $i--){
    echo $students[$i] . "\n";
}