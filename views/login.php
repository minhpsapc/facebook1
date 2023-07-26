<!DOCTYPE html>
<html>
<head>
    <title>Facebook - Đăng nhập</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Đăng nhập</h1>
        <form action="../controllers/UserController.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
        <p>Bạn chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></p>
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
