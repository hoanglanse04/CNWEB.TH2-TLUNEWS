<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Tin Tức</title>
</head>
<body>
    <?php if (isset($news) && !empty($news)): ?>
        <h1><?= htmlspecialchars($news['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <p><strong>Danh mục:</strong> <?= htmlspecialchars($news['category_name'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Ngày đăng:</strong> <?= date('d/m/Y H:i', strtotime($news['created_at'])); ?></p>
        <div>
            <p><?= nl2br(htmlspecialchars($news['content'], ENT_QUOTES, 'UTF-8')); ?></p>
        </div>
        <a href="index.php?controller=news&action=index">Quay lại danh sách tin tức</a>
    <?php else: ?>
        <p>Không tìm thấy tin tức để hiển thị.</p>
    <?php endif; ?>
</body>
</html>
