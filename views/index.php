<!-- Vue pour afficher la liste des employés -->
<h1>Liste des employés</h1>
<a href="index.php?action=create">Ajouter un employé</a>
<table border="1">
    <tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Poste</th><th>Actions</th></tr>
    <?php foreach ($stmt as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nom'] ?></td>
            <td><?= $row['prenom'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['poste'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $row['id'] ?>">Modifier</a>
                <a href="index.php?action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Supprimer ?')">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
