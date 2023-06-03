<?php
    session_start();
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['pass'];

        if ($user == "ani" && $pass == "1111") {
            $_SESSION['login'] = $user;

            echo "<h1>login succesful;";
            echo "<h2>klik <a href='session2.php'>di sini </a> untuk menuju halaman pemeriksaan session.</h2>";
        }
    } else {
        ?>
            <html>
                <head>
                    <title>Login dulu</title>
                </head>
                <body>
                    <form action="" method="post">
                        <h2>Login</h2>
                        Username : <input type="text" name="username" ><br>
                        Password &nbsp;: <input type="password" name="pass" ><br>
                        <input type="submit" name="login" value="login">
                    </form>
                </body>
            </html>
        <?php
    }
?>