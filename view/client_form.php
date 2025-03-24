<?php
  require_once __DIR__ . "/templates/header.php"; ?>
  
  <h1>Ajouter un client</h1>
  <form method="post">
    <label for="nom">Nom :</label><br>
    <input type="text" name="nom" required><br>

    <label for="prenom">Prénom :</label><br>
    <input type="text" name="prenom" required><br>

    <label for="email">Email :</label><br>
    <input type="email" name="email" required><br>

    <label for="telephone">Téléphone :</label><br>
    <input type="tel" name="telephone" required><br>

    <label for="adresse">Adresse :</label><br>
    <input type="text" name="adresse"><br>

    <input type="submit" value="Ajouter">
  </form>
<?php
  require_once __DIR__ . "/templates/footer.php"; ?>
