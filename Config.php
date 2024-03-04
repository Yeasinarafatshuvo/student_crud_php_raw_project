<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'student_crud';
    private $username = 'root';
    private $password = '';
    protected $pdo;

    public function __construct()
    {
        try{
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        }catch(PDOException $e){
            die("Error: Could not connect. " . $e->getMessage());
        }
    }



}



?>