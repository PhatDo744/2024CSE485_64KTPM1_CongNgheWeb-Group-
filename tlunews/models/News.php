<?php
require_once __DIR__ . '/../config/config.php';

class NewsModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo; // Use the global $pdo variable from config
        $this->pdo = $pdo;
    }

    // Method to add news
    public function addNews($title, $content, $image, $category, $created_at)
    {
        $sql = "INSERT INTO news (title, content, image, category_id, created_at) 
                VALUES (:title, :content, :image, :category_id, :created_at)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'title' => $title,
            'content' => $content,
            'image' => $image,
            'category_id' => $category,
            'created_at' => $created_at
        ]);
    }

    // Method to edit news
    public function editNews($id, $title, $content, $image, $category)
    {
        $sql = "UPDATE news 
                SET title = :title, content = :content, image = :image, category_id = :category_id 
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'image' => $image,
            'category_id' => $category
        ]);
    }
    public function deleteNews($id)
    {
        $query = "DELETE FROM news WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
