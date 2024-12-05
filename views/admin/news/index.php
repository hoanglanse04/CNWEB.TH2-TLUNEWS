<h2>Danh sách bài viết</h2>
<a href="index.php?controller=admin&action=addNews" class="btn btn-success">Thêm bài viết</a>
<table class="table mt-4">
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
        <?php foreach ($news as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['title'] ?></td>
                <td><?= $item['category_name'] ?></td>
                <td><?= $item['created_at'] ?></td>
                <td>
                    <a href="index.php?controller=admin&action=editNews&id=<?= $item['id'] ?>" class="btn btn-warning">Sửa</a>
                    <a href="index.php?controller=admin&action=deleteNews&id=<?= $item['id'] ?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
