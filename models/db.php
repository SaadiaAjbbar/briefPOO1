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
}