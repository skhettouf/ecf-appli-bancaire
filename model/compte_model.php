<?php

class CompteModel {
  private $db;

  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=ecf_2', 'root', '');
  }
  public function getListeClients() {
    $stmt = $this->db->query("SELECT id, nom, prenom FROM client");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function ajouterCompte($data) {
    $identifiant_compte = uniqid();

    $stmt = $this->db->prepare("INSERT INTO compte (identifiant_compte, rib, 'type', solde, numero_client) VALUES (?, ?, ?, ?, ?)");
    try {
      $stmt->execute([$identifiant_compte, $data['rib'], $data['type'], $data['solde'], $data['numero_client']]);
      return true;
    } catch (PDOException $e) {

      error_log("Erreur lors de l'ajout du compte : " . $e->getMessage());
      return false;}
    }

    public function getListeComptes() {
    $stmt = $this->db->query("SELECT compte.*, client.nom AS nom_client FROM compte JOIN client ON compte.numero_client = client.id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function supprimerCompte($id) {
    $stmt = $this->db->prepare("DELETE FROM compte WHERE id = ?");
    return $stmt->execute([$id]);
  }

  public function modifierCompte($data) {
    $stmt = $this->db->prepare("UPDATE compte SET 'type' = ?, solde = ? WHERE id = ?");
    return $stmt->execute([$data['type'], $data['solde'], $data['id']]);
  }

 
}
?>