<?php 
$numbers = range(10, 50);
$random = mt_rand(0, 10);
echo $numbers[$random] . "\n";

$luck = $numbers[$random];
if($luck % 2 == 0){
    echo "Head";
}else{
    echo "Tail";
}
echo "\n";

shuffle($numbers);
print_r($numbers);

$randomNumber = $numbers[3];
echo $randomNumber;