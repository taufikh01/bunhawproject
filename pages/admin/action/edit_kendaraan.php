<?php
include '../../../koneksi.php';

$id=$_POST['id_mobil'];
$id_type=substr($_POST['type'], 0, 5);
$pemilik=substr($_POST['pemilik'], 0, 5);
$noplat=$_POST['noplat'];
$tahun=$_POST['tahun'];
$tarif=$_POST['tarif'];
$status=$_POST['status'];

$sql="UPDATE kendaraan set id_type='$id_type',id_pemilik='$pemilik',no_plat='$noplat',tahun_mobil='$tahun',tarif_per_jam='$tarif',status_rental='$status' where id_mobil='$id'";
$query=mysql_query($sql);

if($query){
	header("location:../kendaraan.php");
}
