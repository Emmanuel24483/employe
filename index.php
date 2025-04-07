<?php
require_once 'config.php';           // Connexion à la BD
require_once 'EmployeeManager.php';  // Classe CRUD

// Création de l'objet EmployeeManager
$manager = new EmployeeManager($pdo);

// --- CREATE ---
$emp = new Employee(null, 'Jean Dupont', 'Développeur', 65000.0); // ID = null car auto-incrémenté
$manager->create($emp);

// --- READ ---
$employes = $manager->readAll();
foreach ($employes as $e) {
    echo $e->getNom() . " - " . $e->getPoste() . " - $" . $e->getSalaire() . "<br>";
}

// --- UPDATE ---
$e1 = $employes[0]; // On prend le premier employé
$e1->setSalaire(70000); // On augmente son salaire
$manager->update($e1);  // On enregistre le changement

// --- DELETE ---
// $manager->delete(3); // Supprime l’employé avec l’ID 3 (ligne commentée)
