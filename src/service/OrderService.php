<?php
namespace App\Service;
use App\Database\ConnectDb;
use Web\Actions\Data;
use PDO;    
class OrderService
{
    public static function CreateOrder()
    {
        $pdo = ConnectDb::connect();
        $orderobj = new Data();
        $orderinfos = $orderobj->GetOrderData();
        $query = "INSERT INTO orders (price,weight,description,user_id,title) VALUES (:price,:weight,:description,:user_id,:title)";
        $stmt = $pdo->prepare($query);
        $stmt->execute($orderinfos);
        $adressinfos = $orderobj->GetAddressData();
        $order_id = $pdo->lastInsertId();
        $adressinfos['order_id'] = $order_id;
        $AddressQuery = "INSERT INTO addresses (country,city,zipcode,house_number,street_name,order_id) VALUES (:country,:city,:zipcode,:house_number,:street_name,:order_id)";
        $stmt = $pdo->prepare($AddressQuery);
        $stmt->execute($adressinfos);
    }
public static function fetchALLorders(){
        $pdo = ConnectDb::connect();
        $query = "SELECT 
                    orders.*, 
                    Users.firstname, 
                    Users.lastname 
                  FROM orders 
                  LEFT JOIN Users ON orders.user_id = Users.id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public static function ordercount($status){
        $pdo = ConnectDb::connect();
        $query = "SELECT * FROM orders WHERE status = :status";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['status' => $status]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $count = count($result);
        return $count;
    }
}