<?php
    include '../../../koneksi.php';

    $id=$_POST['id'];
    $idtype=$_POST['id_type'];
    $idpemilik=$_POST['id_pemilik'];
    $noplat=$_POST['noplat'];
    $tahun=$_POST['tahun'];
    $tarif=$_POST['tarif'];
    $status=$_POST['status'];

    $sql="Update kendaraan set id_type='$idtype',id_pemilik='$idpemilik',no_plat='$noplat',tahun_mobil='$tahun',tarif_per_jam='$tarif',status_rental='$status' where id_mobil='$id'";
    $query=mysql_query($sql)or die(mysql_error());
        if($query){
            echo"<script language='javascript'>alert ('Edit data berhasil'); </script>
                    <script language='javascript'>
                	document.location.href='../mobil.php'</script>";
        }else {
                echo "<script language='javascript'>alert ('Edit data gagal'); </script>";
        }
    
?>