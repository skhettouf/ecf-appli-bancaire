<?php


class ListeComptesView {
  public function afficherListeComptes($comptes) {
        include 'liste_comptes.php';
  }

  public function afficherMessage($message) {
    echo "<p>$message</p>";
  }
}
?>