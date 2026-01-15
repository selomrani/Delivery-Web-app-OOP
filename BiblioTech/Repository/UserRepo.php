<?php

use Bib\database\Db;

class UserRepo{
    private $pdo;
    public function __construct($pdo)
    {
        $pdo = new Db;
        $this->pdo = $pdo->connect();
    }
    public function addMember($data){
        $query = "INSERT INTO users (firstname,lastname,email,role) VALUES (:firstname,:lastname,:email,:role)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);
    }
    public function modifyMemberInfos($newData){
        $query = "UPDATE TABLE users SET firstname = :Newfirstname , lastname = :Newlastname , role = :Newrole , email = :Newemail WHERE id : ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($newData);
    }
    public function deleteMemberById($delete_id){
        $query = "DELETE * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$delete_id]);
    }
    public function FetchAllUsersForDisplay():array{
        $query = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS,"User");
        $result = $stmt->fetch();
        return $result;
    }
}