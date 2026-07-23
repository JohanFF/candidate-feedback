<?php
require_once 'controllers/CandidateController.php';

$controller = new CandidateController();
$action = isset($_GET['action']) ? $_GET['action'] : 'form';

switch ($action) {
    case 'create':
        $controller->store();
        break;
    case 'list':
        $controller->list();
        break;
    case 'report':
        $controller->report();
        break;
    default:
        $controller->showForm();
        break;
}