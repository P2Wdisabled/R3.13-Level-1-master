<?php
// Démarrer la session (optionnel si vous utilisez uniquement des cookies)
session_start();

// Vérifier si le cookie 'start_time' est déjà défini
if (!isset($_COOKIE['start_time'])) {
    // Définir le cookie 'start_time' avec l'heure actuelle
    // Le cookie sera supprimé lorsque le navigateur sera fermé (cookie de session)
    setcookie('start_time', time(), 0);
}

// Récupérer le temps de début de la visite
$start_time = $_COOKIE['start_time'];

// Formater l'heure de début
$heure_debut = date("H:i:s", $start_time);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur le site</h1>
    <p>Votre visite a commencé à : <?php echo $heure_debut; ?></p>
    <nav>
        <a href="page2.php">Page 2</a> |
        <a href="page3.php">Page 3</a> |
        <a href="page4.php">Page 4</a>
    </nav>
</body>
</html>
