<?php
include '../../../koneksi.php';

$id=$_POST['id_type'];
$merk=substr($_POST['merk'], 0, 5);
$nama=$_POST['nama'];

$sql="UPDATE type_mobil set id_merk='$merk',nama_type='$nama' where id_type='$id'";
$query=mysql_query($sql);

if($query){
	header("location:../type_mobil.php");
}
