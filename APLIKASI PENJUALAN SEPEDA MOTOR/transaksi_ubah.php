<?
mysql_connect('localhost', 'root', '');
mysql_select_db('sepeda_motor');

if (isset($_POST["simpan"])) {
    $kd_transaksi = $_POST["kd_transaksi"];
    $id_pembeli = $_POST["id_pembeli"];
    $kd_motor = $_POST["kd_motor"];
    $tgl_pembelian = $_POST["tgl_pembelian"];
    $harga = $_POST["harga"];


   $data = "UPDATE transaksi SET id_pembeli='$id_pembeli', kd_transaksi='$kd_transaksi', tgl_pembelian='$tgl_pembelian', kd_motor='$kd_motor', harga='$harga' WHERE kd_transaksi='$kd_transaksi'";
    $query = mysql_query($data);
    if ($query) {
        echo "<script> 
        alert('data berhasil diubah');
        document.location.href = 'transaksi.php';
        </script>";
    } else {
        echo "<script> alert('data gagal diubah');</script>";
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
    <title>ubah transaksi</title>
    <style>

    </style>
</head>

<body>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <br>
                <h3 align="center">Ubah Data Transaksi</h3>
                <br>
                <hr>
                <form action="" method="post">
			<?
                            $qu = "SELECT * FROM transaksi where kd_transaksi='$id'";
                            $q = mysql_query($qu);
                            while ($data = mysql_fetch_assoc($q)) :
                            ?>
                    <div class="form-group">
                        <label>KODE TRANSAKSI</label>
                        <input type="text" name="kd_transaksi"  value="<? echo $data['kd_transaksi']; ?>" readonly class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>ID PEMBELI</label>
                        <input type="text" name="id_pembeli"  value="<? echo $data['id_pembeli']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>KODE MOTOR</label>
                        <input type="text" name="kd_motor"  value="<? echo $data['kd_motor']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>TANGGAL PEMBELIAN</label>
                        <input type="date" name="tgl_pembelian"  value="<? echo $data['tgl_pembelian']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>TOTAL TRANSAKSI</label>
                        <input type="number" name="harga"  value="<? echo $data['harga']; ?>" class="form-control" required>
                    </div>
		<? endwhile; ?>
                    <button type="submit" name="simpan" class="btn btn-info">UBAH</button>
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