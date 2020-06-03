<?php
/**
 * Created by PhpStorm.
 * User: anama
 * Date: 2019-10-10
 * Time: 11:38 AM
 */

class Student
{

    public function listStudent($db){

        $sql = "SELECT * FROM students";
        $pdostm = $db->prepare($sql);

        $pdostm->setFetchMode(PDO::FETCH_OBJ);
        $pdostm->execute();
        $students = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $students;
    }

    public function getStudentById($db, $id){
        $query = "SELECT * FROM students WHERE id= :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->execute();
        $s = $pdostm->fetch(PDO::FETCH_OBJ);
        return $s;
    }

    public function addStudent($db, $name, $email, $program){
        $sql = "INSERT INTO students (name, email, program)
            VALUES (:name, :email, :program)";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':name', $name, PDO::PARAM_STR);
        $pdostm->bindValue(':email', $email, PDO::PARAM_STR);
        $pdostm->bindValue(':program', $program, PDO::PARAM_STR);
        $count  = $pdostm->execute();
        return $count;
    }
    public function updateStudent($db, $id, $name, $email, $program){
        $sql = "UPDATE students 
                SET name = :name,
                email = :email,
                program = :program
                WHERE id = :id";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->bindValue(':name', $name, PDO::PARAM_STR);
        $pdostm->bindValue(':email', $email, PDO::PARAM_STR);
        $pdostm->bindValue(':program', $program, PDO::PARAM_STR);
        $count  = $pdostm->execute();
        return $count;
    }


    public function deleteStudent($db, $id){
        $query = "DELETE FROM students WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $count = $pdostm->execute();
        return $count;
    }

}