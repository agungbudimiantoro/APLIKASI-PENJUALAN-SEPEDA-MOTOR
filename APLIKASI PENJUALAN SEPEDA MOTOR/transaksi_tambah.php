<?
mysql_connect('localhost', 'root', '');
mysql_select_db('sepeda_motor');

if (isset($_POST["simpan"])) {
    $kd_transaksi = $_POST["kd_transaksi"];
    $id_pembeli = $_POST["id_pembeli"];
    $kd_motor = $_POST["kd_motor"];
    $tgl_pembelian = $_POST["tgl_pembelian"];
    $harga = $_POST["harga"];


    $data = "INSERT INTO transaksi VALUES('$kd_transaksi','$id_pembeli','$kd_motor','$tgl_pembelian','$harga')";
    $query = mysql_query($data);
    if ($query) {
        echo "<script> 
        alert('data berhasil ditambah');
        document.location.href = 'transaksi.php';
        </script>";
    } else {
        echo "<script> alert('data gagal ditambahkan');</script>";
    }
}
?>



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
    <title>tambah transaksi</title>
    <style>

    </style>
</head>

<body>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <br>
                <h3 align="center">Tambah Data Transaksi</h3>
                <br>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                        <label>KODE TRANSAKSI</label>
                        <input type="text" name="kd_transaksi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ID PEMBELI</label>
                        <input type="text" name="id_pembeli" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>KODE MOTOR</label>
                        <input type="text" name="kd_motor" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>TANGGAL PEMBELIAN</label>
                        <input type="date" name="tgl_pembelian" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>TOTAL TRANSAKSI</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-info">SIMPAN</button>
                </form>
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