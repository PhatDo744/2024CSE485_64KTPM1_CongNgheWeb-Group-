<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Quản lý bài báo</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar  bg-dark p-4">
        <span class="text-light">Admin Dashboard</span>
        <span class="text-light"><a class="nav-link" href="../../index.php">Đăng xuất</a></span>
    </nav>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Danh sách bài báo</h2>
            <a href="#" class="btn btn-primary">Thêm bài báo mới</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề bài báo</th>
                    <th>Danh mục</th>
                    <th>Ngày đăng</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tin tức mới nhất</td>
                    <td>Công nghệ</td>
                    <td>2024-12-05</td>
                    <td>
                        <img src="https://via.placeholder.com/100" class="img-fluid" alt="Hình ảnh bài báo">
                    </td>
                    <td>
                        <div class="my-4 btns text-center">
                            <a href="#" class="btn btn-success ">Sửa</a>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Khám phá vũ trụ</td>
                    <td>Khoa học</td>
                    <td>2024-12-01</td>
                    <td>
                        <img src="https://via.placeholder.com/100" class="img-fluid" alt="Hình ảnh bài báo">
                    </td>
                    <td>
                        <div class="my-4 btns text-center">
                            <a href="#" class="btn btn-success ">Sửa</a>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa bài báo này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Xóa</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>