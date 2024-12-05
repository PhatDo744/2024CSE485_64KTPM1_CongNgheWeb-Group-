<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Danh sách bài báo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tin Tức Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Đăng xuất</a>
                    </li>
                    
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-primary text-white text-center py-5">
        <h1>Chào mừng đến với Tin Tức Online</h1>
        <p>Cập nhật tin tức mới nhất, nhanh nhất!</p>
    </div>

    <!-- Danh sách bài báo -->
    <div class="container mt-5">
        <div class="row">
            <!-- Bài báo 1 -->
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

            <!-- Bài báo 2 -->
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

            <!-- Bài báo 3 -->
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

    <!-- Footer -->
    <footer class="bg-dark text-center text-white py-3 mt-5">
        &copy; 2024 Tin Tức Online - Trang chủ
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
