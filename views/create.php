<!-- Formulaire pour ajouter un employé -->
<h2>Ajouter un employé</h2>
<form method="POST" action="index.php?action=store">
    <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="text" name="prenom" placeholder="Prénom" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="poste" placeholder="Poste"><br>
    <input type="date" name="date_embauche"><br>
    <button type="submit">Enregistrer</button>
</form>
<a href="index.php">Retour à la liste</a>
