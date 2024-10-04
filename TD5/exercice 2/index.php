<?php
// index.php
session_start();

// Vérifie si les données du formulaire ont été soumises
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['prenom']) && isset($_POST['nom'])) {
        // Stocke les informations dans la session
        $_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
        $_SESSION['nom'] = htmlspecialchars($_POST['nom']);
    }
}

// Vérifie si l'utilisateur est authentifié
if (!isset($_SESSION['prenom']) || !isset($_SESSION['nom'])) {
    // Redirige vers whoareyou.php si non authentifié
    header("Location: whoareyou.php");
    exit();
}
if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
    // Redirige vers whoareyou.php si non authentifié
    header("Location: protected_page.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
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

    <h1>Bienvenue sur la page d'accueil</h1>
    <p>Contenu de la page d'accueil.</p>
    <a href="anotherpage.php">Aller à une autre page</a>
</body>
</html>
