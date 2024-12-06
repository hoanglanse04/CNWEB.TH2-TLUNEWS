<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Tin Tức</title>
</head>
<body>
    <h1>Danh Sách Tin Tức</h1>

    <!-- Form tìm kiếm -->
    <form method="get" action="index.php">
        <input type="hidden" name="controller" value="news">
        <input type="hidden" name="action" value="search">
        <input type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm" value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>">
        <button type="submit">Tìm kiếm</button>
    </form>

    <div>
    <?php if (isset($newsList) && !empty($newsList)): ?>
        <?php foreach ($newsList as $news): ?>
            <div>
                <h2>
                <a href="detail.php?controller=news&action=detail&id=<?= (int)$news['id']; ?>">

                        <?= htmlspecialchars($news['title'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </h2>
                
            </div>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Không có tin tức nào để hiển thị.</p>
    <?php endif; ?>
</div>
</body>
</html>
