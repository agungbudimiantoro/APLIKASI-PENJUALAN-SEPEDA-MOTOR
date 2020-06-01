<?
mysql_connect('localhost', 'root', '');
mysql_select_db('sepeda_motor');
$id = $_GET["id"];

$q = "DELETE FROM transaksi WHERE kd_transaksi='$id'";
$query = mysql_query($q);
if ($query) {
    echo "<script> 
    alert('data berhasil dihapus');
    document.location.href = 'transaksi.php';
    </script>";
} else {
    echo "<script> alert('data gagal dihapus');</script>";
}
