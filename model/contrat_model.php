<?php

class ContratModel {
  private $db;

  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=ecf_2', 'root', '');
  }
  public function getListeClients() {
    $stmt = $this->db->query("SELECT id, nom, prenom FROM client");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function ajouterContrat($data) {
    $identifiant_contrat = uniqid();


 $stmt = $this->db->prepare("INSERT INTO contrat (identifiant_contrat, 'type', montant, duree, numero_client) VALUES (?, ?, ?, ?, ?)");

   
    return $stmt->execute([$identifiant_contrat, $data['type'], $data['montant'], $data['duree'], $data['numero_client']]);
  }

public function getListeContrats() {

    $stmt = $this->db->query("SELECT contrat.*, clients.nom AS nom_client FROM contrat JOIN client ON contrat.numero_client = client.id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function supprimerContrat($id) {
    $stmt = $this->db->prepare("DELETE FROM contrat WHERE id = ?");
    return $stmt->execute([$id]);
  }

  public function modifierContrat($data) {
    $stmt = $this->db->prepare("UPDATE contrat SET montant = ?, duree = ? WHERE id = ?");
    return $stmt->execute([$data['montant'], $data['duree'], $data['id']]);
  }
}
?>