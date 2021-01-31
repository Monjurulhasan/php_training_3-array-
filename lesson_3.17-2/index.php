<?php 
$color = array(122, 233, 65, 34);
// $red = $color[0];
// $green = $color[1];
// $blue = $color[2];
// $yellow = $color[3];
// echo $green;

list($red, $green, $blue, $yellow) = $color;
echo $red;
echo "\n";

$student = array('First Name', 'Last Name', 'Email', 'Mobile Number');
list($firstName, $lastName, $email, $mobileNumber) = $student;
// echo $lastName;
print_r($student);
echo $firstName;