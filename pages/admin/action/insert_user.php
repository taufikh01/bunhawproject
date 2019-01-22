<?php
include '../../../koneksi.php';

$nik=$_POST['nik'];
$username=$_POST['username'];
$password=$_POST['password'];
$no_ktp=$_POST['no_ktp'];
$nama=$_POST['nama'];
$folder="../../../img/";
$foto=$_FILES['foto']['name'];
$tmp=$_FILES['foto']['tmp_name'];
$upload=$folder.$foto;
move_uploaded_file($tmp,$upload);
$alamat=$_POST['alamat'];
$tlp=$_POST['telp'];
$type=$_POST['typeuser'];

$sql="Insert into login (nik,username,password,no_ktp,nama,foto,alamat,tlp,typeuser)values('$nik','$username','$password','$no_ktp','$nama','$foto','$alamat','$tlp','$type')";
$query=mysql_query($sql) or die (mysql_error());

if($query){
	header("location:../user.php");
}
