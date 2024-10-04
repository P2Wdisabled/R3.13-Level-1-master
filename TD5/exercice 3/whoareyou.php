<!-- whoareyou.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Qui êtes-vous ?</title>
</head>
<body>
    <h2>Veuillez vous identifier</h2>
    <form action="index.php" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
