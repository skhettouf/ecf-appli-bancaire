<?php require_once __DIR__ . "/templates/header.php"; ?>
<h1>Créer un contrat</h1>
  <form method="post">
    <label for="type_contrat">Type de contrat :</label><br>
    <select name="type_contrat" required>
      <option value="assurance_vie">Assurance vie</option>
      <option value="assurance_habitation">Assurance habitation</option>
      <option value="credit_immobilier">Crédit immobilier</option>
      <option value="credit_consommation">Crédit à la consommation</option>
      <option value="compte_epargne_logement">Compte épargne logement</option>
    </select><br>

    <label for="montant">Montant souscrit (en euros) :</label><br>
    <input type="number" name="montant" required><br>

    <label for="duree">Durée (en mois) :</label><br>
    <input type="number" name="duree" required><br>

    <label for="numero_client">Numéro client :</label><br>
    <select name="numero_client" required>
      <?php
     require_once '../model/contrat_model.php';
     $model = new ContratModel();
     $clients = $model->getListeClients();
     foreach ($clients as $client) {
        echo "<option value='" . $client['id'] . "'>" . $client['nom'] . " " . $client['prenom'] . "</option>";
      }     
        
      ?>
    </select><br>

    <input type="submit" value="Créer">
  </form>
  <?php
  require_once __DIR__ . "/templates/footer.php"; ?>