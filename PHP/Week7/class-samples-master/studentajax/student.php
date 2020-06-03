<?php
class Student
{
    public function getAllStudents($db){


        $sql = "SELECT * FROM students";
        $pdostm = $db->prepare($sql);
        //specify fetch method
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getPrograms($db){
        $query = "SELECT DISTINCT program FROM students";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getStudentsInProgram($db, $program){
        $query = "SELECT * FROM students WHERE program= :program";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':program', $program, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
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