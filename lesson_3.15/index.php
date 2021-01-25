<?php 
$numbers1 = array(1, 4, 3, 66, 54, 7, 23, 1, 2);
$numbers2 = array(88, 3, 21, 44, 3, 28, 1, 2, 7);

$fruits1 = array("a"=>"apple", "b"=>"banana", "c"=>"lemon");
$fruits2 = array("d"=>"pineapple", "b"=>"malta", "e"=>"grapes", "c"=>"lemon");

$common = array_intersect($numbers1, $numbers2);
print_r($common);
// $commonF = array_intersect($fruits1, $fruits2);
$commonF = array_intersect_assoc($fruits1, $fruits2); //key soho check korte hole array_diff_assoc use korte hoy
print_r($commonF);

$diff = array_diff($numbers1, $numbers2);
print_r($diff);

// $diffF = array_diff($fruits2, $fruits1);
$diffF = array_diff_assoc($fruits1, $fruits2 );
print_r($diffF);