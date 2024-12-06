<?php
class Category
{
    private $pdo;

    public function __construct()
    {
        $host = '127.0.0.1';
        $db = 'tintuc';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getNewsByCategory($categoryId)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM news WHERE category_id = ?');
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll();
    }
}
