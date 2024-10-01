<?php
// auth.php

session_start();

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
?>
