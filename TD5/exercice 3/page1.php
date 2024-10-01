<?php
// page1.php

require_once 'headder.php';

// Récupération des données utilisateur
$prenom = htmlspecialchars($_SESSION['prenom']);
$nom = htmlspecialchars($_SESSION['nom']);

// Récupération du compteur pour cette page
$current_page = basename($_SERVER['PHP_SELF']);
$compteur = $_SESSION['compteurs'][$current_page];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 1</title>
    <style>
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
        Bonjour <?php echo "$prenom $nom"; ?>
    </div>

    <h1>Bienvenue sur la Page 1</h1>
    <p>Vous avez visité cette page <?php echo $compteur; ?> fois durant cette session.</p>
    <a href="page2.php">Aller à la Page 2</a>
</body>
</html>
