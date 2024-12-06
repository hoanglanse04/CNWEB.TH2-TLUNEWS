<?php
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/News.php';
require_once __DIR__ . '/../models/News.php';

class NewsController {
    public function index() {
        $newsModel = new News();
        $news = $newsModel->getAll();

        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        include __DIR__ . '/../views/home/index.php';
    }
    
    public function news() {
        $newsModel = new News();
        $news = $newsModel->getAll();

        $categoryModel = new Category();
        $categories = $categoryModel->getAll();

        include __DIR__ . '/../views/home/home.php';
    }

    public function detail($id) {
    
        $newsModel = new News();
        $news = $newsModel->getById($id);
    
        if ($news) {
            // Gọi view chi tiết tin tức
            require_once __DIR__ . '/../views/news/detail.php';
        } else {
            echo "<p>Không tìm thấy tin tức với ID: $id</p>";
        }
    }
    
    public function search($keyword = '') {

        $newsModel = new News();
        $newsList = $newsModel->searchNews($keyword);

        // Hiển thị kết quả tìm kiếm
        require_once __DIR__ . '/../views/home/index.php';
    }
}

