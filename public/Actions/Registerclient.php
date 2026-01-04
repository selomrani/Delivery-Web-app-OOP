<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Service\Signupservice;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        Signupservice::RegisterNewClient();
        header("Location: ../php/login.php");
        exit();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: ../../index.php");
    exit();
}