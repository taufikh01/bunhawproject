<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from transaksi where id_transaksi='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../transaksi.php");
	}
?>