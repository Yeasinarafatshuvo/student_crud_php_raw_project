<?php
require_once 'StudentRepository.php';
$studentRepo = new StudentRepository();
$students = $studentRepo->getAllStudents();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
    <h1>Students</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($students as $key => $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td>
                    <a href="edit_student.php?id=<?=$student['id']?>">Edit</a>
                    <a href="delete_student.php?id=<?=$student['id']?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="add_student.php">Add New Student</a>
</body>
</html>