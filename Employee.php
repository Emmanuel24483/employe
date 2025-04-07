<?php
// Classe représentant un employé
class Employee
{
    // Constructeur utilisant la promotion de propriétés
    public function __construct(
        private ?int $id,          // Peut être null lors de la création
        private string $nom,
        private string $poste,
        private float $salaire
    ) {}

    // Getters
    public function getId(): ?int { return $this->id; }
    public function getNom(): string { return $this->nom; }
    public function getPoste(): string { return $this->poste; }
    public function getSalaire(): float { return $this->salaire; }

    // Setters
    public function setNom(string $nom): void { $this->nom = $nom; }
    public function setPoste(string $poste): void { $this->poste = $poste; }
    public function setSalaire(float $salaire): void { $this->salaire = $salaire; }
}
