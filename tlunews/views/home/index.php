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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/script.js"></script>
</head>

<body>
    <nav class="navbar  bg-dark p-4">
        <span class="text-light">Tin Tức Online</span>
        <span class="text-light ms-auto"><a class="nav-link" href="../../index.php">Đăng xuất</a></span>
    </nav>
    <div class="container mt-5">
        <form id="searchForm">
            <div class="form-group mb-3">
                <label for="category">Chọn thể loại:</label>
                <select name="category" id="category" class="form-control">
                    <option value="1">Technology</option>
                    <option value="2">Health</option>
                    <option value="3">Sports</option>
                    <option value="4">Entertainment</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>

        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Kết quả tìm kiếm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>
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