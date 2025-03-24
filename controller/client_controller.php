<?php

require_once __DIR__ . '/model/client_model.php';
require_once __DIR__ . '/view/client_view.php';

class ClientController {
  private $model;
  private $view;

  public function __construct() {
    $this->model = new ClientModel();
    $this->view = new ClientView();
  }

  public function afficherFormulaire() {
    $this->view->afficherFormulaire();
  }

  public function ajouterClient($data) {
    if ($this->model->ajouterClient($data)) {
      $this->view->afficherMessage("Client ajouté avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de l'ajout du client.");
    }
  }
}
?>