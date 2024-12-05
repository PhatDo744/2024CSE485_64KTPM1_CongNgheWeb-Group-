<?php
require_once 'controllers/NewsController.php';
$controller = '';
print_r($_GET);
print_r($_POST);
$action = '';
if (isset($_GET['controller']))
    $controller = $_GET['controller'];
if (isset($_GET['action']))
    $action = $_GET['action'];
if ($controller == '')
    header('Location: /tlunews/views/admin/dashboard.php');
else if ($controller == 'NewsController') {
    $controllerOJ = new NewsController();
    if ($action == 'add')
        $controllerOJ->addNews();
    else if ($action == 'edit')
        $controllerOJ->editNews();
    else
        $controllerOJ->deleteNews();
}
