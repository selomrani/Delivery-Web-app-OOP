<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Service\OrderService;
use Web\Actions\Data;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $orderinfos = new Data();
        OrderService::CreateOrder();
        header("Location: ../php/ClientHome.php");
        exit();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}