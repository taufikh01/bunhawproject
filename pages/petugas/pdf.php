<?php
include  "../../koneksi.php";


$html = '
<h1>Tabel Data Transaksi Rental Mobil</h1>
<table border=1>
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
<td>'.$data['biaya_kerusakan'].'</td>
<td>'.$data['biaya_bbm'].'</td>
<td>'.$data['total_transaksi'].'</td>
</tr>
';
}
$html.='
</table>
';


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