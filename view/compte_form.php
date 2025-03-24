<?php require_once __DIR__ . "/templates/header.php"; ?>
<h1>Créer un compte bancaire</h1>
  <form method="post">
    <label for="rib">RIB :</label><br>
    <input type="text" name="rib" required><br>

    <label for="type">Type de compte :</label><br>
    <select name="type" required>
      <option value="courant">Compte courant</option>
      <option value="epargne">Compte épargne</option>
    </select><br>

    <label for="solde">Solde initial (en euros) :</label><br>
    <input type="number" name="solde" required><br>

    <label for="numero_client">Numéro client :</label><br>
    <select name="numero_client" required>
      <?php
      require_once '../model/compte_model.php';
      $model = new CompteModel();
      $clients = $model->getListeClients();
      foreach ($clients as $client) {
        echo "<option value='" . $client['id'] . "'>" . $client['nom'] . " " . $client['prenom'] . "</option>";
      }
      
      ?>
    </select><br>

    <input type="submit" value="Créer">
  </form>
  <?php
  require_once __DIR__ .  "/templates/footer.php"; ?>