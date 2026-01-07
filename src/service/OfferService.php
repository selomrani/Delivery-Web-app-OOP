<?php
namespace App\Service;
use App\Database\ConnectDb;
use Web\Actions\Data;

class OfferService{
    public static function submitOffer(){
        $pdo = ConnectDb::connect();
        $data = new Data();
        $offer_infos = $data->GetOfferData();
        $offer_infos['order_id'] = 17;
        $query = "INSERT INTO offers (price,note,estimated_time,order_id) VALUES (:price,:note,:estimated_time,:order_id)";
        $stmt = $pdo->prepare($query);
        $stmt->execute($offer_infos);
    }
}