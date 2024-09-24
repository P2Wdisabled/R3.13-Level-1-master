<?php
if(isset($_GET["redirect"])){
    if(isset($_COOKIE["test"])){
        echo "le navigateur accepte les cookies";
    }else{
        echo "le navigateur refuse les cookies";
    }
}else{
    setcookie("test", "peut import", time()+24*3600);
    header("Location: cookies.php?redirect=true");
}
?>