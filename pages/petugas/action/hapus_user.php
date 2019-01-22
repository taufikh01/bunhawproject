<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from login where no='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../login.php");
	}
?>