<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Service\OrderService;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        OrderService::CreateOrder($orderinfos);
        header("Location: ../php/ClientHome.php");
        exit();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}