<?php
class ConnectDb
{
    private $host = 'db';
    private $user = 'root';
    private $pass = '77';
    private $dbname = 'SwiftDropDB';

    private $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            echo "success";
        } catch (PDOException $e) {

            throw new PDOException($e->getMessage());
        }
    }
    public function connect()
    {
        return $this->pdo;
    }
}

$database = new ConnectDb ;
$database->connect();
