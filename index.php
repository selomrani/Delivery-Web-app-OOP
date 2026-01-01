<?php
$host = 'db';
$db   = 'SwiftDropDB';
$user = 'root';
$pass = '77';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "<h1>Success! Connected to SwiftDropDB using PDO.</h1>";
} catch (\PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>