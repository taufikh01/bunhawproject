<?php
    session_start();
    include '../../../koneksi.php';

    $id=$_POST['id'];
    $nama=$_POST['nama'];
    // cek validasi data.
    if (empty($id)) {
        echo "<script language='javascript'>alert ('Field ID kosong'); document.location.href='../merkmobil.php'</script>";
    } else if (empty($nama)) {
        echo "<script language='javascript'>alert ('Field Nama kosong'); document.location.href='../merkmobil.php'</script>";
    } else {
    $sql="INSERT INTO merk values('$id','$nama')";
    $query=mysql_query($sql);

        if($query){
            header("location:../merkmobil.php");
        }else {
                echo "<script language='javascript'>alert ('input data gagal'); </script>";
            }
    }
?>