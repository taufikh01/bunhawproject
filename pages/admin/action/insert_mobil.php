<?php
    include '../../../koneksi.php';

    $id=$_POST['id_mobil'];
    $idtype=$_POST['id_type'];
    $idpemilik=$_POST['id_pemilik'];
    $noplat=$_POST['noplat'];
    $tahun=$_POST['tahun'];
    $tarif=$_POST['tarif'];
    $status=$_POST['status'];

    $sql="insert into kendaraan values ('$id','$idtype','$idpemilik','$noplat','$tahun','$tarif','$status')";
    $query=mysql_query($sql)or die(mysql_error());
        if($query){
            echo"<script language='javascript'>alert ('input data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../mobil.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('input data gagal'); </script>";
        }
    
?>