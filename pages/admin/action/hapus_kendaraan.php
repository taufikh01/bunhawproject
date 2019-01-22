<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from kendaraan where id_mobil='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../mobil.php");
	}
?>