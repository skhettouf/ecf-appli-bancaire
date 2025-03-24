<?php require_once __DIR__ . "/templates/header.php"; ?>
<h1>Liste des contrats</h1>
  <table>
    <thead>
      <tr>
        <th>Identifiant</th>
        <th>Type de contrat</th>
        <th>Montant</th>
        <th>Durée</th>
        <th>Client</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contrats as $contrat): ?>
        <tr>
          <td><?php echo $contrat['identifiant_contrat']; ?></td>
          <td><?php echo $contrat['type_contrat']; ?></td>
          <td><?php echo $contrat['montant']; ?></td>
          <td><?php echo $contrat['duree']; ?></td>
          <td><?php echo $contrat['nom_client']; ?></td>
          <td>
            <a href="supprimer_contrat.php?id=<?php echo $contrat['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce contrat ?');">Supprimer</a>
            <a href="modifier_contrat.php?id=<?php echo $contrat['id']; ?>">Modifier</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php require_once __DIR__ . "/templates/footer.php"; ?>