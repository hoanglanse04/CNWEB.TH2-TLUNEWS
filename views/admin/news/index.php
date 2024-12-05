<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="./admin_css/style_index.css">
</head>
<body>
<h2>Danh sách bài viết</h2>
<a href="dashboard.php?controller=admin&action=addNews" class="btn btn-success">Thêm bài viết</a>

<div class="search-bar">
    <input type="text" placeholder="Nhập tiêu đề" id="searchTitle">
    <button type="button">Tìm kiếm</button>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Danh mục</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    if (!empty($news) && is_array($news)): ?>
        <?php foreach ($news as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['id']) ?></td>
                <td><?= htmlspecialchars($item['title']) ?></td>
                <td><?= htmlspecialchars($item['category_name']) ?></td>
                <td><?= htmlspecialchars($item['created_at']) ?></td>
                <td>
                    <a href="dashboard.php?controller=admin&action=editNews&id=<?= htmlspecialchars($item['id']) ?>" class="btn btn-warning">Sửa</a>
                    <a href="dashboard.php?controller=admin&action=deleteNews&id=<?= htmlspecialchars($item['id']) ?>" 
                       class="btn btn-danger" 
                       onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?');">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5" class="text-center">Không có bài viết nào hoặc có lỗi khi truy xuất dữ liệu!</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

<footer>
    <p>
        <a href="https://vnexpress.net/" class="logo_ft">
            <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v9533/v2_2019/pc/graphics/logo.svg" alt="Logo"> VnExpress
        </a>
    </p>
    <p>
        <a href="https://vnexpress.net/dieu-khoan-su-dung">Điều khoản sử dụng</a> | 
        <a href="https://vnexpress.net/chinh-sach-bao-mat">Chính sách bảo mật</a> | 
        <a href="https://vnexpress.net/chinh-sach-cookies">Cookies</a> | 
        <a href="/rss">RSS</a>
    </p>
</footer>

</body>
</html>