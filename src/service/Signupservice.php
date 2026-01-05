<?php
namespace App\Service;

use App\Database\ConnectDb;
use Web\Actions\Clientdata;
use Web\Actions\Driverdata; 

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

    public static function RegisterNewDriver() {
        $db = new ConnectDb();
        $pdo = $db->connect();
        $driverObj = new Driverdata();
        $driverdata = $driverObj->getData();
        $vehicule_data = $driverObj->getvehiculedata();
        $queryDriver = "INSERT INTO Users (firstname,lastname,phone,email,role,password) VALUES (:firstname,:lastname,:phone,:email,:role,:password)";
        $stmt = $pdo->prepare($queryDriver);
        $stmt->execute($driverdata);
        $Driver_id = $pdo->lastInsertId();
        $vehiculequery = "INSERT INTO vehicules (type,model,user_id) VALUES (:type,:model,:user_id)";
        $stmt = $pdo->prepare($vehiculequery);
        $vehicule_data['user_id'] = $Driver_id;
        $stmt->execute($vehicule_data);
    } 
}