<?php
// Vérifier si le cookie 'start_time' est défini
if (!isset($_COOKIE['start_time'])) {
    // Rediriger vers la page d'accueil si le cookie n'existe pas
    header("Location: accueil.php");
    exit();
}

// Récupérer le temps de début de la visite
$start_time = $_COOKIE['start_time'];

// Calculer le nombre de secondes écoulées depuis le début de la visite
$seconds_passed = time() - $start_time;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page 3</title>
</head>
<body>
    <h1>Page 3</h1>
    <p>Nombre de secondes depuis le début de votre visite : <?php echo $seconds_passed; ?> secondes.</p>
    <nav>
        <a href="accueil.php">Accueil</a> |
        <a href="page2.php">Page 2</a> |
        <a href="page4.php">Page 4</a>
    </nav>
</body>
</html>
