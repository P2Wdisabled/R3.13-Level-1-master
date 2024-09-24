<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    
    // Valider le thème sélectionné pour des raisons de sécurité
    $themes_autorises = ['eau', 'terre', 'feu', 'air', 'piflechien'];
    if (in_array($theme, $themes_autorises)) {
        // Définir le cookie pour 30 jours
        setcookie('theme', $theme, time() + 24 * 60);
    }
    
    // Rediriger vers la même page pour appliquer le thème
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Récupère le thème actuel à partir du cookie s'il existe
$theme = "eau";
if (isset($_COOKIE['theme'])){
    $theme = $_COOKIE['theme'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du Thème</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class=<?php echo $theme;?>>
    <form method="post" action="">
        <label for="theme">Choisissez un thème :</label>
        <select id="theme" name="theme" onchange="this.form.submit()">
            <option value="eau" <?php if($theme == 'eau') echo 'selected'; ?>>Eau</option>
            <option value="terre" <?php if($theme == 'terre') echo 'selected'; ?>>Terre</option>
            <option value="feu" <?php if($theme == 'feu') echo 'selected'; ?>>Feu</option>
            <option value="air" <?php if($theme == 'air') echo 'selected'; ?>>Air</option>
            <option value="piflechien" <?php if($theme == 'piflechien') echo 'selected'; ?>>Piflechien</option>
        </select>
    </form>
</body>
</html>
