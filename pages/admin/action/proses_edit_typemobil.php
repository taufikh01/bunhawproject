<?php
    session_start();
    include '../../../koneksi.php';

    $id=$_POST['id'];
    $id_merk=$_POST['id_merk'];
    $nama=$_POST['nama'];
    
    $sql="Update type_mobil set id_merk='$id_merk',nama_type='$nama' where id_type='$id'";
    $query=mysql_query($sql);
      if($query){
            echo"<script language='javascript'>alert ('Edit data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../typemobil.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('Edit data gagal'); </script>";
            }
?>