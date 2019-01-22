<?php
include "../../../koneksi.php";
$id=$_POST['id_pemilik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];

$sql="INSERT into pemilik (id_pemilik,nama_pemilik,alamat,tlp)values('$id','$nama','$alamat','$telp')";
$query=mysql_query($sql);
    if (empty($id)) {
        echo "<script language='javascript'>alert ('Field id pemilik kosong'); document.location.href='../pemilik.php'</script>";
    } else if (empty($nama)) {
        echo "<script language='javascript'>alert ('Field nama kosong'); document.location.href='../pemilik.php'</script>";
    } else if (empty($alamat)) {
        echo "<script language='javascript'>alert ('Field alamat kosong'); document.location.href='../pemilik.php'</script>";
    } else if (empty($telp)) {
        echo "<script language='javascript'>alert ('Field telp kosong'); document.location.href='../pemilik.php'</script>";
    } else {
        if($query){
            echo"<script language='javascript'>alert ('input data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../pemilik.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('input data gagal'); </script>";
            }
    }
?>  