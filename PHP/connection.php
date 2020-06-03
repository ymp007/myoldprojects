<?php
$dbname = "mydb";
$user = "root";
$pass = "";


$dsn = "mysql:host=localhost;dbname=$dbname";

$dbconn = new PDO($dsn,$user,$pass);
$dbconn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$query = "SELECT * FROM students";

$pdostm = $dbconn->prepare($query);
$pdostm->setFetchMode(PDO::FETCH_OBJ);
$pdostm->execute();

foreach ($pdostm as $student) {
  echo "<li>".$student->name."</li>";
}
/*echo "<table border='1' style='border-collapse:collapse'>";
 foreach ($res as $key => $value) {
   echo "<tr>";
   foreach ($value as $key1 => $value1) {
     echo "<td>".$value1."</td>";
   }
   echo "</tr>";
 }
 echo "</table>";*/
//echo "Connected to db";
 ?>
