<?php
require_once __DIR__ . '/../models/News.php';
class HomeController
{
    private $newsModel;
    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }
    public function index()
    {
        $news = $this->newsModel->getAllNews();
        header('Location: /2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/views/home/index.php');
    }
    public function detail()
    {
        $id = $_GET['id'];
        $new = $this->newsModel->getNewsById($id);
        require_once __DIR__ . '/../views/news/detail.php';
    }
}
