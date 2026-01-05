<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Service\LoginService;

$email = $_POST['email'];
$password = $_POST['password'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (LoginService::checkEmailIfExist($email)) {
        $user_data = LoginService::fetchUserByemail($email);
        if (password_verify($password, $user_data['password'])) {
            session_start();
            foreach ($user_data as $key => $value) {
                $_SESSION[$key] = $value;
            }
            switch ($_SESSION['role']) {
                case "client":
                    header("Location: ../php/ClientHome.php");
                    exit();
                case "driver":
                    header("Location: ../php/DriverHome.php");
                    exit();
                case "admin":
                    header("Location: ../php/admin.php");
                    exit();
            }
        } else {
            echo "incorrect password";
        }
    };
}
