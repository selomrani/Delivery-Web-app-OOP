<?php
session_start();
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Service\UserLogoutService;
if(isset($_POST['c_logout'])) UserLogoutService::logout();
