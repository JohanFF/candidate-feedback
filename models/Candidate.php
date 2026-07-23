<?php
/**
 * Modelo Candidate - Gestión de evaluaciones de candidatos
 */
class Candidate {
    private $conn;
    private $table_name = "candidate_evaluations";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Métodos para crear y consultar evaluaciones
}