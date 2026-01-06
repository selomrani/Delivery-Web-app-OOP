<?php

namespace App\Service;

use App\Database\ConnectDb;
use PDO;

class LoginService
{
    public static function checkEmailIfExist($email)
    {
        $pdo = ConnectDb::connect();
        $query = "SELECT id FROM Users WHERE email = :email";
        $stmt = $pdo->prepare($query);

        $stmt->execute(['email' => $email]);
        return $stmt->rowCount() > 0;
    }
    public static function fetchUserByemail($email)
    {
        $pdo = ConnectDb::connect();
        $query = "SELECT * FROM Users WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['email' => $email]);
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user_data;
    }
}
