<?php
include '../../../koneksi.php';

$id=$_POST['id_supir'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$ktp=$_POST['ktp'];
$sim=$_POST['sim'];
$foto_sim=$_POST['foto_sim'];
$tarif=$_POST['tarif'];

$sql="UPDATE supir set nama_supir='$nama',alamat='$alamat',tlp='$tlp',no_ktp='$ktp',no_sim='$sim',file_sim='$foto_sim',tarif_perjam='$tarif' where id_supir='$id'";
$query=mysql_query($sql);

if($query){
	header("location:../supir.php");
}
