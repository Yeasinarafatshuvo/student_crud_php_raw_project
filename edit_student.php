<?php
require_once 'StudentRepository.php';

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $studentRepo  = new StudentRepository();
    $student = $studentRepo->getStudentById($id);
}elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $studentRepo  = new StudentRepository();
    $studentRepo->udpateStudent(new Student($name, $email, $id));
    header("Location: index.php");
    exit;
}else{
    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="edit_student.php" method="POST">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?= $student['name'] ?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?= $student['email'] ?>"><br><br>
        <button type="submit">Update Student</button>
    </form>
</body>
</html>