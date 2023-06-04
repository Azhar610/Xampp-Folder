<!DOCTYPE html>
<html>
    <head>
        <title>List Buku</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container my-5">
            <h2>List Buku</h2>
            <a class="btn btn-primary" href="create.php" role="button">Tambah Buku</a>
            <a class="btn btn-primary" href="session_logout.php" role="button">Log Out</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Nomor Seri</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "listbuku";

                        $connection = new mysqli($servername, $username, $password, $database);
                        if ($connection->connect_error) {
                            die("Koneksi gagal : ".$connection->connect_error);
                        }

                        $sql = "SELECT * FROM listbuku";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Query gagal : ".$connection->error);
                        }

                        while ($row = $result->fetch_assoc()) {
                            echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[judul]</td>
                                    <td>$row[nomorseri]</td>
                                    <td>$row[pengarang]</td>
                                    <td>$row[penerbit]</td>
                                    <td>$row[tahun]</td>
                                    <td>
                                        <a class='btn btn-primary' href='edit.php?id=$row[id]'>Edit</a>
                                        <a class='btn btn-primary' href='delete.php?id=$row[id]' >Hapus</a>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </body>
</html>