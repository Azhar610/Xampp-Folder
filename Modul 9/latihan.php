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


        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin
            <input type="radio" name="sex" value="Pria" checked = "checked" />Pria
            <input type="radio" name="sex" value="Wanita" />Wanita <br />
            <input type="submit" value="ok" />
        </form>
        <!-- untuk meng-set nilai default bisa diberi tambahan ( checked = "checked" ) pada opsi yang ingin dijadikan default 
        pada tampilan nanti radio button yang diberikan default sudah terpilih dan tinggal disubmit-->

        <?php
            if (isset($_POST['sex'])) {
                echo $_POST['sex'];
            }
        ?>


        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin
            <input type="radio" name="sex" value="Pria" checked <?php if ($_POST['sex'] == 'Pria') {echo 'checked="checked"';}?>/>Pria
            <input type="radio" name="sex" value="Wanita" <?php if ($_POST['sex'] == 'Wanita') { echo 'checked="checked"'; } ?> />Wanita <br />
            <input type="submit" value="ok" />
        </form>
        <!-- pada form di atas akan terdapat error tapi tidak terlalu bermasalah karena name = sex tidak mempunyai nilai awal sebelum user menginput / mengsubmit pilihannya-->
        <?php
            if (isset($_POST['sex'])) {
                echo $_POST['sex'];
            }
        ?>


        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Pekerjaan
            <select name="job">
            <option value="Mahasiswa">Mahasiswa
            <option value="ABRI">ABRI
            <option value="PNS">PNS
            <option value="Swasta">Swasta
            </select> <br />
            <input type="submit" value="ok" />
        </form>
        <?php
            if (isset($_POST['job'])) {
                echo $_POST['job'];
            }
        ?>
    </body>
</html>