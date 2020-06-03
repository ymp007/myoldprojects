<?php

$student = ['name' => 'Marie', 'email' => 'marie@humber.ca', 'program' => 'Web development'];

echo $student['email'];

foreach($student as $key => $value){
    echo $key . " : " . $value . "<br />";
}