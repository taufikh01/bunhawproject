<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from service where id_service='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../service.php");
	}
?>