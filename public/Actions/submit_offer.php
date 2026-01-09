<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Service\OfferService;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        OfferService::submitOffer();
        header("Location: ../php/DriverHome.php");
        exit();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}