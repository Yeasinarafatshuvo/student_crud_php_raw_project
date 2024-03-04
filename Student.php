<?php
class Student{
    public $id;
    public $name;
    public $email;

    public function __construct($name, $email, $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}


?>