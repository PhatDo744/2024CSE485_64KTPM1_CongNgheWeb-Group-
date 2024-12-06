<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Danh sách bài báo</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
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
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Hình ảnh bài báo">
                    <div class="card-body">
                        <h5 class="card-title">Bài báo 1: Tiêu đề thú vị</h5>
                        <p class="card-text">Mô tả ngắn về bài báo này. Đây là một bài báo quan trọng về công nghệ.</p>
                        <a href="detail.html?id=1" class="btn btn-primary">Chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Hình ảnh bài báo">
                    <div class="card-body">
                        <h5 class="card-title">Bài báo 2: Khám phá không gian</h5>
                        <p class="card-text">Cập nhật những thông tin mới nhất về vũ trụ và khoa học.</p>
                        <a href="detail.html?id=2" class="btn btn-primary">Chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Hình ảnh bài báo">
                    <div class="card-body">
                        <h5 class="card-title">Bài báo 3: Tin tức giải trí</h5>
                        <p class="card-text">Thông tin giải trí mới nhất dành cho bạn.</p>
                        <a href="detail.html?id=3" class="btn btn-primary">Chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>