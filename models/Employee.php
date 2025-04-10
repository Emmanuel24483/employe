<?php
// Modèle Employee représentant la table 'employees' dans la base de données
class Employee {
    private $conn;
    private $table = "employees";

    // Attributs de l'employé
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $poste;
    public $date_embauche;

    // Constructeur recevant la connexion à la base
    public function __construct($db) {
        $this->conn = $db;
    }

    // Récupérer tous les employés
    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        return $this->conn->query($query);
    }

    // Récupérer un employé par son ID
    public function getOne() {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$this->id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Créer un nouvel employé
    public function create() {
        $query = "INSERT INTO " . $this->table . " (nom, prenom, email, poste, date_embauche)
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            $this->nom, $this->prenom, $this->email, $this->poste, $this->date_embauche
        ]);
    }

    // Mettre à jour un employé
    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET nom=?, prenom=?, email=?, poste=?, date_embauche=?
                  WHERE id=?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            $this->nom, $this->prenom, $this->email, $this->poste, $this->date_embauche, $this->id
        ]);
    }

    // Supprimer un employé
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id=?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->id]);
    }
}
