<?php
require_once __DIR__ . '/Database.php';

class Category {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getDb(); // Lấy kết nối từ lớp Database
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Trả về mảng kết hợp
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);  // Trả về mảng kết hợp cho kết quả duy nhất
    }
}
?>