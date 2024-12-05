<?php
require_once 'models/Database.php';

class Category {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("select * from categories");
        return $stmt->fetchAll();
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("select * from categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}

?>