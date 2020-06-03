<?php
require_once 'database.php';
require_once 'Student.php';

$s = new Student();
$students = $s->listStudent(Database::getDb());


?>

<h1>List of students</h1>
<ul>
    <?php foreach ($students as $s){
        echo "<li>" . $s->name .
            " <form action='deletestudent.php' method='post'>
            <input type='hidden' name='id' value='$s->id' />
            <input type='submit' name='delete' value='Delete'>
            </form> 
            <form action='updatestudent.php' method='post'>
            <input type='hidden' name='id' value='$s->id' />
            <input type='submit' name='update' value='Update'>
            </form>
            </li>";
    } ?>
</ul>

<a href="addStudent.php">Add student</a>
