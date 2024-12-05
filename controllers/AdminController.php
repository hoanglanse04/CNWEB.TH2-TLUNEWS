<?php
require_once './models/User.php';

class AdminController {
    private $db;
    private $userModel;

    public function __construct($db) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

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
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] == 1) {
                $_SESSION['admin_logged_in'] = true;
                header('Location: index.php?action=dashboard');
            } else {
                $_SESSION['user_logged_in'] = true;
                header('Location:index.php?action=home');
            }
            exit();
        } else {
            $error = 'Tên đăng nhập hoặc mật khẩu không đúng.';
        }

        require_once './views/admin/login.php';
    }

    public function logout() {
        session_destroy();
        header('Location: index.php?action=login');
        exit();
    }

    public function dashboard() {
        if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
            header('Location: index.php?action=login');
            exit();
        }
        require_once './views/admin/dashboard.php';
    }
}