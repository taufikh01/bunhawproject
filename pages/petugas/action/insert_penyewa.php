<?php
include "../../../koneksi.php";

$no=$_POST['no_ktp'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$folder    ="../../../img/";
$file     =    $_FILES['file_ktp']['name'];
$tmp        =    $_FILES['file_ktp']['tmp_name'];
$upload    =    $folder.$file;
move_uploaded_file($tmp,$upload);
    $sql="INSERT into penyewa (no_ktp,nama_penyewa,alamat,tlp,file_ktp)values('$no','$nama','$alamat','$telp','$file')";
    $query=mysql_query($sql);
        if($query){
        header("location:../penyewa.php");
        }else {
                echo "<script language='javascript'>alert ('input data gagal'); </script>";
        
    }
?>  