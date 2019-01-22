<?php
    session_start();
    include '../../../koneksi.php';

    $id=$_POST['id_service'];
    $id_mobil=$_POST['id_mobil'];
    $tgl=$_POST['tgl'];
    $total=$_POST['total'];
    
    $sql="INSERT INTO service values('$id','$id_mobil','$tgl','$total')";
    $query=mysql_query($sql)or die(mysql_error());
       if($query){
            echo"<script language='javascript'>alert ('input data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../service.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('input data gagal'); </script>";
            }
 
?>