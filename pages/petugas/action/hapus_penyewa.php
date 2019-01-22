<?php
	include '../../../koneksi.php';

	$no=$_GET['no'];

	$sql="DELETE from penyewa where no='$no'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../penyewa.php");
	}
?>