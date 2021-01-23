<?php 
$fruits = array('apple', 'banana', 'mango', 'guava', 'orange', 'lychee');

// array_slice amara array ar vitor theke data ke ber kore niye asa
// $someFruits = array_slice($fruits, 2);

// array slice ar 3 no parameter ta koyta value niye asbe setar jonno use kora hoy
// $someFruits = array_slice($fruits, 2, 3);

// array slice ar akhaner 3 no parameter -1 dara seta ke bujhiyeche, orthat last ta porjonto conunt korbe
// $someFruits = array_slice($fruits,2, -1);

// mull array ar acuarate value dekhate chaile array_slice function ar vitore true likhte hobe 
// $someFruits = array_slice($fruits,2, -1, true);

// print_r($someFruits);

$random = array("a" => 12, "b" => 13, "c" => 14, "d" => 15, "e" => 16, 5 => 18, "g" => 30);

// numeric key ke preserved korar jonno null o true parameter use korte hobe 
$randomData = array_slice($random, 3, null, true);
print_r($randomData);