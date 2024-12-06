<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài báo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <h1 class="mb-4">Bài báo: <?= $new['title'] ?></h1>
                <p class="text-muted">
                    <strong>Ngày đăng:</strong> <?= $new['created_at'] ?> |
                    <strong>Danh mục:</strong> <?= $new['category_id'] ?>
                </p>
                <img src="<?= $new['image'] ?>" alt="Hình ảnh bài báo" class="img-fluid mb-4">
                <div>
                    <h4 class="mb-3">Nội dung bài viết</h4>
                    <p>
                        <?= $new['content'] ?>
                    </p>

                </div>
                <div class="mt-4">
                </div>
            </div>
        </div>
    </div>
</body>

</html>