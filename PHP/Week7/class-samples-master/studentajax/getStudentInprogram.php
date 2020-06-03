<?php

require_once "database.php";
require_once "student.php";

$db = Database::getDb();
$s = new Student();
$program = $_GET['prog'];

$students = $s->getStudentsInProgram($db, $program);
$jsonpro = json_encode($students);

//var_dump($jsonpro);
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo $jsonpro;