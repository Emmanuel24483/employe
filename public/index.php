<?php
// Routeur principal : détermine l'action à exécuter

require_once '../controllers/EmployeeController.php';

$controller = new EmployeeController();

// Action passée via l'URL
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

// Redirige vers la bonne méthode
switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->index();
}
