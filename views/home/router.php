<?php
include '../../controllers/NewsController.php';

// Xác định controller và action từ URL
$controller = $_GET['controller'] ?? 'news';
$action = $_GET['action'] ?? 'index';

$newsController = new NewsController();

if ($controller === 'news') {
    if ($action === 'index') {
        $newsController->index();
    } elseif ($action === 'detail') {
        $id = $_GET['id'] ?? 0;
        $newsController->detail((int)$id);
    } elseif ($action === 'search') {
        $keyword = $_GET['keyword'] ?? '';
        $newsController->search($keyword);
    } else {
        echo "Action không hợp lệ!";
    }
} else {
    echo "Controller không hợp lệ!";
}
?>
