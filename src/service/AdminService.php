<?php
namespace Src\Service\AdminService;
require './vendor/autoload.php';
use App\Database\ConnectDb;
use PDO;
class AdminService{
   public static function fetchUsers($role){
    $db = new ConnectDb();
    $pdo = $db->connect();
    $query = "SELECT * FROM Users WHERE role = :role";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$role]);
    $result = $stmt->fetch(PDO::FETCH_CLASS);
    return $result;
   } 
}