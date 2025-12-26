<?php
class Borrow {
    public $id;
    public  $readerId;
    public  $bookId;
    public  $borrowDate;
    public  $returnDate;
   

    public function __construct($id,$readerId,$bookId,$borrowDate,$returnDate)
    {
        $this->id = $id;
        $this->readerId = $readerId;
        $this->bookId = $bookId;
        $this->borrowDate = $borrowDate;
        $this->returnDate = $returnDate;
    }
    
     public function isActive(){
        
    }
    public function close(){
        
    }
}