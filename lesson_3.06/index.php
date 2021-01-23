<?php 
$student = array(
    'fname' => 'Jamal',
    'lname' => 'Uddin',
    'age' => '23',
    'class' => 15,
    'section' => 'B'
);

// print_r($student);
echo $student['fname']. " " .$student['lname']. "\n";
printf("%s %s \n", $student['fname'], $student['lname']);

$serialize = serialize($student);
echo $serialize;
echo "\n";

$newstudent = unserialize($serialize);
print_r($newstudent);

$jsondata = json_encode($student);
echo $jsondata;
echo "\n";

$student2 = json_decode($jsondata, true);
print_r($student2);