<?php
// Récupérer et sécuriser l'URI actuelle
$uri = htmlspecialchars($_SERVER['REQUEST_URI']);

// Encoder l'URI pour correspondre au nom du cookie utilisé lors de la définition
$encoded_uri = urlencode($uri);
$cookie_name = 'uri_' . $encoded_uri;

// Vérifier si le cookie pour l'URI est défini
if (!isset($_COOKIE[$cookie_name])) {
    // Rediriger vers la page d'accueil si le cookie n'existe pas
    header("Location: accueil.php");
    exit();
}

// Décoder les données JSON du cookie
$cookieData = json_decode($_COOKIE[$cookie_name], true);

// Vérifier que les données du cookie sont valides
if (!$cookieData || !isset($cookieData['start_time']) || !isset($cookieData['visites'])) {
    // Rediriger si les données sont invalides ou manquantes
    header("Location: accueil.php");
    exit();
}

// Récupérer le temps de début de la visite
$start_time = $cookieData['start_time'];

// Calculer le nombre de secondes écoulées depuis le début de la visite
$seconds_passed = time() - $start_time;

// Récupérer le nombre de visites
$visites = $cookieData['visites'];

// Optionnel : Mettre à jour le nombre de visites si nécessaire
// Si vous souhaitez incrémenter le nombre de visites à chaque accès à cette page
/*
$visites += 1;
$cookieData['visites'] = $visites;

// Réencoder les données JSON
$cookieJson = json_encode($cookieData);

// Mettre à jour le cookie
setcookie($cookie_name, $cookieJson, 0, "/");
*/

// Exemple d'affichage
echo "Nombre de visites : " . htmlspecialchars($visites) . "<br>";
echo "Temps écoulé depuis le début de la visite : " . htmlspecialchars($seconds_passed) . " secondes.";
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
