<?php
require_once 'database.php';
require_once 'student.php';

$id = $_POST['id'];
$db = Database::getDb();
$s =  new Student();
$count = $s->deleteStudent($db, $id);

if($count){
    header("Location: liststudents.php");

}else {
    echo "problem deleting";
}


