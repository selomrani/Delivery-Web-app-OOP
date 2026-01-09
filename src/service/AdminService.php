<?php
namespace App\Service;
// require './vendor/autoload.php';
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
   public static function fetchALLusers(){
      $pdo = ConnectDb::connect();
      $query = "SELECT * FROM users";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $users;
   }
       public static function userscount($role){
        $pdo = ConnectDb::connect();
        $query = "SELECT * FROM Users WHERE role = :role";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['role' => $role]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $count = count($result);
        return $count;
    }
    public static function fetchAllordersCount(): int{
        $pdo = ConnectDb::connect();
        $query = "SELECT * FROM orders";
        $stmt =$pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        $count = count($result);
        return $count;
    }
}
