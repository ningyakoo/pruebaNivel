<?php

namespace App\Classes;

class User{

    private $id;
    private $email;

    public function __construct($id, $email)
    {   
        $this->setId($id);
        $this->setEmail($email);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}

?>