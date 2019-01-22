<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from setoran where no_setoran='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../setoran.php");
	}
?>