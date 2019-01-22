<?php
include "../../../koneksi.php";
$id             =$_POST['id'];
$no_ktp         =$_POST['no_ktp'];
$nik            =$_POST['nik'];
$id_mobil       =$_POST['id_mobil'];
$tgl_pinjam     =$_POST['tgl_pinjam'];
$jam_pinjam     =$_POST['jam_pinjam'];
$km_pinjam      =$_POST['km_pinjam'];
$bbm_pinjam     =$_POST['bbm_pinjam'];
$kondisi_pinjam =$_POST['kondisi_pinjam'];
$id_supir       =$_POST['id_supir'];

$sql="INSERT into transaksi (id_transaksi,no_ktp,nik,id_mobil) values('$id','$no_ktp','$nik','$id_mobil')";
$sql2="UPDATE kendaraan set status_rental='dipinjam' where id_mobil='$id_mobil'";
$sql3="UPDATE supir set status='disewa' where id_supir='$id_supir'";
$sql4="insert into detail_transaksi (id_transaksi,tgl_pinjam,jam_pinjam,km_pinjam,bbm_pinjam,kondisi_mobil_pinjam,id_supir)values('$id','$tgl_pinjam','$jam_pinjam','$km_pinjam','$bbm_pinjam','$kondisi_pinjam','$id_supir')";
$query=mysql_query($sql);
$query2=mysql_query($sql2);
$query3=mysql_query($sql3);
$query4=mysql_query($sql4);
if($query){
    header("location:../transaksi.php");
}else{
    echo"tambah data gagal";
}

?>