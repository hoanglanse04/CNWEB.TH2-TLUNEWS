<h2>Sửa bài viết</h2>
<form method="POST" action="">
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" name="title" class="form-control" value="<?= $news['title'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội dung</label>
        <textarea name="content" class="form-control" required><?= $news['content'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Hình ảnh</label>
        <input type="text" name="image" class="form-control" value="<?= $news['image'] ?>">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Danh mục</label>
        <select name="category_id" class="form-select">
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>" <?= $news['category_id'] == $category['id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
