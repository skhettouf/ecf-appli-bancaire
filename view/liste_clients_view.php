<?php

class ListeClientsView {
  public function afficherListeClients($clients) {
        include 'liste_clients.php'; 
  }

  public function afficherMessage($message) {
    echo "<p>$message</p>";
  }
}
?>