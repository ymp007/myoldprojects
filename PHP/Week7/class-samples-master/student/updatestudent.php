<?php
require_once 'database.php';
require_once 'student.php';

$db= Database::getDb();
$mystu = new Student();
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $su = $mystu->getStudentById($db, $id);
}
if(isset($_POST['upt'])){
    $id = $_POST['sid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $program = $_POST['program'];
    $count = $mystu->updateStudent($db, $id,$name,$email,$program);
    if($count){
        header("Location: liststudents.php");

    }else {
        echo "problem updating";
    }
}

?>



<h1>Update student</h1>
<form action="updatestudent.php"  method="post">
    <input type="hidden" value="<?= $su->id; ?>" name="sid">
    name:<input type="text" name="name"  value="<?= $su->name; ?>"/><br />
    email:<input type="text" name="email" value="<?= $su->email; ?>" /><br />
    program:<input type="text" name="program" value="<?= $su->program; ?>" /><br />
    <input type="submit" name="upt" value="Update Student">
</form>
