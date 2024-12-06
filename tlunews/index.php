<?php
require './config/config.php';
require './models/User.php';
require './controllers/AdminController.php';
<<<<<<< Updated upstream
=======
require './controllers/NewsController.php';
>>>>>>> Stashed changes
require './controllers/HomeController.php';

session_start();
$controller = '';
$action = 'home';

// Lấy controller từ request
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else if (isset($_POST['controller'])) {
    $controller = $_POST['controller'];
}

// Lấy action từ request 
if (isset($_GET['action'])) {
    $action = $_GET['action'];
<<<<<<< Updated upstream
} else if (isset($_POST['action'])) {
    $action = $_POST['action'];
}

// Xử lý routing
if ($controller == '') {
    header('Location: ./views/admin/login.php');
    exit();
}

if ($controller == 'AdminController') {
    $controllerInstance = new AdminController();
=======
if ($controller == 'AdminController') {
    $controller = new AdminController();
>>>>>>> Stashed changes
    switch ($action) {
        case 'login':
            $controllerInstance->login();
            break;
        case 'manageUsers':
            $controllerInstance->manageUsers();
            break;
        case 'addUser':
            $controllerInstance->addUser();
            break;
        case 'updateUser':
            $controllerInstance->updateUser();
            break;
        case 'deleteUser':
            $controllerInstance->deleteUser();
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
<<<<<<< Updated upstream
    if ($controller == 'NewsController') {
        $controllerOJ = new NewsController();
        if ($action == 'add')
            $controllerOJ->addNews();
        else if ($action == 'edit')
            $controllerOJ->editNews();
        else
            $controllerOJ->deleteNews();
    } 
} else if ($controller == 'HomeController') {
    $controllerInstance = new HomeController();
    switch ($action) {
        case 'search':
            if (isset($_GET['category'])) {
                $controllerInstance->handleAjaxSearch();
            }
            break;
        case 'index':
            $controllerInstance->index();
            break;
        case 'detail':
            $controllerInstance->detail();
            break;
        default:
            header('Location: ./views/home/index.php');
            break;
    }
=======
}
if ($controller == 'NewsController') {
    $controller = new NewsController();
    if ($action == 'add')
        $controller->addNews();
    else if ($action == 'edit')
        $controller->editNews();
    else
        $controller->deleteNews();
} else if ($controller == 'HomeController') {
    $controller = new HomeController();
    if ($action == 'index')
        $controller->index();
    else
        $controller->detail();
>>>>>>> Stashed changes
}
