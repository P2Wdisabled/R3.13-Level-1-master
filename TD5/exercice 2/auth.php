<?php
// auth.php

//session_start();

$timeout_duration = 10;

if (isset($_SESSION['last_activity'])) {
    $elapsed_time = time() - $_SESSION['last_activity'];
    if ($elapsed_time > $timeout_duration) {
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 42000, '/');
        header("Location: whoareyou.php");
        exit();
        
    }
}

$_SESSION['last_activity'] = time();

?>
