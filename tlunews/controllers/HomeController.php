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
        header('Location: /tlunews/views/news/index.php');
        require_once __DIR__ . '/../views/home/index.php';
    }
    public function detail()
    {
        $id = $_GET['id'];
        $new = $this->newsModel->getNewsById($id);
        echo
        '
            <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài báo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar  bg-dark p-4">
        <span class="text-light">Tin Tức Online</span>
        <span class="text-light">Quay lại trang chủ</span>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Bài báo: ' . $new["title"] . '</h1>
                <p class="text-muted">
                    <strong>Ngày đăng:</strong> 2024-12-05 |
                    <strong>Danh mục:</strong> Công nghệ
                </p>
                <img src="' . $new["image"] . '" alt="Hình ảnh bài báo" class="img-fluid mb-4">
                <div>
                    <h4 class="mb-3">Nội dung bài viết</h4>
                    <p>
                        Đây là nội dung chi tiết của bài báo. Bài viết cung cấp thông tin đầy đủ về chủ đề được nhắc đến.
                        Từ công nghệ mới nhất, đến các khám phá khoa học thú vị, bài báo này sẽ giúp bạn hiểu rõ hơn về thế giới xung quanh.
                    </p>
                    <p>
                        Hãy tiếp tục đọc để khám phá thêm nhiều thông tin hấp dẫn, giúp bạn cập nhật những kiến thức bổ ích và thú vị nhất!
                    </p>
                </div>
                <div class="mt-4">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
        ';
    }
}
