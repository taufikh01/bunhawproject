<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from merk where id_merk='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../merkmobil.php");
	}
?>