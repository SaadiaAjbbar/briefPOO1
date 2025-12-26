<?php
require 'config/bd.php';
class db
{
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $charset;
    private $pdo;

    public function __construct()
    {
        $config = require 'config/bd.php';

        $this->host     = $config['host'];
        $this->dbname   = $config['dbname'];
        $this->user     = $config['user'];
        $this->password = $config['password'];
        $this->charset  = $config['charset'];

        $this->connect();
    }

    private function connect()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";

            $this->pdo = new PDO($dsn, $this->user, $this->password);

            // Afficher les erreurs PDO
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function getconnexion()
    {
        return $this->pdo;
    }
    public function getBooks(){
         $requete = "SELECT * FROM books";
        $stmt = $this->pdo->prepare($requete);
        $stmt->execute();
        $listBooks=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $books=[];
        foreach($listBooks as $book){
            $B=new Book($book['id'],$book['title'],$book['author'],$book['year'],$book['status']);
            $books[] = $B;
        }
        return $books;
    }

    public function getBorrows(){
         $requete = "SELECT bk.title,u.firstName,br.* FROM books bk JOIN borrows br ON bk.id=br.bookId JOIN users u ON u.id=br.readerId WHERE u.role='reader' and bk.status='borrowed'";
        $stmt = $this->pdo->prepare($requete);
        $stmt->execute();
        $listBorrows=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $borrows=[];
        foreach($listBorrows as $borrow){
            $Br=new Borrow($borrow['id'],$borrow['readerId'],$borrow['bookId'],$borrow['borrowDate'],$borrow['returnDate']);
            $borrows[] = $Br;
        }
        return $borrows;
    }

   public function getReaders(){
        $requete = "SELECT * FROM users where role = 'reader'";
        $stmt = $this->pdo->prepare($requete);
        $stmt->execute();
        $listReader=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $readers=[];
        foreach($listReader as $reader){
            $Br=new Reader($reader['id'],$reader['firstName'],$reader['lastName'],$reader['email'],$reader['password']);
            $readers[] = $Br;
        }
        return $readers;
    } 

}