<?php
date_default_timezone_set('Europe/Paris');

$countername = $_SERVER['REQUEST_URI'];
$count = 1;

if (isset($_COOKIE['stat']) == false) {
    $timestamp = time();
    $all = [
        "timestamp" => $timestamp,
        $countername => $count
    ];

    setcookie('stat', serialize($all));
}
else {
    $all = unserialize($_COOKIE['stat']);
    $timestamp = $all['timestamp'];
    $count = $all[$countername]+1;
    $all[$countername] = $count;
    setcookie('stat', serialize($all));
}

$debut = date('H:i:s', $timestamp);
$elapsed = time() - $timestamp;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur le site</h1>
    <p>Votre visite a commencé à : <?php echo $debut; ?></p>
    <p>Vous avez visité là page : <?php echo $count; ?></p>
    <nav>
        <a href="page2.php">Page 2</a> |
        <a href="page3.php">Page 3</a> |
        <a href="page4.php">Page 4</a>
    </nav>
</body>
</html>
