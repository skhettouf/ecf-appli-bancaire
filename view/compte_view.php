<?php


class CompteView {
  public function afficherFormulaireCompte() {
        include 'compte_form.php'; 
  }

  public function afficherMessage($message) {
    echo "<p>$message</p>";
  }
}
?>