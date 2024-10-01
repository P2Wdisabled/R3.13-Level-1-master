<?php
// header.php

session_start();

// Vérification de l'authentification de l'utilisateur
if (!isset($_SESSION['prenom']) || !isset($_SESSION['nom'])) {
    header("Location: whoareyou.php");
    exit();
}

// Définir la durée maximale d'inactivité (facultatif, en fonction de la question précédente)
$timeout_duration = 3600; // 1 heure

if (isset($_SESSION['last_activity'])) {
    $elapsed_time = time() - $_SESSION['last_activity'];
    if ($elapsed_time > $timeout_duration) {
        session_unset();
        session_destroy();
        header("Location: accueil.php");
        exit();
    }
}

$_SESSION['last_activity'] = time();

// Gestion du compteur de visites
// Récupère le nom de la page actuelle
$current_page = basename($_SERVER['PHP_SELF']);

// Initialisation du compteur pour la page actuelle si ce n'est pas déjà fait
if (!isset($_SESSION['compteurs'][$current_page])) {
    $_SESSION['compteurs'][$current_page] = 0;
}

// Incrémentation du compteur pour la page actuelle
$_SESSION['compteurs'][$current_page]++;
?>
