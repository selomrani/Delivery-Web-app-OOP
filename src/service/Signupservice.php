<?php
namespace App\Service;

use App\Database\ConnectDb;
use Web\Actions\Clientdata; 

class Signupservice {
    public static function RegisterNewClient() {
        $db = new ConnectDb();
        $pdo = $db->connect();
        
        $clientObj = new Clientdata();
        $userData = $clientObj->getData();

        $query = "INSERT INTO Users (firstname, lastname, phone, email, role, password) 
                  VALUES (:firstname, :lastname, :phone, :email, :role, :password)";
                  
        $stmt = $pdo->prepare($query);
        $stmt->execute($userData);
    }
}