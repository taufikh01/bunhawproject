<?php
//connect ke database
  mysql_connect("localhost","root","");
  mysql_select_db("dbrenmo");
//harus selalu gunakan variabel term saat memakai autocomplete,
//jika variable term tidak bisa, gunakan variabel q
$term = trim(strip_tags($_GET['term']));
 
$qstring = "SELECT a.*,b.*,c.* from kendaraan a, type_mobil b, merk c where a.id_type=b.id_type and b.id_merk=c.id_merk and nama like '%".$term."%'";
//query database untuk mengecek tabel anime 
$result = mysql_query($qstring);
 $json = array();
while ($row = mysql_fetch_array($result))
{
    	$json[] = array(
    		'label' => $row['nama'].' - '.$row['nama_type'], // text sugesti saat user mengetik di input box
    		'value' => $row['id_mobil'].' - '.$row['nama'].' '.$row['nama_type'], // nilai yang akan dimasukkan diinputbox saat user memilih salah satu sugesti
    		'tarif' => $row['tarif_per_jam']
	);
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($json);
?>