<?php
//connect ke database
  mysql_connect("localhost","root","");
  mysql_select_db("dbrenmo");
//harus selalu gunakan variabel term saat memakai autocomplete,
//jika variable term tidak bisa, gunakan variabel q
$term = trim(strip_tags($_GET['term']));
 
$qstring = "SELECT * from merk where nama like '%".$term."%'";
//query database untuk mengecek tabel anime 
$result = mysql_query($qstring);
 $json = array();
while ($row = mysql_fetch_array($result))
{
    	$json[] = array(
    		'label' => $row['nama'].' - '.$row['id_merk'], // text sugesti saat user mengetik di input box
    		'value' => $row['id_merk'].' - '.$row['nama'], // nilai yang akan dimasukkan diinputbox saat user memilih salah satu sugesti
    		'tarifsupir' => $row['nama']
	);
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($json);
?>