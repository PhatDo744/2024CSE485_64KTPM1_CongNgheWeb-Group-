<?php
class Category
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getNewsByCategory($categoryId)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM news WHERE category_id = ?');
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll();
    }
}
