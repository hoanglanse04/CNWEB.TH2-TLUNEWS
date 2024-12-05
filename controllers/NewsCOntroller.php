<?php
class NewsController {
    public function index() {
        require_once __DIR__ . '/../models/News.php';

        $newsModel = new News();
        $newsList = $newsModel->getAllNews();

        // Gọi view danh sách tin tức
        require_once __DIR__ . '/../views/home/index.php';
    }

    public function detail($id) {
        require_once __DIR__ . '/../models/News.php';
    
        $newsModel = new News();
        $news = $newsModel->getNewsById($id);
    
        if ($news) {
            // Gọi view chi tiết tin tức
            require_once __DIR__ . '/../views/news/detail.php';
        } else {
            echo "<p>Không tìm thấy tin tức với ID: $id</p>";
        }
    }
    

    public function search($keyword = '') {
        require_once __DIR__ . '/../models/News.php';

        $newsModel = new News();
        $newsList = $newsModel->searchNews($keyword);

        // Hiển thị kết quả tìm kiếm
        require_once __DIR__ . '/../views/home/index.php';
    }
}

