<?php
include "../../../koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];

$sql="UPDATE pemilik set nama_pemilik='$nama',alamat='$alamat',tlp='$telp' where id_pemilik='$id'";
$query=mysql_query($sql);
       if($query){
            echo"<script language='javascript'>alert ('Edit data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../pemilik.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('Edit data gagal'); </script>";
        }

?>  