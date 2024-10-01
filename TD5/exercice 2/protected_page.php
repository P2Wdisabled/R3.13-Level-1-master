<?php
// protected_page.php


require_once 'auth.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page protégée</title>
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
        Bonjour <?php echo htmlspecialchars($_SESSION['prenom'] . ' ' . $_SESSION['nom']); ?>
    </div>

    <h1>Bienvenue sur la page protégée</h1>
    <p>Contenu réservé aux utilisateurs authentifiés.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
