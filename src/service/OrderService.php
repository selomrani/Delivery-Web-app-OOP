<?php
namespace App\Service;
use App\Database\ConnectDb;
use Web\Actions\Data;

class OrderService
{
    public static function CreateOrder()
    {
        $pdo = ConnectDb::connect();
        $orderobj = new Data();
        $orderinfos = $orderobj->GetOrderData();
        $query = "INSERT INTO orders (price,weight,description,user_id) VALUES (:price,:weight,:description,:user_id)";
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
        $query = "SELECT * FROM orders";
        $stmt = $pdo->prepare()
    }
}
