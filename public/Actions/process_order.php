<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Service\OrderService;
use Web\Actions\OrderData;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $orderinfos = new OrderData();
        OrderService::CreateOrder($orderinfos);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}