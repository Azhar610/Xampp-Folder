<?php
    setcookie("username", "", time()-3600);
    setcookie("nama_lengkap", "", time()-3600);
    echo "<h1>cookie ends now , cookie dihapus</h1>";
    echo "<h2>klik <a href='cookies2.php'>di sini </a> untuk mengecek cookies.</h2>";

?>