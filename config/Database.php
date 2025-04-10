<?php
// Classe de gestion de la connexion à la base de données
class Database {
    private $host = "localhost";
    private $db_name = "employee_db";
    private $username = "root";
    private $password = "";
    public $conn;

    // Méthode pour obtenir une connexion PDO
    public function getConnection() {
        $this->conn = null;
        try {
            // Connexion avec PDO
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password
            );
            $this->conn->exec("set names utf8"); // Encodage UTF-8
        } catch(PDOException $exception) {
            // Gestion d'erreur de connexion
            echo "Erreur de connexion : " . $exception->getMessage();
        }
        return $this->conn;
    }
}
