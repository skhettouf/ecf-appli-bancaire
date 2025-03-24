<?php

class ClientView {
  public function afficherFormulaire(): void {
    
        include 'client_form.php';
  }

  public function afficherMessage($message) {
    echo "<p>$message</p>";
  }
}

