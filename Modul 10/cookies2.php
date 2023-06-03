<?php
    if (isset($_COOKIE['username'])) {
        echo "<h1>cookie 'username' ada </h1>". "<br> user = ".$_COOKIE['username'];
    } else {
        echo "<h1>'username' cookie's doesn't exist";
    }

    if (isset($_COOKIE['nama_lengkap'])) {
        echo "<h1>cookie 'nama_lengkap' ada </h1>". "<br> user = ".$_COOKIE['nama_lengkap'];
    } else {
        echo "<h1>'nama_lengkap' cookie's doesn't exist";
    }
    echo "<h2>klik <a href='cookies3.php'>di sini </a> untuk menghapus cookies.</h2>";
?>