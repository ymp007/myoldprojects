<?php
$name="";
$id="";
$email="";
$program="";
$idarray=[];
require 'Database.php';
$query = "SELECT id FROM students";
$pdostm = $dbconn->prepare($query);
$pdostm->setFetchMode(PDO::FETCH_OBJ);
$pdostm->execute();

  foreach ($pdostm as $student) {
  array_push($idarray,$student->id);
}
if(isset($_POST['add'])){
if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['program'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $program=$_POST['program'];
  if($name==""||$email==""||$program==""){
    echo "Please Enter Valid Data";
  }else{
  $query = "insert into students (name,email,program) values ('".$name."','".$email."','".$program."')";
  $pdostm = $dbconn->prepare($query);
  $count=$pdostm->execute();
  $name="";
  $id="";
  $email="";
  $program="";
}
}
}else if(isset($_POST['list'])){
  $query = "SELECT * FROM students";
  $pdostm = $dbconn->prepare($query);
  $pdostm->setFetchMode(PDO::FETCH_OBJ);
  $pdostm->execute();
  $output = "<table border='1' style='border-collapse:collapse'>";

   foreach ($pdostm as $student){
        $output = $output. "<tr>";
       $output = $output."<td>".$student->name."</td>";
       $output = $output."<td>".$student->email."</td>";
       $output = $output."<td>".$student->program."</td>";
       $output = $output."</tr>";
     }

   $output = $output."</table>";
}elseif (isset($_POST['search'])) {
  if(isset($_POST['id'])){

  $id = $_POST['id'];
  if($id!=""){
  $query = "SELECT * FROM students WHERE id = $id";
  $pdostm = $dbconn->prepare($query);
  $pdostm->setFetchMode(PDO::FETCH_OBJ);
  $pdostm->execute();
  foreach ($pdostm as $student){
       $name = $student->name;
       $id = $student->id;
       $email = $student->email;
       $program = $student->program;
    }
  }
  }
}elseif (isset($_POST['delete'])) {
  if(isset($_POST['id'])){

  $id = $_POST['id'];
  if($id!=""){
  $query = "DELETE FROM students WHERE id = $id";
  $pdostm = $dbconn->prepare($query);
  $pdostm->setFetchMode(PDO::FETCH_OBJ);
  $pdostm->execute();
}else {


}
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>AddStudent</title>
   </head>
   <body>
     <form method="post">
       <label>ID: </label><input type="text" name="id"  value="<?php if (isset($id)) {
         echo $id;
       }  ?>"/><br>
       <label>Name: </label><input type="text" name="name" value="<?php if (isset($name)) {
         echo $name;
       }  ?>"/><br>
       <label>Email: </label><input type="email" name="email" value="<?php if (isset($email)) {
         echo $email;
       }  ?>"/><br>
       <label>Program: </label><input type="text" name="program" value="<?php if (isset($program)) {
         echo $program;
       }  ?>"/><br>
       <input type="submit" name="add" value="Add"/>
       <input type="submit" name="search" value="Search"/>
       <input type="submit" name="update" value="update"/>
       <input type="submit" name="delete" value="Delete"/><br>
        <input type="submit" name="list" value="List of Student"/>
     </form><br>
     <br>

     <?php
     if(isset($output)){
     echo $output;
   }?>
   </body>
 </html>
