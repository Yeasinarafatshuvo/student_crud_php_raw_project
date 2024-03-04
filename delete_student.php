<?php 
require_once 'StudentRepository.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $studentRepo = new StudentRepository();
    $studentRepo->deleteStudents($id);

    header("Location: index.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>