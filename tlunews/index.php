<?php
require './config/config.php';
require './models/User.php';
require './controllers/AdminController.php';


session_start();
$controller = '';
$action = 'home';
if (isset($_GET['controller']))
    $controller = $_GET['controller'];
if (isset($_GET['action']))
    $action = $_GET['action'];
if ($controller = 'AdminController') {
    $controller = new AdminController();
    switch ($action) {
        case 'login':
            $controller->login();
            break;
        case 'manageUsers':
            $controller->manageUsers();
            break;
        case 'addUser':
            $controller->addUser();
            break;
        case 'updateUser':
            $controller->updateUser();
            break;
        case 'deleteUser':
            $controller->deleteUser();
            break;
        case 'logout':
            session_destroy();
            header('Location: ./views/admin/login.php');

            exit();
        case 'home':
            header('Location: ./views/admin/login.php');
            exit();
        default:
            echo "Trang không tồn tại.";
            exit();
    }
}
