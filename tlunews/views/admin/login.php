<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center">Login</h1>
    <div class="container">
        <?php if (isset($_GET['error']) && $_GET['error'] === 'invalid_credentials'): ?>
            <div class="alert alert-danger">Tên đăng nhập hoặc mật khẩu không đúng.</div>
        <?php endif; ?>
        <form method="post" action="/2024CSE485_64KTPM1_CongNgheWeb_Group/tlunews/index.php?action=login">
            <div class="form-group">
                <label for="username" class="form-label">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-primary mt-4" value="Đăng nhập">
        </form>
    </div>
</body>

</html>