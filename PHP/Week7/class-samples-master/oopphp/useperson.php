<?php
require_once 'person.php';
require_once 'student.php';



$p = new Student('nithya',21, '111111');
//$p->setName('Marie');
//unset($p);
//p->setGender(Person::FEMALE);

echo $p->displayStudent();
//echo "hello";
//echo $p->displayPerson();