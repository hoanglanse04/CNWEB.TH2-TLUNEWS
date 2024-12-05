<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thêm tin tức</title>
    <link rel="stylesheet" href="../news/admin_css/style.css">
</head>
<body>
<h2>Thêm bài viết mới</h2>
<form method="POST" action="">
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label> <br><br>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội dung</label> <br> <br>
        <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Đường dẫn hình ảnh</label> <br> <br>
        <input type="text" name="image" id="image" class="form-control">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Danh mục</label> <br> <br>
        <select name="category_id" id="category_id" class="form-select" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['id']) ?>">
                    <?= htmlspecialchars($category['name']) ?>
                </option>
            <?php endforeach; ?>
        </select> <br>
    </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>
</body>
</html>
