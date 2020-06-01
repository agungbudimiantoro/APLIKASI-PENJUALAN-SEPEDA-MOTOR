<?
mysql_connect('localhost', 'root', '');
mysql_select_db('sepeda_motor');

$id = $_GET["id"];

if (isset($_POST["simpan"])) {
   $id_pembeli = $_POST["id_pembeli"];
    $nama_pembeli = $_POST["nama_pembeli"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];


    $data = "UPDATE pembeli SET id_pembeli='$id_pembeli', nama_pembeli='$nama_pembeli', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id_pembeli='$id_pembeli'";
    $query = mysql_query($data);
    if ($query) {
        echo "<script> 
        alert('data berhasil diubah');
        document.location.href = 'pembeli.php';
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
    <title>ubah pengguna</title>
    <style>

    </style>
</head>

<body>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <br>
                <h3 align="center">Ubah Data Pembeli</h3>
                <br>
                <hr>
                <form action="" method="post">
  			<?
                            $qu = "SELECT * FROM pembeli where id_pembeli='$id'";
                            $q = mysql_query($qu);
                            while ($data = mysql_fetch_assoc($q)) :
                            ?>
                    <div class="form-group">
                        <label>ID PEMBELI</label>
                        <input type="text" name="id_pembeli" value="<? echo $data['id_pembeli']; ?>" readonly class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NAMA PEMBELI</label>
                        <input type="text" name="nama_pembeli" value="<? echo $data['nama_pembeli']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>TANGGAL LAHIR</label>
                        <input type="date" name="tgl_lahir" value="<? echo $data['tgl_lahir']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>JENIS KELAMIN</label>
                        <select class="custom-select" name="jenis_kelamin" required>
<? if($data['jenis_kelamin'] == 'perempuan') : ?>
                            <option value="perempuan" selected>Perempuan</option>
			    <option value="laki-laki">laki-laki</option>
<? else : ?>
                            <option value="perempuan">Perempuan</option>
			    <option value="laki-laki" selected>laki-laki</option>
<? endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ALAMAT</label>
                        <input type="text" name="alamat" value="<? echo $data['alamat']; ?>" class="form-control" required>
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