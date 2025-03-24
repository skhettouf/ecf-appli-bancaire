<?php require_once __DIR__ . "/templates/header.php"; ?>
<h1>Liste des comptes</h1>
  <table>
    <thead>
      <tr>
        <th>Identifiant</th>
        <th>RIB</th>
        <th>Type de compte</th>
        <th>Solde</th>
        <th>Client</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($comptes as $compte): ?>
        <tr>
          <td><?php echo $compte['identifiant_compte']; ?></td>
          <td><?php echo $compte['rib']; ?></td>
          <td><?php echo $compte['type_compte']; ?></td>
          <td><?php echo $compte['solde_initial']; ?></td>
          <td><?php echo $compte['nom_client']; ?></td>
          <td>
            <a href="supprimer_compte.php?id=<?php echo $compte['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte ?');">Supprimer</a>
            <a href="modifier_compte.php?id=<?php echo $compte['id']; ?>">Modifier</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php
  require_once __DIR__ . "/templates/footer.php"; ?>