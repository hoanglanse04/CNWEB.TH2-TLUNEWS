<?php
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
