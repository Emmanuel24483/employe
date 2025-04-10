<!-- Formulaire pour modifier un employé -->
<h2>Modifier un employé</h2>
<form method="POST" action="index.php?action=update&id=<?= $data['id'] ?>">
    <input type="text" name="nom" value="<?= $data['nom'] ?>" required><br>
    <input type="text" name="prenom" value="<?= $data['prenom'] ?>" required><br>
    <input type="email" name="email" value="<?= $data['email'] ?>" required><br>
    <input type="text" name="poste" value="<?= $data['poste'] ?>"><br>
    <input type="date" name="date_embauche" value="<?= $data['date_embauche'] ?>"><br>
    <button type="submit">Mettre à jour</button>
</form>
<a href="index.php">Retour à la liste</a>
