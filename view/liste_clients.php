
<?php require_once __DIR__ .  "/templates/header.php"; ?>
  <h1>Liste des clients</h1>
  <table>
    <thead>
      <tr>
        <th>Numéro client</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($clients as $client): ?>
        <tr>
          <td><?php echo $client['id']; ?></td>
          <td><?php echo $client['nom']; ?></td>
          <td><?php echo $client['prenom']; ?></td>
          <td><?php echo $client['email']; ?></td>
          <td><?php echo $client['telephone']; ?></td>
          <td>
            <a href="supprimer_client.php?id=<?php echo $client['id']; ?>">Supprimer</a>
            <a href="modifier_client.php?id=<?php echo $client['id']; ?>">Modifier</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php
  require_once __DIR__ . "/templates/footer.php"; ?>