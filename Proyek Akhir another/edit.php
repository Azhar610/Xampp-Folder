<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "listbuku";

    $connection = new mysqli($servername, $username, $password, $database);

    $judul = "";
    $nomorseri = "";
    $pengarang = "";
    $penerbit = "";
    $tahun = "";

    $errormsg = "";
    $succesmsg = "";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (!isset($_GET["id"])) {
            header("location: CRUD.php");
            exit;
        }

        $id = $_GET["id"];

        $sql = "SELECT * FROM listbuku WHERE id=$id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();

        if (!$row) {
            header("location: CRUD.php");
            exit;
        }

        $judul = $row["judul"];
        $nomorseri =$row["nomorseri"];
        $pengarang =$row["pengarang"];
        $penerbit = $row["penerbit"];
        $tahun = $row["tahun"];

    } else {
        $judul = $_POST['judul'];
        $nomorseri = $_POST['nomorseri'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        $id = $_POST['id'];
        do {
            if (empty($judul) || empty($nomorseri)|| empty($pengarang)|| empty($penerbit)|| empty($tahun)) {
                $errormsg = "Isi bagian yang kosong!";
                break;
            }
            $sql = "UPDATE listbuku ".
                   "SET judul = '$judul', nomorseri = '$nomorseri', pengarang = '$pengarang', penerbit = '$penerbit', tahun = '$tahun'".
                   "WHERE id = $id";
            $result = $connection->query($sql);

            if (!$result) {
                $errormsg = "Query gagal : ".$connection->error;
                break;
            }
            $succesmsg = "Buku telah ditambahkan!";

            header("location: CRUD.php");
            exit;
        } while (false);
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>List Buku</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container my-5">
            <h2>Tambah Buku</h2>
                <?php
                    if (!empty($errormsg)) {
                        echo "
                        <div class ='alert alert-warning alert-dismissible fade-show' role='alert'>
                            <strong>$errormsg</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                        ";
                    }
                ?>
            
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $id?>">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-table">Judul Buku</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="judul" value="<?php echo $judul;?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-table">Nomor Seri</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nomorseri" value="<?php echo $nomorseri;?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-table">Pengarang</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="pengarang" value="<?php echo $pengarang;?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-table">Penerbit</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="penerbit" value="<?php echo $penerbit;?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-table">Tahun</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="tahun" value="<?php echo $tahun;?>">
                    </div>
                </div>
                <?php
                    if (!empty($succesmsg)) {
                        echo "
                            <div class='row mb-3'>
                                <div class='offset-sm-3 col-sm-3 d-grid'>
                                    <div class ='alert alert-warning alert-dismissible fade-show' role='alert'>
                                        <strong>$succesmsg</strong>
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    
                ?>

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="CRUD.php" role="button">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>