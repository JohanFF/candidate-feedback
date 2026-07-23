<?php
require_once 'config/database.php';
require_once 'models/Candidate.php';

class CandidateController {
    private $db;
    private $candidate;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->candidate = new Candidate($this->db);
    }

    // Muestra el formulario
    public function showForm() {
        require_once 'views/form.php';
    }

    // Guarda los datos
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->candidate->create($_POST)) {
                header("Location: index.php?action=list");
                exit();
            }
        }
    }

    // Muestra la lista de evaluaciones
    public function list() {
        $evaluations = $this->candidate->getAll();
        require_once 'views/list.php';
    }

    // Muestra el reporte individual para el candidato
    public function report() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $candidateData = $this->candidate->getById($id);
        
        if (!$candidateData) {
            header("Location: index.php?action=list");
            exit();
        }

        require_once 'views/report.php';
    }
}