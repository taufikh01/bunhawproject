<?php
	include '../../../koneksi.php';

	$id=$_GET['id'];

	$sql="DELETE from supir where id_supir='$id'";
	$query=mysql_query($sql);

	if ($query) {
		header("location:../supir.php");
	}
?>