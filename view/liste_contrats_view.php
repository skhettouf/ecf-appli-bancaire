<?php


class ListeContratsView {
  public function afficherListeContrats($contrats) {
        include 'liste_contrats.php';
  }

  public function afficherMessage($message) {
    echo "<p>$message</p>";
  }
}
?>