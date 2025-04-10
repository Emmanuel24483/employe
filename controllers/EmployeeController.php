<?php
// Contrôleur de gestion des employés (logique métier)
require_once 'config/Database.php';
require_once 'models/Employee.php';

class EmployeeController {
    private $employee;

    public function __construct() {
        // Création du modèle avec la connexion à la base
        $database = new Database();
        $db = $database->getConnection();
        $this->employee = new Employee($db);
    }

    // Afficher la liste des employés
    public function index() {
        $stmt = $this->employee->getAll();
        include 'views/index.php';
    }

    // Afficher le formulaire d'ajout
    public function create() {
        include 'views/create.php';
    }

    // Enregistrer un nouvel employé (POST)
    public function store() {
        $this->employee->nom = $_POST['nom'];
        $this->employee->prenom = $_POST['prenom'];
        $this->employee->email = $_POST['email'];
        $this->employee->poste = $_POST['poste'];
        $this->employee->date_embauche = $_POST['date_embauche'];
        $this->employee->create();
        header('Location: index.php');
    }

    // Afficher le formulaire d'édition
    public function edit($id) {
        $this->employee->id = $id;
        $data = $this->employee->getOne();
        include 'views/edit.php';
    }

    // Mettre à jour un employé (POST)
    public function update($id) {
        $this->employee->id = $id;
        $this->employee->nom = $_POST['nom'];
        $this->employee->prenom = $_POST['prenom'];
        $this->employee->email = $_POST['email'];
        $this->employee->poste = $_POST['poste'];
        $this->employee->date_embauche = $_POST['date_embauche'];
        $this->employee->update();
        header('Location: index.php');
    }

    // Supprimer un employé
    public function delete($id) {
        $this->employee->id = $id;
        $this->employee->delete();
        header('Location: index.php');
    }
}
