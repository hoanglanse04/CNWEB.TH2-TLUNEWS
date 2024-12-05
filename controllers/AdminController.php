<?php  
session_start();
require_once '../models/User.php';

$host = 'localhost';
$dbname = 'testdb';
$username = 'root';
$password = '';

try{
    $conn =  new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("Kết nối thất bại: " . $e->getMessage());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    $userModel = new User($conn);
    $user = $userModel->getByUsername($inputUsername);
    if ($user && password_verify($inputPassword, $user['password'])) {

        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role']
        ];

        if ($user['role'] == 1) {
            header('Location: /admin/dashboard.php');
        } else {
            header('Location: /home/index.php');
        }
        exit;
    }

    $_SESSION['error'] = 'Tên đăng nhập hoặc mật khẩu không đúng.';
    header('Location: /login.php');
    exit;
}