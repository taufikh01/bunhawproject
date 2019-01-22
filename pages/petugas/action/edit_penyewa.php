<?php
include '../../../koneksi.php';

$ktp=$_POST['ktp'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$foto_ktp=$_POST['foto_ktp'];

$sql="UPDATE penyewa set nama_penyewa='$nama',alamat='$alamat',tlp='$tlp',file_ktp='$foto_ktp' where no_ktp='$id'";
$query=mysql_query($sql);

if($query){
	header("location:../penyewa.php");
}
