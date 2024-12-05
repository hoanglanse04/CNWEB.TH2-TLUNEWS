<?php
require_once './models/User.php';

class AdminController {
    private $db;
    private $userModel;

    public function __construct($db) {
        $this->db = $db;
        $this->userModel = new User($this->db);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            require_once './views/admin/login.php';
            return;
        }

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $user = $this->userModel->getByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                session_start();
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_username'] = $user['username'];
                header('Location: index.php?action=dashboard');
                exit();
            } else {
                $error = 'Bạn không có quyền truy cập.';
            }
        } else {
            $error = 'Tên đăng nhập hoặc mật khẩu không đúng.';
        }
        require_once './views/admin/login.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
        exit();
    }

    public function dashboard() {
        session_start();
        if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
            header('Location: index.php?action=login');
            exit();
        }
        require_once './views/admin/dashboard.php';
    }
}