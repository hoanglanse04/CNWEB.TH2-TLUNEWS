<?php
require_once 'Database.php';

class News {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllNews() {
        $query = "SELECT news.*, categories.name AS category_name 
                  FROM news 
                  JOIN categories ON news.category_id = categories.id 
                  ORDER BY news.created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getNewsById($id) {
        $query = "SELECT news.*, categories.name AS category_name 
                  FROM news 
                  JOIN categories ON news.category_id = categories.id 
                  WHERE news.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function searchNews($keyword) {
        $query = "SELECT news.*, categories.name AS category_name 
                  FROM news 
                  JOIN categories ON news.category_id = categories.id 
                  WHERE news.title LIKE ? 
                  ORDER BY news.created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>
