<?php

require_once '../model/compte_model.php';
require_once '../view/compte_view.php';

class CompteController {
  private $model;
  private $view;

  public function __construct() {
    $this->model = new CompteModel();
    $this->view = new CompteView();
  }

  public function afficherFormulaireCompte() {
    $this->view->afficherFormulaireCompte();
  }

  public function ajouterCompte($data) {
    if ($this->model->ajouterCompte($data)) {
      $this->view->afficherMessage("Compte ajouté avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de l'ajout du compte.");
    }
  }
}
?>