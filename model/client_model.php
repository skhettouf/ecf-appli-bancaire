<?php

class ClientModel {
  private $db;

  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=ecf_2', 'root', '');
  }

  public function ajouterClient($data) {
// Validation des données à verifier
    if (empty($data['nom']) || empty($data['prenom']) || empty($data['email']) || empty($data['telephone'])) {
      return false;
    }

    $stmt = $this->db->prepare("INSERT INTO clients (nom, prenom, email, telephone, adresse) VALUES (?, ?, ?, ?, ?)");

    return $stmt->execute([$data['nom'], $data['prenom'], $data['email'], $data['telephone'], $data['adresse']]);
  }

  public function getListeClients() {
    $stmt = $this->db->query("SELECT * FROM clients");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function supprimerClient($id) {
    $stmt = $this->db->prepare("SELECT COUNT(*) FROM comptes WHERE numero_client = ?");
    $stmt->execute([$id]);
    $countComptes = $stmt->fetchColumn();

    if ($countComptes > 0) {
      return false; 
    }
    $stmt = $this->db->prepare("SELECT COUNT(*) FROM contrats WHERE numero_client = ?");
    $stmt->execute([$id]);
    $countContrats = $stmt->fetchColumn();

    if ($countContrats > 0) {
      return false; 
    }

    $stmt = $this->db->prepare("DELETE FROM clients WHERE id = ?");
    return $stmt->execute([$id]);
  }

  public function modifierClient($data) {
    $stmt = $this->db->prepare("UPDATE clients SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?");
    return $stmt->execute([$data['nom'], $data['prenom'], $data['email'], $data['telephone'], $data['id']]);
  }

  
}
?>