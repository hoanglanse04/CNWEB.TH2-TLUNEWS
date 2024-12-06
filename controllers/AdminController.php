<?php
<<<<<<< HEAD
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ .'/../models/News.php';

class AdminController {
    // Hiển thị danh sách bài viết
    public function __construct()
    {
    }
    public function news() {
        // Lấy danh sách bài viết và danh mục
        $newsModel = new News();  // Tạo đối tượng News để gọi phương thức
        $news = $newsModel->getAll();  // Lấy danh sách bài viết
        
        $categoryModel = new Category();  // Tạo đối tượng Category để gọi phương thức
        $categories = $categoryModel->getAll();  // Lấy tất cả danh mục
        // Gọi view hiển thị danh sách bài viết
        include __DIR__ . '/../views/admin/news/index.php';
    }
    
    // Thêm bài viết
    public function addNews() {
        // Lấy danh sách danh mục
        $categoryModel = new Category();  // Tạo đối tượng Category
        $categories = $categoryModel->getAll();  // Lấy tất cả danh mục

        // Kiểm tra nếu form đã được submit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];

            // Tạo bài viết mới
            $newsModel = new News();  // Tạo đối tượng News
            $newsModel->create($title, $content, $image, $category_id);  // Lưu bài viết vào CSDL

            // Chuyển hướng về trang danh sách bài viết
            header("Location: dashboard.php?controller=admin&action=news");
            exit();
        }

        // Hiển thị view thêm bài viết
        include __DIR__ . "/../views/admin/news/add.php";
    }

    // Sửa bài viết
    public function editNews() {
        $id = $_GET['id'];
        
        // Lấy danh mục và bài viết cần sửa
        $categoryModel = new Category();  // Tạo đối tượng Category
        $categories = $categoryModel->getAll();  // Lấy tất cả danh mục
        
        $newsModel = new News();  // Tạo đối tượng News
        $news = $newsModel->getById($id);  // Lấy bài viết theo id

        // Kiểm tra nếu form đã được submit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];

            // Cập nhật bài viết
            $newsModel->update($id, $title, $content, $image, $category_id);

            // Chuyển hướng về trang danh sách bài viết
            header("Location: dashboard.php?controller=admin&action=news");
            exit();
        }

        // Hiển thị view sửa bài viết
        include __DIR__ . "/../views/admin/news/edit.php";
    }
    
    // Xóa bài viết
    public function deleteNews() {
        $id = $_GET['id'];
        
        // Xóa bài viết theo id
        $newsModel = new News();  // Tạo đối tượng News
        $newsModel->delete($id);  // Xóa bài viết trong CSDL
        
        // Chuyển hướng về trang danh sách bài viết
        header("Location: dashboard.php?controller=admin&action=news");
        exit();
    }
}
?>
=======
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
>>>>>>> eb66b971924f77e826dad48ba0675a7374e43988
