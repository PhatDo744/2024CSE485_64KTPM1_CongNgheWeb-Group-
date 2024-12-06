<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-dark p-4">
        <span class="text-light">Admin Dashboard</span>
        <div class="ml-auto">
            <span class="text-light ms-auto"><a class="nav-link" href="../../index.php">Đăng xuất</a></span>
            <span class="text-light ms-3"><a class="nav-link" href="./dashboard.php">QLBV</a></span>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Danh sách tài khoản</h2>
            <a href="./users/add.php" class="btn btn-primary">Thêm tài khoản mới</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>STT</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Vai trò</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once __DIR__ . '/../../config/config.php';
                require_once __DIR__ . '/../../models/User.php';

                $userModel = new User();
                $users = $userModel->getAllUsers();

                foreach ($users as $index => $user) {
                    echo "<tr>
                        <td>" . ($index + 1) . "</td>
                        <td>{$user['username']}</td>
                        <td>{$user['password']}</td>
                        <td>" . ($user['role'] == 1 ? 'Admin' : 'User') . "</td>
                        <td>
                            <div class='my-4 btns text-center'>
                                <a href='./users/edit.php?id={$user['id']}' class='btn btn-success'>Sửa</a>
                                <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteUserModal' data-id='{$user['id']}'>Xóa</button>
                            </div>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteUserModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa tài khoản này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <form method="POST" action="../../index.php?action=deleteUser">
                        <input type="hidden" id="deleteUserId" name="id">
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('[data-bs-target="#deleteUserModal"]').forEach(button => {
            button.addEventListener('click', function() {
                const userId = this.getAttribute('data-id');
                document.getElementById('deleteUserId').value = userId;
            });
        });
    </script>
</body>

</html>