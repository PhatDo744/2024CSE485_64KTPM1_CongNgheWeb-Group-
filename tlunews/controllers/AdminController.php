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

    public function manageUsers()
    {
        $users = $this->userModel->getAllUsers();
        require_once __DIR__ . '/../views/admin/user_management.php';
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $this->userModel->addUser($username, $password, $role);
            header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/user_management.php');
            exit();
        } else {
            require_once __DIR__ . '/../views/admin/users/add.php';
        }
    }

    public function updateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $this->userModel->updateUser($id, $username, $password, $role);
            header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/user_management.php');
            exit();
        } else {
            $id = $_GET['id'];
            $user = $this->userModel->getUserById($id);
            require_once __DIR__ . '/../views/admin/users/edit.php';
        }
    }

    public function deleteUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            $this->userModel->deleteUser($id);
            header('Location: /Web_Group/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/admin/user_management.php');
            exit();
        }
    }

    public function handleRequest()
    {
        $action = $_GET['action'] ?? null;

        switch ($action) {
            case 'login':
                $this->login();
                break;
            case 'manageUsers':
                $this->manageUsers();
                break;
            case 'addUser':
                $this->addUser();
                break;
            case 'updateUser':
                $this->updateUser();
                break;
            case 'deleteUser':
                $this->deleteUser();
                break;
            default:
                // Default action or error handling
                break;
        }
    }
}

// Instantiate the controller and handle the request
$controller = new AdminController($pdo);
$controller->handleRequest();
