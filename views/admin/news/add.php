<h2>Thêm bài viết mới</h2>
<form method="POST" action="">
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội dung</label>
        <textarea name="content" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Hình ảnh</label>
        <input type="text" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Danh mục</label>
        <select name="category_id" class="form-select">
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
