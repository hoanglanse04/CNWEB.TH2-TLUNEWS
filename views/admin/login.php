<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>

    <h2>Đăng nhập</h2>

    <!-- Form đăng nhập -->
    <form action="index.php?action=login" method="POST">
        <div>
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <button type="submit">Đăng nhập</button>
        </div>

        <!-- Hiển thị lỗi nếu có -->
        <?php if (isset($error)): ?>
        <div style="color: red;"><?= $error ?></div>
        <?php endif; ?>
    </form>

</body>

</html>