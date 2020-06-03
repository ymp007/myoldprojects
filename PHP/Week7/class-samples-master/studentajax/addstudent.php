<?php
require_once "database.php";
require_once "student.php";

$name = $_POST['name'];
$email = $_POST['email'];
$program = $_POST['program'];

$db = Database::getDb();
$s = new Student();
$result = $s->addStudent($db,$name, $email, $program);

if($result){
    echo "Added product";
}
else{
    echo "problem Adding product";
}
