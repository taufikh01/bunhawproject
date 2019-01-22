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

$sql="UPDATE supir set nama_supir='$nama',alamat='$alamat',tlp='$telp',no_ktp='$no_ktp',no_sim='$no_sim',file_sim='$file',tarif_perjam='$tarif' where id_supir='$id'";
$query=mysql_query($sql);
        if($query){
            echo"<script language='javascript'>alert ('Edit data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../supir.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('Edit data gagal');</script>";                
            }
?>