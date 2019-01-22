<?php
    session_start();
    include '../../../koneksi.php';

    $no=$_POST['no_setoran'];
    $id_mobil=$_POST['id_mobil'];
    $jumlah=$_POST['jumlah'];
    $nik=$_POST['nik'];
    
    $sql="INSERT INTO setoran values('$no',now(),'$id_mobil','$jumlah','$nik')";
    $query=mysql_query($sql)or die(mysql_error());
       if($query){
            echo"<script language='javascript'>alert ('input data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../setoran.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('input data gagal'); </script>";
            }
?>