<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "<h1>welkam, ".$_SESSION['login'];
        echo "<h2> ini HOME";
        echo "<h2>klik <a href='session3.php'>di sini </a> untuk log out.</h2> ";
    } else {
        die ("Anda belum login , Login dulu ayok <a href='session.php'>di sini </a>") ;
    }
?>