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
    <title>Dashboard - Quản lý bài báo</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav class="navbar  bg-dark p-4">
        <span class="text-light">Admin Dashboard</span>
        <span class="text-light">Đăng xuất</span>
    </nav>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Danh sách bài báo</h2>
            <a href="./news/add.php" class="btn btn-primary">Thêm bài báo mới</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề bài báo</th>
                    <th>Danh mục</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news as $index => $new): ?>
                    <tr>
                        <td><?= $index ?></td>
                        <td><?= $new['title'] ?></td>
                        <td><?php if ($new['category_id'] == 1) echo 'Technology';
                            else if ($new['category_id'] == 2) echo 'Health';
                            else if ($new['category_id'] == 3) echo 'Sports';
                            else if ($new['category_id'] == 4) echo 'Entertainment';
                            else if ($new['category_id'] == 5) echo 'Education';
                            ?></td>
                        <td><?= $new['content'] ?></td>
                        <td><?= $new['created_at'] ?></td>
                        <td>
                            <img width="150px" src="<?= $new['image'] ?>" class="img-fluid" alt="Hình ảnh bài báo">
                        </td>
                        <td>
                            <div class="my-4 btns text-center">
                                <a href="./news/edit.php?id=<?= $new['id'] ?>&name=<?= urlencode($new['title']) ?>&content=<?= urlencode($new['content']) ?>" class="btn btn-success">Sửa</a>
                                <button onclick="setDeleteId(<?= $new['id'] ?>)" class=" btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="../../index.php?controller=NewsController&action=delete" method="post">
                <div class="modal-header bg-danger text-white">
                    <input type="hidden" name="id" id="deleteId">
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa bài báo này không?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    function setDeleteId(id) {
        // Gán id vào trường ẩn trong modal
        document.getElementById('deleteId').value = id;
    }
</script>

</html>