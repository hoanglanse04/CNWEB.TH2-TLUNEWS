<?php
require_once 'models/Database.php';

class News {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("select news.*, categories.name as category_name  from news join categories on news.category_id = categories.id");
        return $stmt->fetchAll();
    }

    public static function create($title, $content, $image, $category_id) {
        $db = Database::connect();
        $stmt = $db->prepare("insert into news (title, content, image, created_at, category_id) values (?, ?, ?, NOW(), ?)");
        return $stmt->execute([$title, $content, $image, $category_id]);
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("select * from news where id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function update($id, $title, $content, $image, $category_id) {
        $db = Database::connect();
        $stmt = $db->prepare("update news set title = ?, content = ?, image = ?, category_id = ? where id = ?");
        return $stmt->execute([$title, $content, $image, $category_id, $id]);
    }

    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("delete from news where id = ?");
        return $stmt->execute([$id]);
    }
}

?>
