<?php

require_once '../model/client_model.php';
require_once '../view/liste_clients_view.php';

class ListeClientsController {
  private $model;
  private $view;

  public function __construct() {
    $this->model = new ClientModel();
    $this->view = new ListeClientsView();
  }

  public function afficherListeClients() {
    $clients = $this->model->getListeClients();
    $this->view->afficherListeClients($clients);
  }

  public function supprimerClient($id) {
    if ($this->model->supprimerClient($id)) {
      $this->view->afficherMessage("Client supprimé avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de la suppression du client.");
    }
  }

  public function modifierClient($data) {
    if ($this->model->modifierClient($data)) {
      $this->view->afficherMessage("Client modifié avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de la modification du client.");
    }
  }
}
?>