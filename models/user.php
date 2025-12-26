<?php
abstract class User {
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;

    public function __construct($id,$firstName,$lastName,$email,$password)
    {
        $this->id=$id;
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->email=$email;
        $this->password=$password;
        
    }

    public function login(){

    }
    public function logout(){
        
    }
}


?>