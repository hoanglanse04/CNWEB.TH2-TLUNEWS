<h2>Thêm bài viết mới</h2>
<form method="POST" action="">
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội dung</label>
        <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Đường dẫn hình ảnh</label>
        <input type="text" name="image" id="image" class="form-control">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Danh mục</label>
        <select name="category_id" id="category_id" class="form-control" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['id']) ?>"><?= htmlspecialchars($category['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
