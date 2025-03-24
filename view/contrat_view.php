<?php

class ContratView {
  public function afficherFormulaireContrat() {
        include 'contrat_form.php'; 
  }
  public function afficherMessage($message) {
    echo "<p>$message</p>";
  }
}
?>