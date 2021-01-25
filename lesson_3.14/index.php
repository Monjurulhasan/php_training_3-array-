<?php 
$fruits = array('a'=>'apple', 'b'=>'banana', 'g'=>'guava', 'j'=>'jackfruit', 'l'=>'lychee');
$numbers = array(13, 11, 5, 4, 17, 56, 43);

if(in_array('43',$numbers, true)){
    echo '43 is found' . "\n";
}else{
    echo '43 in not found' . "\n";
}

$offset = array_search(5, $numbers);
echo $offset . "\n";

if(key_exists('a', $fruits)){
    echo "key a is exits";
}else{
    echo "key a is not exits";
}