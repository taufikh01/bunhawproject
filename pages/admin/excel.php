<?php
session_start();
header("Content-Type:application/vnd.ms-excel");
header('Content-Disposition:attachment; filename="report.xls"');
?>
<html>
<head>
<title>Data Transaksi</title>
</head>
<body>
<?php
include  "../../koneksi.php";
echo "
<h1>ThRentCar Report</h1>
<table border=1>
<style>th{background:silver;}</style>
<tr>
<th>No Nota Transaksi</th>
<th>Pendata</th>
<th>Nama Penyewa</th>
<th>Nama Supir yang disewa</th>
<th>Jenis Mobil yang disewa</th>
<th>No Plat Kendaraan</th>
<th>Tanggal Pinjam</th>
<th>Jam Pinjam</th>
<th>Tanggal Kembali</th>
<th>Jam Kembali</th>
<th>Kilometer Pinjam</th>
<th>BBM Pinjam</th>
<th>BBM Kembali</th>
<th>Kondisi Mobil Pinjam</th>
<th>Kondisi Mobil Kembali</th>
<th>Kerusakan</th>
<th>Biaya Kerusakan</th>
<th>Biaya BBM</th>
<th>Total Biaya</th>
</tr>";

 $sql = "select a.*,b.*,c.*,d.*,e.*,f.*,g.*,h.*,b.no_ktp as no_ktp_penyewa,b.tlp as tlp_penyewa,b.alamat as alamat_penyewa from transaksi a,penyewa b,login c,kendaraan d,merk e,type_mobil f,detail_transaksi g,supir h
                                      where a.no_ktp=b.no_ktp and a.nik=c.nik and a.id_mobil=d.id_mobil and e.id_merk=f.id_merk and d.id_type=f.id_type and g.id_supir=h.id_supir and a.id_transaksi=g.id_transaksi ";
$sql1=mysql_query("select sum(biaya_kerusakan)as total1 from detail_transaksi");
$sql2=mysql_query("select sum(biaya_bbm)as total2 from detail_transaksi");
$sql3=mysql_query("select sum(total_transaksi)as total3 from transaksi");
$total1=mysql_fetch_array($sql1);
$total2=mysql_fetch_array($sql2);
$total3=mysql_fetch_array($sql3);
$query = mysql_query($sql);
while($data=mysql_fetch_array($query)){	
 ?>                 

<tr>
<td><?php echo $data['id_detail']?></td>
<td><?php echo $data['nama']?></td>
<td><?php echo $data['nama_penyewa']?></td>
<td><?php echo $data['nama_supir']?></td>
<td><?php echo $data['nama_type']?></td>
<td><?php echo $data['no_plat']?></td>
<td><?php echo $data['tgl_pinjam']?></td>
<td><?php echo $data['jam_pinjam']?></td>
<td><?php echo $data['tgl_kembali']?></td>
<td><?php echo $data['jam_kembali']?></td>
<td><?php echo $data['km_pinjam']?></td>
<td><?php echo $data['bbm_pinjam']?></td>
<td><?php echo $data['bbm_kembali']?></td>
<td><?php echo $data['kondisi_mobil_pinjam']?></td>
<td><?php echo $data['kondisi_mobil_kembali']?></td>
<td><?php echo $data['kerusakan']?></td>
<td>RP.<?php echo number_format($data['biaya_kerusakan'], 0, ",", ".")?></td>
<td>RP.<?php echo number_format($data['biaya_bbm'], 0, ",", ".")?></td>
<td>RP.<?php echo number_format($data['total_transaksi'], 0, ",", ".")?></td>
</tr>
<?php }?>
<tr class="tr">
<style>.tr{background:blue;}.td2{color:blue;}.total{color:;font-size:15px;}</style>
<td colspan="15" class="td1"><div class="total">&nbsp; &nbsp; Total</div></td>
<td class="td2">RP.<?php echo number_format($total1['total1'], 0, ",", ".")?></td>
<td class="td2">RP.<?php echo number_format($total2['total2'], 0, ",", ".")?></td>
<td class="td2">RP.<?php echo number_format($total3['total3'], 0, ",", ".")?></td>
</tr>
</table>
</table>
</body>
</html>