<?php
// anotherpage.php
session_start();

// Vérifie si l'utilisateur est authentifié
if (!isset($_SESSION['prenom']) || !isset($_SESSION['nom'])) {
    // Redirige vers whoareyou.php si non authentifié
    header("Location: whoareyou.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Une Autre Page</title>
    <style>
        /* Style pour le message de bienvenue */
        .welcome {
            position: fixed;
            top: 10px;
            right: 10px;
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="welcome">
        Bonjour <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?>
    </div>

    <h1>Bienvenue sur une autre page</h1>
    <p>Contenu de cette autre page.</p>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>
