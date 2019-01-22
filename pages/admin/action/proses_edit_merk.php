<?php
    session_start();
    include '../../../koneksi.php';

    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $sql="UPDATE merk set nama_merk='$nama' where id_merk='$id'";
    $query=mysql_query($sql);

        if($query){
            header("location:../merkmobil.php");
        }else {
                echo "<script language='javascript'>alert ('Edit data gagal'); </script>";
            }
?>