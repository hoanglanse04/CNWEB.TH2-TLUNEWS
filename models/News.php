<?php
require_once __DIR__ . '/Database.php';

class News {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getDb(); // Lấy kết nối từ lớp Database
    }

    public function getAll() {
        $query = "
            SELECT n.id, n.title,n.content, c.name AS category_name, n.created_at 
            FROM news n
            LEFT JOIN categories c ON n.category_id = c.id
        ";
        try {
            $stmt = $this->db->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi khi lấy dữ liệu: " . $e->getMessage();
            return []; // Trả về mảng rỗng nếu có lỗi
        }
    }

    public function getById($id) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM news WHERE id = ?");
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ? $result : null;  // Trả về null nếu không tìm thấy
        } catch (PDOException $e) {
            echo "Lỗi khi lấy bài viết: " . $e->getMessage();
            return null;  // Trả về null nếu có lỗi
        }
    }

    public function create($title, $content, $image, $category_id) {
        try {
            $stmt = $this->db->prepare("INSERT INTO news (title, content, image, category_id, created_at) VALUES (?, ?, ?, ?, NOW())");
            $stmt->execute([$title, $content, $image, $category_id]);
        } catch (PDOException $e) {
            echo "Lỗi khi thêm bài viết: " . $e->getMessage();
        }
    }

    public function update($id, $title, $content, $image, $category_id) {
        try {
            $stmt = $this->db->prepare("UPDATE news SET title = ?, content = ?, image = ?, category_id = ? WHERE id = ?");
            $stmt->execute([$title, $content, $image, $category_id, $id]);
        } catch (PDOException $e) {
            echo "Lỗi khi cập nhật bài viết: " . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $stmt = $this->db->prepare("DELETE FROM news WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo "Lỗi khi xóa bài viết: " . $e->getMessage();
        }
    }
}
?>