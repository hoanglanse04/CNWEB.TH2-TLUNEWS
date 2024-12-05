<?php
class Database {
    private static $instance = null;

    // Hàm kết nối đến cơ sở dữ liệu
    public static function connect() {
        if (self::$instance === null) {
            try {
                $host = '127.0.0.1';
                $dbname = 'tintuc';
                $username = 'root'; 
                $password = '';

                self::$instance = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}