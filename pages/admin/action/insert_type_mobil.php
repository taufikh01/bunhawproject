<?php
    session_start();
    include '../../../koneksi.php';

    $id=$_POST['id_type'];
    $id_merk=$_POST['id_merk'];
    $nama=$_POST['nama'];
    
    $sql="INSERT INTO type_mobil values('$id','$id_merk','$nama')";
    $query=mysql_query($sql);
    if (empty($id)) {
        echo "<script language='javascript'>alert ('Field ID kosong'); document.location.href='../typemobil.php'</script>";
    } else if (empty($id_merk)) {
        echo "<script language='javascript'>alert ('Field Merk kosong'); document.location.href='../typemobil.php'</script>";
    } else if (empty($nama)) {
        echo "<script language='javascript'>alert ('Field Nama kosong'); document.location.href='../typemobil.php'</script>";
    } else {
        if($query){
            echo"<script language='javascript'>alert ('input data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../typemobil.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('input data gagal'); </script>";
            }
    }
?>