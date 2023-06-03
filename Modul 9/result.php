<!DOCTYPE html>
<html>
    <head>
        <title>Moment of Truth</title>
    </head>
    <body>
        <?php
            if ($_POST['username'] == 'budi' AND $_POST['pass'] == 'mie ayam') {
                echo '<center>welkam, '. $_POST['username'];
            } else {
                echo "<center>kamu bukan budi, panggil si budi";
                echo "<center><a href='Studi_Kasus.html'><h4>balik</h4></a>";
            }
        ?>
    </body>
</html>