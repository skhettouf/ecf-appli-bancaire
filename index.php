<?php
require_once 'controller/client_controller.php';

// Crée contrôleur client
$controller = new ClientController();

// Gère les requêtes
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $controller->ajouterClient($_POST);
} else {
  $controller->afficherFormulaire();
}
/*session_start();
require_once __DIR__ . '/controller/AdminController.php';
$adminController = new AdminController();
if (!isset($_SESSION['username'])) {
    $adminController->index();
}?>*/