<?php 



    class User {
        private $conn;
        public function __construct($db){
            $this->conn = $db;
        }
        public function getByUsername($username){
            $query = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        
        }     
        public function create(){
            
        }
        public function update(){
            
        }
    }