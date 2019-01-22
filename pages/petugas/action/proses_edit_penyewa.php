<?php
include "../../../koneksi.php";
$no=$_POST['no'];
$no_ktp=$_POST['no_ktp'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$folder    ="../../../img/";
$file     =    $_FILES['file_ktp']['name'];
$tmp        =    $_FILES['file_ktp']['tmp_name'];
$upload    =    $folder.$file;
    $sql="update penyewa set no_ktp='$no_ktp',nama_penyewa='$nama',alamat='$alamat',tlp='$telp',file_ktp='$file' where no='$no'";
    move_uploaded_file($tmp,$upload);
    $query=mysql_query($sql);
        if($query){
        header("location:../penyewa.php");
        }else {
                echo "<script language='javascript'>alert ('Edit data gagal'); </script>";
        
    }
?>  