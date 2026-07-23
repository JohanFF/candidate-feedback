<?php
class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    public function __construct() {
        if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') {
            $this->host = "localhost";
            $this->db_name = "candidate_feedback_db";
            $this->username = "root";
            $this->password = "";
        } else {
            // Datos exactos de tu panel InfinityFree
            $this->host = "sql303.infinityfree.com";
            $this->db_name = "if0_42482733_candidate_feedback";
            $this->username = "if0_42482733";
            $this->password = "r2GoFwPsYbL9";
        }
    }

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            error_log("Error de conexión: " . $exception->getMessage());
        }
        return $this->conn;
    }
}