<?php
require_once __DIR__ . '/User.php';
class Reader extends User{
    
    public function __construct($id,$firstName,$lastName,$email,$password)
    {
       parent::__construct($id, $firstName,$lastName,$email,$password); 
    }

    public function borrowBook($bookId){

    }
    public function returnBook($borrowId){
        
    }
    
}
