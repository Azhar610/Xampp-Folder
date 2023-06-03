<!DOCTYPE html>
<html>
    <head>
        <title>Metode Get</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method = "post"> nama
            <input type="text" name = "nama" /><br/>
            <input type="submit" value ="OK">
        </form>
        <!-- method get tidak bisa digunakan untuk method post , sebaliknya juga sama 
        tapi pada method post data yang diinput akan dipertahankan saat website direfresh
        mungkin karena namanya post maka data tersebut diposting seperti pada memposting sesuatu pada sosmed
        dan method get hanya "memberikan" data pada waktu tertentu-->
        <?php

            if (isset($_REQUEST['nama'])) {
                echo 'Metode, '.$_SERVER['REQUEST_METHOD'];
            }
        ?>


        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Nama
        <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>"/> <br />
        <input type="submit" value="OK" />
        </form>

        <?php
            if (isset($_POST['nama'])) {
                echo $_POST['nama'];
            }
        ?>
    </body>
</html>