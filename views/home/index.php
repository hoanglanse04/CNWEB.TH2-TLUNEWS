<?php
include '../../controllers/NewsController.php';

// Xác định controller và action từ URL

$controller = new NewsController();

// Lấy tham số `action` từ URL
$action = isset($_GET['action']) ? $_GET['action'] : 'news';

// Gọi phương thức tương ứng với action
switch ($action) {
    case 'news': // Hiển thị danh sách bài viết
        $controller->news();
        break;
    case 'detail': // Hiển thị danh sách bài viết
        $id = $_GET['id'] ?? 0;
        $newsController->detail((int)$id);
        break;
    case 'search': // Hiển thị danh sách bài viết
        $keyword = $_GET['keyword'] ?? '';
        $newsController->search($keyword);
        break;

    default:
        echo "Hành động không hợp lệ!";
}
