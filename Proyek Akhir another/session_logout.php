<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset($_SESSION);
        session_destroy();
        echo "<h1>Anda sudah log out";
        echo "<h2>klik <a href='LoginPage.php'>di sini </a> untuk login lagi.</h2> ";
    } 
?>