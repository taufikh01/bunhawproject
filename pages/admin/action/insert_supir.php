<?php
include "../../../koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$no_ktp=$_POST['no_ktp'];
$no_sim=$_POST['no_sim'];
$folder="../../../img/supir/";
$file    =    $_FILES['file_sim']['name'];
$tmp        =    $_FILES['file_sim']['tmp_name'];
$upload    =    $folder.$file;
move_uploaded_file($tmp,$upload);
$tarif=$_POST['tarif'];

$sql="INSERT into supir (id_supir,nama_supir,alamat,tlp,no_ktp,no_sim,file_sim,tarif_perjam)values('$id','$nama','$alamat','$telp','$no_ktp','$no_sim','$file','$tarif')";
$query=mysql_query($sql);
        if($query){
            echo"<script language='javascript'>alert ('input data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../supir.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('input data gagal'); </script>";
            }
?>  