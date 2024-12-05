<h2>Danh sách bài viết</h2>
<a href="test.php?controller=admin&action=addNews" class="btn btn-success">Thêm bài viết</a>
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
    <?php 
    
    if (!empty($news) && is_array($news)): ?>
        <?php foreach ($news as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['id']) ?></td>
                <td><?= htmlspecialchars($item['title']) ?></td>
                <td><?= htmlspecialchars($item['category_name']) ?></td>
                <td><?= htmlspecialchars($item['created_at']) ?></td>
                <td>
                    <a href="test.php?controller=admin&action=editNews&id=<?= htmlspecialchars($item['id']) ?>" class="btn btn-warning">Sửa</a>
                    <a href="test.php?controller=admin&action=deleteNews&id=<?= htmlspecialchars($item['id']) ?>" 
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

