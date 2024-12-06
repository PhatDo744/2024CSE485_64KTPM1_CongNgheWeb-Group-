<?php
require_once __DIR__ . "/../config/config.php";
class User
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function authenticate($username, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && $password === $user['password']) {
            return $user;
        }

        return false;
    }

    public function getAllUsers()
    {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }

    public function addUser($username, $password, $role)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, :role)");
        return $stmt->execute(['username' => $username, 'password' => $password, 'role' => $role]);
    }

    public function updateUser($id, $username, $password, $role)
    {
        $stmt = $this->pdo->prepare("UPDATE users SET username = :username, password = :password, role = :role WHERE id = :id");
        return $stmt->execute(['id' => $id, 'username' => $username, 'password' => $password, 'role' => $role]);
    }

    public function deleteUser($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function getUserById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
