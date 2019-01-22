<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from pemilik where id_pemilik='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../pemilik.php");
	}
?>