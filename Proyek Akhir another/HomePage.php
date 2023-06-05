<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "
        <!DOCTYPE html>
        <html>
            <head>
                <title>Home</title>
                <link href='style.css' rel='stylesheet' type='text/css'>
                <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.1/css/all.css'>
            </head>
            <body>
                <nav class='navtop'>
                    <div>
                        <h1>Home Web</h1>
                        <a href='HomePage.php'><i class='fas fa-home'></i>Home</a>
                        <a href='CRUD.php'><i class='fas fa-address-book'></i>List Buku</a>
                    </div>
                </nav>
            </body>
        </html>
        ";
    } else {
        die ("Login dulu <a href='LoginPage.php'>di sini </a>") ;
    }
?>


