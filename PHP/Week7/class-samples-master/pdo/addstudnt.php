<?php
require_once 'database.php';

if(isset($_POST['addstu'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $program = $_POST['program'];


    $db = Database::getDb();
    $sql = "INSERT INTO students (name, email, program) 
              VALUES (:name, :email, :program) ";
    $pst = $db->prepare($sql);

    $pst->bindParam(':name', $name);
    $pst->bindParam(':email', $email);
    $pst->bindParam(':program', $program);

    $count = $pst->execute();


    if($count){
        echo "Added student sucessfully";
    } else {
        echo "problem adding a student";
    }

}
?>


<form action="" method="post">
    Name: <input type="text" name="name" /><br/>
    Email: <input type="text" name="email" /><br />
    Program: <input type="text" name="program" /><br />
    <input type="submit" name="addstu" value="Add Student">
</form>