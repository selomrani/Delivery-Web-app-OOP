<?php
namespace App\Service;
use App\Database\ConnectDb;
class LoginService{
    public static function checkEmailIfexist($email) {
        $db = new ConnectDb;
        $pdo = $db->connect();
        $query = "SELECT * FROM Users WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);
        $result = $stmt->rowCount();
        if($result > 0 ){
             echo "User found";
        }
        else{
             echo"User not found";
        }
    }
}