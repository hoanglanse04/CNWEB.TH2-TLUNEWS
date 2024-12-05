<?php

class Database {
    private $db;
    private function connect() {
        $host = '127.0.0.1';        
        $db = 'testdb';  
        $user = 'root';      
        $pass = '';         
        $charset = 'utf8mb4';      

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset"; 
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,       
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
            PDO::ATTR_EMULATE_PREPARES => false,              
        ];
        // echo "kết nối thanh cong ";
        try {
            $this->db = new PDO($dsn, $user, $pass, $options);   
        } catch (\PDOException $e) {
            echo "Lỗi kết nối: " . $e->getMessage();
        }
    }

    public function getDb() {
        if ($this->db === null) {
            $this->connect();  
        }
        return $this->db;  
    }
}