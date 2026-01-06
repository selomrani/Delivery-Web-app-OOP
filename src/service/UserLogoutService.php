<?php

namespace App\Service;

require_once __DIR__ . '/../../vendor/autoload.php';
class UserLogoutService
{
    public static function logout()
    {
        session_destroy();
        header("Location: ../../public/php/login.php");
        exit();
    }
}
