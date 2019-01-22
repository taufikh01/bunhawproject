<?php
	include '../../../koneksi.php';

	$username=$_GET['username'];

	$sql="DELETE from login where nik='$nik'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../user.php");
	}
?>