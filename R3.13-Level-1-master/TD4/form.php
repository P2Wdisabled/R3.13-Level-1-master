<?php

// Vérifie si le formulaire a été soumis via POST
if (isset($_REQUEST['submit'])) {
        // Sérialise les informations
        $user_info_serialized = serialize($_REQUEST);

        // Définir le cookie pour 30 jours
        setcookie('user_info', $user_info_serialized, time() + 24 * 3600);

        // Rediriger vers la même page pour éviter la resoumission du formulaire
        header("Location: form.php");
        exit();
}
$nom = "";
$prenom = "";
$email = "";
$adresse = "";
if (isset($_COOKIE['user_info'])) {
    // Désérialise les informations du cookie
    $user_info_unserialized = unserialize($_COOKIE['user_info']);
    
    // Affiche les informations dans le formulaire
    $nom = $user_info_unserialized['nom'];
    $prenom = $user_info_unserialized['prenom'];
    $email = $user_info_unserialized['email'];
    $adresse = $user_info_unserialized['adresse'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>" required>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $prenom; ?>" required>
        </div>
        <div>
            <label for="email">Adresse Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div>
            <label for="adresse">Adresse Postale :</label>
            <textarea id="adresse" name="adresse" required><?php echo $adresse; ?></textarea>
        </div>
        <div>
            <button type="submit" name="submit" id="submit">Enregistrer</button>
        </div>
    </form>
</body>
</html>
