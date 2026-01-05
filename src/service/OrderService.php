<?php
namespace App\Service;
use App\Database\ConnectDb;
require_once './vendor/autoload.php';
class OrderService{
    public static function CreateOrder($data){
        $db = new ConnectDb();
        $pdo = $db->connect();
        $query = "INSERT INTO orders (weight,description,user_id) VALUES (:weight,:description,:user_id)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$data]);
    }
}