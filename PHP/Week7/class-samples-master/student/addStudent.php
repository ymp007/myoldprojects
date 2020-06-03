<?php
require_once 'database.php';
require_once 'Student.php';


if(isset($_POST['add'])){
    //get form values and assign to local varaibles
    $name = $_POST['name'];
    $email = $_POST['email'];
    $program = $_POST['program'];


    $s = new Student();

    $count = $s->addStudent(Database::getDb(), $name, $email, $program);

    header("Location: liststudents.php");

    //echo "inserted " . $count;
}
?>

<h1>Add student</h1>
<form action="addStudent.php"  method="post">
    name:<input type="text" name="name" /><br />
    email:<input type="text" name="email" /><br />
    program:<input type="text" name="program" /><br />
    <input type="submit" name="add" value="Add Student">
</form>
