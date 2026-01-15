<?php
namespace Bib\database;

use PDO;
use PDOException;

class Db{
    private $pdo = null;
    private $host = 'localhost';
    private $dbname = 'BiblioTech';
    private $user = 'root';
    private $pass ='';
    
    public function connect()  {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        try{
            $this->pdo = new PDO($dsn,$this->user,$this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        }
        catch(PDOException $e){
            die("Error: " . $e->getMessage());
        }
    }
}