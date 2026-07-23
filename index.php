<?php
require_once 'controllers/CandidateController.php';

$controller = new CandidateController();

// Si no viene acción por URL, mostramos el Dashboard (list)
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'create':
        $controller->store();
        break;
    case 'form':
        $controller->showForm();
        break;
    case 'report':
        $controller->report();
        break;
    case 'list':
    default:
        $controller->list();
        break;
}