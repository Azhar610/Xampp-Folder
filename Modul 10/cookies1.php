<?php
    $value1 = 'ani' ;
    $value2 = 'Ani Roma' ;
    setcookie("username", $value1);
    setcookie("nama_lengkap", $value2, time()+3600);
    echo "<h2>halaman set cookie</h2>";
    echo "<h2>klik <a href='cookies2.php'>di sini </a> untuk mengecek cookies.</h2>";
?>
