<?php

use Bib\database\Db;

class Libraryrepo{
    private $pdo;
    public function __construct($pdo)
    {
        $pdo = new Db;
        $this->pdo = $pdo->connect();
    }
    public function adBbook($data){
        $query = "INSERT INTO books (name,description,release_date,";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);
    }
    public function modifyBook($newData){
        $query = "UPDATE TABLE books SET name = :newname , description= :newdescription ,release_date = :new_release_date WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($newData);
    }
    public function deleteBook($delete_id){
        $query = "DELETE * FROM books WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$delete_id]);
    }
    public function fetchAllBooksForDisplay(): array{
        $query = "SELECT * FROM books";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS,"Book");
        $result= $stmt->fetch();
        return $result;
    }
}