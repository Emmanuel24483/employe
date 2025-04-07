<?php
// Connexion PDO à MySQL avec gestion des erreurs
$dsn = 'mysql:host=localhost;dbname=entreprise;charset=utf8';
$username = 'root';
$password = '';

try {
    // Création d'une instance PDO avec gestion des erreurs activée
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    // Arrête le script si la connexion échoue
    die("Erreur de connexion : " . $e->getMessage());
}
