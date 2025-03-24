<?php

require_once '../model/compte_model.php';
require_once '../view/liste_comptes_view.php';

class ListeComptesController {
  private $model;
  private $view;

  public function __construct() {
    $this->model = new CompteModel();
    $this->view = new ListeComptesView();
  }

  public function afficherListeComptes(): void {
    $comptes = $this->model->getListeComptes();
    $this->view->afficherListeComptes($comptes);
  }

  public function supprimerCompte($id) {
    if ($this->model->supprimerCompte($id)) {
      $this->view->afficherMessage("Compte supprimé avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de la suppression du compte.");
    }
  }

  public function modifierCompte($data) {
    if ($this->model->modifierCompte($data)) {
      $this->view->afficherMessage("Compte modifié avec succès !");
    } else {
      $this->view->afficherMessage("Erreur lors de la modification du compte.");
    }
  }
}
?>