<?php
namespace App\Service;

use App\Database\ConnectDb;
class LoginService {
    public static function checkEmailIfExist($email) {
        $db = new ConnectDb();
        $pdo = $db->connect();
        $query = "SELECT id FROM Users WHERE email = :email";
        $stmt = $pdo->prepare($query);

        $stmt->execute(['email' => $email]);
        return $stmt->rowCount() > 0;
    }
    public static function VerifyPassword
}