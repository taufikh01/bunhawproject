<?php
include  "../../koneksi.php";


$html = '
<center><h1>ThRentCar Report</h1></center>
<hr>
<p>Tabel Data Transaksi Rental Mobil</p>
<table border=1>
<style>th{background:#CCCCFF;}</style>
<tr>
<th>No Nota Transaksi</th>
<th>Pendata</th>
<th>Nama Penyewa</th>
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
</tr>
';
$sql = "select a.*,b.*,c.*,d.*,e.*,f.*,g.* from transaksi a,penyewa b,login c,kendaraan d,merk e,type_mobil f,detail_transaksi g
        where a.no_ktp=b.no_ktp and a.nik=c.nik and a.id_mobil=d.id_mobil and e.id_merk=f.id_merk and d.id_type=f.id_type and a.id_transaksi=g.id_transaksi ";
$sql1=mysql_query("select sum(biaya_kerusakan)as total1 from detail_transaksi");
$sql2=mysql_query("select sum(biaya_bbm)as total2 from detail_transaksi");
$sql3=mysql_query("select sum(total_transaksi)as total3 from transaksi");
$total1=mysql_fetch_array($sql1);
$total2=mysql_fetch_array($sql2);
$total3=mysql_fetch_array($sql3);
$query = mysql_query($sql);
while($data=mysql_fetch_array($query)){	
$html.='
<tr>
<td>'.$data['id_detail'].'</td>
<td>'.$data['nama'].'</td>
<td>'.$data['nama_penyewa'].'</td>
<td>'.$data['nama_type'].'</td>
<td>'.$data['no_plat'].'</td>
<td>'.$data['tgl_pinjam'].'</td>
<td>'.$data['jam_pinjam'].'</td>
<td>'.$data['tgl_kembali'].'</td>
<td>'.$data['jam_kembali'].'</td>
<td>'.$data['km_pinjam'].'</td>
<td>'.$data['bbm_pinjam'].'</td>
<td>'.$data['bbm_kembali'].'</td>
<td>'.$data['kondisi_mobil_pinjam'].'</td>
<td>'.$data['kondisi_mobil_kembali'].'</td>
<td>'.$data['kerusakan'].'</td>
<td>RP.'.number_format($data['biaya_kerusakan'], 0, ",", ".").'</td>
<td>RP.'.number_format($data['biaya_bbm'], 0, ",", ".").'</td>
<td>RP.'.number_format($data['total_transaksi'], 0, ",", ".").'</td>
</tr>
';
}
$html.='
<tr>
<style>.td1{background:#CCCCFF;}.total{color:;font-size:25px;}</style>
<td colspan="15" class="td1"><div class="total">&nbsp;&nbsp;Total</div></td>
<td class="">RP.'.number_format($total1['total1'], 0, ",", ".").'</td>
<td class="">RP.'.number_format($total2['total2'], 0, ",", ".").'</td>
<td class="">RP.'.number_format($total3['total3'], 0, ",", ".").'</td>
';
$html.='
</table>
';
echo"
<br>
<br>
<br>        
<br>
<br>
<br>
<br>
<br>        
<br>
<br>
";
//==============================================================
//==============================================================
//==============================================================

include("../../pdf/mpdf.php");

$mpdf=new mpdf(); 

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>