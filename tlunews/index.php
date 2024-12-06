<?php
require_once 'controllers/NewsController.php';
require_once 'controllers/HomeController.php';

$controller = '';

$user = 1;
$action = '';
if (isset($_GET['controller']))
    $controller = $_GET['controller'];
if (isset($_GET['action']))
    $action = $_GET['action'];

if ($controller == '') {
    if ($user == 0)
        header('Location: ./views/admin/dashboard.php');
    else
        header('Location: ./views/home/index.php');
} else if ($controller == 'NewsController') {
    $controllerOJ = new NewsController();
    if ($action == 'add')
        $controllerOJ->addNews();
    else if ($action == 'edit')
        $controllerOJ->editNews();
    else
        $controllerOJ->deleteNews();
} else if ($controller == 'HomeController') {
    $controllerOJ = new HomeController();
    if ($action == 'index')
        $controllerOJ->index();
    else
        $controllerOJ->detail();
}
