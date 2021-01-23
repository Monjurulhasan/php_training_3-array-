<?php
$person = array('fname' => 'Hello', 'lname' => 'World');

print_r($person);

unset($person['lname']); // Associative array ar key remove korar jonno unset use korte hoy

print_r($person);