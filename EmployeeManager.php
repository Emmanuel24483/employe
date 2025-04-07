<?php
require_once 'Employee.php';

// Classe responsable de la gestion des employés (CRUD)
class EmployeeManager
{
    public function __construct(private PDO $pdo) {}

    // Créer un employé dans la base de données
    public function create(Employee $employee): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO employees (nom, poste, salaire) VALUES (?, ?, ?)");
        $stmt->execute([
            $employee->getNom(),
            $employee->getPoste(),
            $employee->getSalaire()
        ]);
    }

    // Lire tous les employés depuis la base de données
    public function readAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM employees");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Convertit chaque ligne en objet Employee
        return array_map(fn($row) =>
            new Employee($row['id'], $row['nom'], $row['poste'], $row['salaire']),
            $rows
        );
    }

    // Mettre à jour un employé existant
    public function update(Employee $employee): void
    {
        $stmt = $this->pdo->prepare("UPDATE employees SET nom = ?, poste = ?, salaire = ? WHERE id = ?");
        $stmt->execute([
            $employee->getNom(),
            $employee->getPoste(),
            $employee->getSalaire(),
            $employee->getId()
        ]);
    }

    // Supprimer un employé par ID
    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->execute([$id]);
    }
}
