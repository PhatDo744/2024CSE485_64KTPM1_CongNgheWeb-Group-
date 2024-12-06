<?php
require '../../config/config.php';
$sql = "select * from news ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$news = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Danh sách bài báo</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar  bg-dark p-4">
        <span class="text-light">Tin Tức Online</span>
        <div class="group">
            <span span class="text-light">Đăng xuất</span>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($news as $index => $new): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $new['image'] ?>" class="card-img-top" alt="Hình ảnh bài báo">
                        <div class="card-body">
                            <h5 class="card-title">Bài báo <?= $index ?>: <?= $new['title'] ?></h5>
                            <p class="card-text"><?= $new['content'] ?></p>
                            <a href="../../index.php?controller=HomeController&action=detail&id=<?= $new['id'] ?>" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</body>

</html>