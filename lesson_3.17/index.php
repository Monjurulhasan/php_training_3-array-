<?php 
$numbers =array(1, 2, 3, 4, 5, 6);
function sum($old, $new){
    // return $old + $new;
    if($new%2==0){
        return $old + $new;
    }
    return $old;
}

$sum = array_reduce($numbers, 'sum');
echo $sum;