<?php

require_once '../model/contrat_model.php';
require_once '../view/contrat_view.php';

class ContratController {
  private $model;
  private $view;

  public function __construct() {
    $this->model = new ContratModel();
    $this->view = new ContratView();
  }

  public function afficherFormulaireContrat() {
    $this->view->afficherFormulaireContrat();
  }

  public function ajouterContrat($data) {
    if ($this->model->ajouterContrat($data)) {
      $this->view->afficherMessage("Contrat ajouté avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de l'ajout du contrat.");
    }
  }
}
?>