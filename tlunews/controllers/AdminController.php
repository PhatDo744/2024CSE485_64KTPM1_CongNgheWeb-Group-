<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../config/config.php';

class AdminController
{
    private $pdo;
    private $userModel;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->userModel = new User($this->pdo);
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->authenticate($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;

                if ($user['role'] == 1) {
                    header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/dashboard.php');
                } elseif ($user['role'] == 0) {
                    header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/home/index.php');
                }
                exit();
            } else {
                header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/login.php?action=login&error=invalid_credentials');
                exit();
            }
        } else {
            header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/login.php');
            exit();
        }
    }
}
