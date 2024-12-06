<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tài khoản</title>
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Sửa tài khoản</h2>
        <?php
        require_once __DIR__ . '/../../../config/config.php';
        require_once __DIR__ . '/../../../models/User.php';

        $userModel = new User();
        $user = $userModel->getUserById($_GET['id']);
        ?>
        <form id="editUserForm" method="POST" action="../../../index.php?controller=AdminController&action=updateUser">
            <input type="hidden" id="editUserId" name="id" value="<?php echo $user['id']; ?>">
            <div class="mb-3">
                <label for="editUsername" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" id="editUsername" name="username" value="<?php echo $user['username']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="editPassword" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="editPassword" name="password" value="<?php echo $user['password']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="editRole" class="form-label">Vai trò</label>
                <select class="form-control" id="editRole" name="role" required>
                    <option value="1" <?php echo $user['role'] == 1 ? 'selected' : ''; ?>>Admin</option>
                    <option value="0" <?php echo $user['role'] == 0 ? 'selected' : ''; ?>>User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
        </form>
    </div>
</body>

</html>