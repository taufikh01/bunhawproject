<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from type_mobil where id_type='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../typemobil.php");
	}
?>