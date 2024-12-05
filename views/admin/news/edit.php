<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sửa tin tức</title>
    <link rel="stylesheet" href="./admin_css/style.css">
</head>
<body>
<h2>Sửa bài viết</h2>
<form method="POST" action="">
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label> <br> <br>
        <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($news['title']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội dung</label> <br> <br>
        <textarea name="content" id="content" class="form-control" required><?= htmlspecialchars($news['content']) ?></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Hình ảnh</label> <br> <br>
        <input type="text" name="image" class="form-control" value="<?= htmlspecialchars($news['image']) ?>">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Danh mục</label> <br> <br>
        <select name="category_id" class="form-select" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['id']) ?>" <?= $news['category_id'] == $category['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($category['name']) ?>
                </option>
            <?php endforeach; ?>
        </select> <br>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

</body>
</html>