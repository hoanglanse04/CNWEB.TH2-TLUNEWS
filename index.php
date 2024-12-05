<?php
require_once './models/database.php';
require_once './controllers/AdminController.php';
require_once './controllers/HomeController.php'; 

$data = new Database();
$db = $data->getDb();


session_start();
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    if ($action != 'login') {
        header('Location: index.php?action=login');
        exit();
    }
}

$adminController = new AdminController($db);
$homeController = new HomeController($db);

switch ($action) {
    case 'login':
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 1) { 
                header('Location: index.php?action=dashboard');
                exit();
            } else { 
                header('Location:index.php?action=home');
                exit();
            }
        }
        $adminController->login();
        break;
    case 'logout':
        $adminController->logout();
        break;
    case 'dashboard':
        if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
            $adminController->dashboard();
        } else {
            header('Location: index.php?action=login');
            exit();
        }
        break;
    case 'home': 
        $homeController->index();
        break;
    default:
        echo "404 - Not Found";
        break;
}