<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết tin tức</title>
</head>
<body>
    <h1><?= $news['title'] ?></h1>
    <p><strong>Danh mục:</strong> <?= $news['category_name'] ?></p>
    <p><?= $news['content'] ?></p>
    <p><img src="<?= $news['image'] ?>" alt="Hình ảnh"></p>
    <p><em>Ngày tạo: <?= $news['created_at'] ?></em></p>
    <a href="?controller=news&action=index">Quay lại danh sách</a>
</body>
</html>
