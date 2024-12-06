<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Tin Tức</title>
</head>
<body>
    <div>
    <?php if (isset($newsList) && !empty($newsList)): ?>
        <?php foreach ($newsList as $news): ?>
            <div>
                <h2>
                    <a href="index.php?controller=news&action=detail&id=<?= $news['id']; ?>">
                        <?= htmlspecialchars($news['title']); ?>
                    </a>
                </h2>
                <p><strong>Danh mục:</strong> <?= htmlspecialchars($news['category_name']); ?></p>
                <p><?= nl2br(htmlspecialchars($news['content'])); ?></p>
                <p><strong>Ngày đăng:</strong> <?= date('d/m/Y H:i', strtotime($news['created_at'])); ?></p>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Lỗi tin tức .</p>
    <?php endif; ?>
</div>

</body>
</html>