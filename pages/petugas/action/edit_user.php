<?php
include '../../../koneksi.php';

$id=$_POST['nik'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$type=$_POST['type'];

$sql="UPDATE login set username='$username',password='$password',nama='$nama',alamat='$alamat',tlp='$tlp',type_login='$type' where nik='$id'";
$query=mysql_query($sql);

if($query){
	header("location:../user.php");
}
