<?php
require './config/config.php';
require './models/User.php';
require './controllers/AdminController.php';

session_start();
$controller = new AdminController($pdo);
$action = $_GET['action'] ?? 'home';

if ($action === 'login') {
    $controller->login();
} elseif ($action === 'logout') {
    session_destroy();
    header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/home/index.php');
    exit();
} elseif ($action === 'home') {
    header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/home/index.php');
    exit();
} else {
    echo "Trang không tồn tại.";
    exit();
}
