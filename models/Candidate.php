<?php
/**
 * Modelo Candidate - Operaciones CRUD con PDO
 */
class Candidate {
    private $conn;
    private $table = "candidate_evaluations";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Insertar evaluación
    public function create($data) {
        $query = "INSERT INTO " . $this->table . " 
                  (candidate_name, candidate_email, position_applied, technical_score, soft_skills_score, strengths, areas_to_improve, status) 
                  VALUES (:name, :email, :position, :tech_score, :soft_score, :strengths, :improvements, :status)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(':name', htmlspecialchars(strip_tags($data['candidate_name'])));
        $stmt->bindValue(':email', htmlspecialchars(strip_tags($data['candidate_email'])));
        $stmt->bindValue(':position', htmlspecialchars(strip_tags($data['position_applied'])));
        $stmt->bindValue(':tech_score', (int)$data['technical_score']);
        $stmt->bindValue(':soft_score', (int)$data['soft_skills_score']);
        $stmt->bindValue(':strengths', htmlspecialchars(strip_tags($data['strengths'])));
        $stmt->bindValue(':improvements', htmlspecialchars(strip_tags($data['areas_to_improve'])));
        $stmt->bindValue(':status', htmlspecialchars(strip_tags($data['status'])));

        return $stmt->execute();
    }

    // Listar todos los candidatos
    public function getAll() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un candidato por ID
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', (int)$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}