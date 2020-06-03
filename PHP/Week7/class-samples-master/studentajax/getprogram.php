<?php
require_once "database.php";
require_once "student.php";

$db = Database::getDb();
$s = new Student();
$programs = $s->getPrograms($db);
//var_dump($programs);

$jsonpro = json_encode($programs);
//
////var_dump($jsonpro);
header('Content-Type: application/json');
echo $jsonpro;