<?php

class Book 
{

    public $id;
    public  $title;
    public  $author;
    public  $year;
    public  $status;
   

    public function __construct($id,$title,$author,$year,$status)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->status = $status;

    }

     public function isAvailable(){
        echo ' ';
    }

}
