<?php
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/News.php';
require_once __DIR__ . '/../models/User.php';

class AdminController {
    private $db;
    private $userModel;

    public function __construct($db = null) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $this->db = $db;
        $this->userModel = $db ? new User($this->db) : null;
    }

    // Phần quản lý người dùng
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            require_once __DIR__ . '/../views/admin/login.php';
            return;
        }
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $user = $this->userModel->getByUsername($username);

        if ($user && $password === $user['password']) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
        
            if ($user['role'] == 1) {
                $_SESSION['admin_logged_in'] = true;
                header('Location: /CNWEB.TH2-TLUNEWS/views/admin/dashboard.php');
            } else {
                $_SESSION['user_logged_in'] = true;
                header('Location: /CNWEB.TH2-TLUNEWS/views/home/index.php');
            }
            exit();
        } else {
            $error = 'Tên đăng nhập hoặc mật khẩu không đúng.';
        }

        require_once __DIR__ . '/../views/admin/login.php';
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
        require_once __DIR__ . '/../views/admin/dashboard.php';
    }

    // Phần quản lý bài viết
    public function news() {
        $newsModel = new News();
        $news = $newsModel->getAll();

        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        include __DIR__ . '/../views/admin/news/index.php';
    }

    public function addNews() {
        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];

            $newsModel = new News();
            $newsModel->create($title, $content, $image, $category_id);

            header("Location: dashboard.php?controller=admin&action=news");
            exit();
        }

        include __DIR__ . "/../views/admin/news/add.php";
    }

    public function editNews() {
        $id = $_GET['id'];

        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        $newsModel = new News();
        $news = $newsModel->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];

            $newsModel->update($id, $title, $content, $image, $category_id);

            header("Location: dashboard.php?controller=admin&action=news");
            exit();
        }

        include __DIR__ . "/../views/admin/news/edit.php";
    }

    public function deleteNews() {
        $id = $_GET['id'];

        $newsModel = new News();
        $newsModel->delete($id);

        header("Location: dashboard.php?controller=admin&action=news");
        exit();
    }
}
