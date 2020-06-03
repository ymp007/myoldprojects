<?php
$dbname = "sampledb";
$user = "root";
$pass ="";


$dsn = "mysql:host=localhost;dbname=$dbname";

$dbcon = new PDO($dsn, $user, $pass);
$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "SELECT * FROM students";

$pdostm = $dbcon->prepare($sql);
$pdostm->setFetchMode(PDO::FETCH_OBJ);
$pdostm->execute();

//print_r($pdostm->fetchAll(PDO::FETCH_OBJ));

foreach($pdostm as $student){
    echo "<li>" . $student->name . "</li>";
 }

//echo "connected db";

