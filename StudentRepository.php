<?php
require_once 'config.php';
require_once 'Student.php';
class StudentRepository extends Database{
    
    //get all students 
    public function getAllStudents()
    {
        $all_students_satement = $this->pdo->query("SELECT * FROM students");
        return $all_students_satement->fetchAll(PDO::FETCH_ASSOC);
    }

    //add students 
    public function addStudents(Student $student)
    {
        $add_students_statement = $this->pdo->prepare("INSERT INTO students (name, email) VALUES (?, ?)");
        $add_students_statement->execute([$student->name, $student->email]);
    }

    //delete students
    public function deleteStudents($id){
    
        $deleteStudentsStatements = $this->pdo->prepare("DELETE FROM students WHERE id = ?");
        $deleteStudentsStatements->execute([$id]);
    }

    //get single studnets
    public function getStudentById($id)
    {
        $getSingleStudentStatement = $this->pdo->prepare("SELECT * FROM students WHERE id = ?");
        $getSingleStudentStatement->execute([$id]);
        return $getSingleStudentStatement->fetch(PDO::FETCH_ASSOC);
    }

    //update students
    public function udpateStudent(Student $student){
        $students_update_statements = $this->pdo->prepare("UPDATE students SET name = ?, email = ? WHERE id = ?");
        $students_update_statements->execute([$student->name, $student->email, $student->id]);
    }
}


?>