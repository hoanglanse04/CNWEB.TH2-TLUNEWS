<?php
require_once 'Database.php';

class News {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllNews() {
        $query = "SELECT * FROM news ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    public function getNewsById($id) {
        $query = "SELECT * FROM news WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function searchNews($keyword) {
        $query = "SELECT * FROM news WHERE title LIKE ? ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
    
}
?>
