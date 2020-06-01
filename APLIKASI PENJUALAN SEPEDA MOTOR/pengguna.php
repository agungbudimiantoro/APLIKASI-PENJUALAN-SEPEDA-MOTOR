<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>pembeli</title>
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="admin.php">HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="pembeli.php">Pembeli</a>
                    <a class="nav-item nav-link" href="kendaraan.php">kendaraan</a>
                    <a class="nav-item nav-link" href="transaksi.php">Transaksi</a>
                    <a class="nav-item nav-link" href="index.php">Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <br>
                <h3>Pembeli</h3>
                <br>
                <a href="pembeli_tambah.php" class="btn btn-primary">Tambah Data pembeli</a>
                <br>
                <hr>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID PEMBELI</th>
                            <th scope="col">NAMA PEMBELI</th>
                            <th scope="col">TANGGAL LAHIR</th>
                            <th scope="col">JENIS KELAMIN</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? //$query = mysql_query("SELECT * FROM pembeli");
                        //while ($data = mysql_fetch_assoc($query)) :
                        ?>


                        <tr>
                            <td><? //echo $data["id_pembeli"]; 
                                ?></td>
                            <td><? //echo $data["nama_pembeli"]; 
                                ?></td>
                            <td><? //echo $data["tgl_lahir"]; 
                                ?></td>
                            <td><? //echo $data["jenis_kelamin"]; 
                                ?></td>
                            <td><? //echo $data["alamat"]; 
                                ?></td>
                            <td><a href="pembeli_ubah.php?id=<? //echo $data["id_pembeli"]; 
                                                                ?>" class="badge badge-warning">ubah</a>
                                <a href="pembeli_hapus.php?id=<? //echo $data["id_pembeli"]; 
                                                                ?>" class="badge badge-danger">Hapus</a></td>

                            <?
                            //endwhile;
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>