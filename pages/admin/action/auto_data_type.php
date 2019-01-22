<?php
//connect ke database
  mysql_connect("localhost","root","");
  mysql_select_db("dbrenmo");
//harus selalu gunakan variabel term saat memakai autocomplete,
//jika variable term tidak bisa, gunakan variabel q
$term = trim(strip_tags($_GET['term']));
 
$qstring = "SELECT a.*,b.* from type_mobil a, merk b where a.id_merk=b.id_merk and nama_type like '%".$term."%'";
//query database untuk mengecek tabel anime 
$result = mysql_query($qstring);
 $json = array();
while ($row = mysql_fetch_array($result))
{
    	$json[] = array(
    		'label' => $row['nama_type'].' - '.$row['nama'], // text sugesti saat user mengetik di input box
    		'value' => $row['id_type'].' - '.$row['nama_type'].' ('.$row['nama'].')', // nilai yang akan dimasukkan diinputbox saat user memilih salah satu sugesti
    		'tarif' => $row['nama_type']
	);
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($json);
?>