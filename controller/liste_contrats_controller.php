<?php

require_once '../model/contrat_model.php';
require_once '../view/liste_contrats_view.php';

class ListeContratsController {
  private $model;
  private $view;

  public function __construct() {
    $this->model = new ContratModel();
    $this->view = new ListeContratsView();
  }

  public function afficherListeContrats() {
    $contrats = $this->model->getListeContrats();
    $this->view->afficherListeContrats($contrats);
  }

  public function supprimerContrat($id) {
    if ($this->model->supprimerContrat($id)) {
      $this->view->afficherMessage("Contrat supprimé avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de la suppression du contrat.");
    }
  }

  public function modifierContrat($data) {
    if ($this->model->modifierContrat($data)) {
      $this->view->afficherMessage("Contrat modifié avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de la modification du contrat.");
    }
  }
}
?>