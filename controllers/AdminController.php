<?php
require_once 'models/Category.php';
require_once 'models/News.php';

class AdminController {
    public function news() {
        // Lấy danh sách bài viết và danh mục
        $news = News::getAll();
        $categories = Category::getAll();

        // Gọi view hiển thị danh sách bài viết
        include "views/admin/news/index.php";
    }

    public function addNews() {
        // Lấy danh sách danh mục
        $categories = Category::getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];

            News::create($title, $content, $image, $category_id);
            header("Location: index.php?controller=admin&action=news");
        }

        include "views/admin/news/add.php";
    }
    public function editNews() {
        $id = $_GET['id'];
        $categories = Category::getAll();
        $news = News::getById($id);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];
    
            News::update($id, $title, $content, $image, $category_id);
            header("Location: index.php?controller=admin&action=news");
        }
    
        include "views/admin/news/edit.php";
    }
    
    public function deleteNews() {
        $id = $_GET['id'];
        News::delete($id);
        header("Location: index.php?controller=admin&action=news");
    }
    
}
