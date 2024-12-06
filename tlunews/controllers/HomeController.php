<?php
require_once __DIR__ . '/../models/Category.php';

class HomeController
{
    public function searchByCategory($categoryId)
    {
        try {
            $categoryModel = new Category();
            $news = $categoryModel->getNewsByCategory($categoryId);
            require_once __DIR__ . '/../views/home/search_results.php';
        } catch (\PDOException $e) {
            echo '<div class="alert alert-danger">Lỗi kết nối cơ sở dữ liệu</div>';
        }
    }

    public function handleAjaxSearch()
    {
        if (isset($_GET['category'])) {
            $this->searchByCategory($_GET['category']);
        }
    }
}
