<?php
namespace App\Service;
use App\Database\ConnectDb;
use Web\Actions\Data;
use Web\Actions\OrderData;
class OrderService
{
    public static function CreateOrder($orderinfos)
    {
        $pdo = ConnectDb::connect();
        $orderobj = new Data();
        $orderinfos = $orderobj->GetOrderData();
        $query = "INSERT INTO orders (price,weight,description,user_id) VALUES (:price,:weight,:description,:user_id)";
        $stmt = $pdo->prepare($query);
        $stmt->execute($orderinfos);
    }
}
