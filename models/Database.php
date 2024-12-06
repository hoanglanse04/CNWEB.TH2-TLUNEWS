<?php

class Database {
    private $db;

    // Hàm kết nối cơ sở dữ liệu
    private function connect() {
        $host = '127.0.0.1';        
        $db = 'tintuc';  // Bạn có thể thay đổi giá trị này nếu cần
        $user = 'root';      
        $pass = '';         
        $charset = 'utf8mb4';      

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset"; 
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,       
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
            PDO::ATTR_EMULATE_PREPARES => false,              
        ];

        try {
            // Tạo kết nối và lưu vào biến $db
            $this->db = new PDO($dsn, $user, $pass, $options);   
        } catch (\PDOException $e) {
            // Xử lý lỗi kết nối
            echo "Lỗi kết nối: " . $e->getMessage();
        }
    }

    // Hàm lấy kết nối cơ sở dữ liệu, gọi connect() nếu chưa kết nối
    public function getDb() {
        if ($this->db === null) {
            $this->connect();  // Kết nối nếu chưa có kết nối nào
        }
        return $this->db;  // Trả về đối tượng PDO để sử dụng
    }
}

?>
