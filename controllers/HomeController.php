<?php
require_once './models/User.php';

class HomeController {
    private $db;
    private $userModel;

    public function __construct($db) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $this->db = $db;
        $this->userModel = new User($this->db);
    }

    public function index() {
        require_once './views/home/index.php';
    }
}