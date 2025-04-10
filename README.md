
# 👨‍💼 CRUD d'Employés en PHP Orienté Objet

Ce projet est une application de gestion d'employés (CRUD : Create, Read, Update, Delete) développée en PHP orienté objet avec MySQL, sans framework.

---

## 🚀 Fonctionnalités

- Ajouter un nouvel employé
- Voir la liste des employés
- Modifier les informations d’un employé
- Supprimer un employé

---

## 📦 Prérequis

Avant d’installer ce projet en local, assurez-vous d’avoir :

- PHP >= 7.4
- MySQL ou MariaDB
- Un serveur local (XAMPP, MAMP, Laragon…)
- Git

---

## ⚙️ Installation

1. **Cloner le projet ou le copier dans le dossier `htdocs` (ou équivalent)**

```bash
https://github.com/Emmanuel24483/employe.git
```

2. **Créer la base de données**

Importez le fichier `database.sql` dans phpMyAdmin ou exécutez-le avec MySQL :

```sql
CREATE DATABASE employee_db;
USE employee_db;

CREATE TABLE employees (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  poste VARCHAR(100),
  date_embauche DATE
);
```

3. **Configurer la connexion à la base de données**

Dans `config/Database.php`, ajustez vos identifiants MySQL :

```php
private $host = 'localhost';
private $db_name = 'employee_db';
private $username = 'root';
private $password = '';
```

4. **Lancer le serveur local**

- Placez le projet dans `htdocs`
- Lancez Apache et MySQL via XAMPP (ou équivalent)
- Accédez à [http://localhost/employe/public](http://localhost/employe/public)

---

## 📂 Structure du projet

```
employe/
├── config/
├── controllers/
├── models/
├── views/
└── public/
```


