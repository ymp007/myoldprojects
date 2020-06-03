<?php
require_once 'Person.php';
require_once 'Student.php';
$p = new Student("YMP",23,1234569);
//echo $p->getName();
echo $p->displayStudent();
?>