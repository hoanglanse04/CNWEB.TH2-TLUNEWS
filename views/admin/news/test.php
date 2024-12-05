<?php
include '../../../controllers/AdminController.php'; 

// Tạo đối tượng AdminController
$controller = new AdminController();

// Lấy tham số `action` từ URL
$action = isset($_GET['action']) ? $_GET['action'] : 'news';

// Gọi phương thức tương ứng với action
switch ($action) {
    case 'news': // Hiển thị danh sách bài viết
        $controller->news();
        break;

    case 'editNews': // Chỉnh sửa bài viết
        $controller->editNews();
        break;

    case 'deleteNews': // Xóa bài viết
        $controller->deleteNews();
        break;
    case 'addNews': // Thêm bài viết
        $controller->addNews();
        break;

    default:
        echo "Hành động không hợp lệ!";
}
