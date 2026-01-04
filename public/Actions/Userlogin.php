<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Service\LoginService;
$email = $_POST['email'];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo LoginService::checkEmailIfexist($email);
}