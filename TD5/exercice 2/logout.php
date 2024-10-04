<?php
if (isset($_SESSION['nom'])) {
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 42000);
}

header("Location: whoareyou.php");
        exit();
?>