<?php
require_once './models/database.php';
require_once './controllers/AdminController.php';


$data = new Database();
$db = $data->getDb();

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

$adminController = new AdminController($db);

switch ($action) {
    case 'login':
        $adminController->login();
        break;
    case 'logout':
        $adminController->logout();
        break;
    case 'dashboard':
        $adminController->dashboard();
        break;
    default:
        echo "404 - Not Found";
        break;
}