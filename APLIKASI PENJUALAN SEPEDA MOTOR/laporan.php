<?php


require_once("pdf/dompdf_config.inc.php");

mysql_connect('localhost', 'root', '');
mysql_select_db('sepeda_motor');

$html = '<html></body>';
$html .= '<center><h2>LAPORAN TRANSAKSI PENJUALAN SEPEDA MOTOR</h2></center><br/>';
$html .= "<p>Tanggal : ". date('d-m-yy') ." </p><hr/><br/>";
$html .= '<table border="1" align="center" width="100%">
 <tr>
 <th>KODE TRANSAKSI</th>
 <th>ID PEMBELI</th>
 <th>KODE MOTOR</th>
 <th>TANGGAL PEMBELIAN</th>
<th>HARGA</th>
 </tr>';
$query = mysql_query("SELECT * FROM transaksi");
while ($data = mysql_fetch_assoc($query)) :
    $html .= "<tr>
    <td>" . $data['kd_transaksi'] . "</td>
    <td>" . $data['id_pembeli'] . "</td>
    <td>" . $data['kd_motor'] . "</td>
    <td>" . $data['tgl_pembelian'] . "</td>
<td>" . $data['harga'] . "</td>
    </tr>";
endwhile;

$html .= "</table></body></html>";

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('laporan_penjualan.pdf');
