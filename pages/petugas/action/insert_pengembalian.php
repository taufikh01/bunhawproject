<?php
include "../../../koneksi.php";
$id_detail       =$_POST['id_detail'];
$id_transaksi    =$_POST['id_transaksi'];
$tgl_pinjam      =$_POST['tgl_pinjam'];
$jam_pinjam      =$_POST['jam_pinjam'];
$tgl_kembali     =$_POST['tgl_kembali'];
$jam_kembali     =$_POST['jam_kembali'];
$km_kembali      =$_POST['km_kembali'];
$bbm_kembali     =$_POST['bbm_kembali'];
$kondisi_kembali =$_POST['kondisi_kembali'];
$kerusakan       =$_POST['kerusakan'];
$biaya_kerusakan =$_POST['biaya_kerusakan'];
$biaya_bbm       =$_POST['biaya_bbm'];

$a=strtotime($tgl_pinjam);
$b=strtotime($tgl_kembali);
$c=abs($b-$a);
$hari = $c/86400;

$d=strtotime($jam_pinjam);
$e=strtotime($jam_kembali);
$f=abs($e-$d);
$jam = $f/3600;

$total_jam=(24 * $hari)+$jam;

$query11=mysql_query("select a.*,b.*,c.*,d.* from transaksi a,kendaraan b,supir c,detail_transaksi d where a.id_transaksi=d.id_transaksi and a.id_mobil=b.id_mobil and c.id_supir=d.id_supir and d.id_detail='$id_detail'");
$array11=mysql_fetch_array($query11);
$id_mobil = $array11['id_mobil'];
$id_supir = $array11['id_supir'];
$biaya_sewa=$array11['tarif_per_jam']*$total_jam;
$biaya_supir=$array11['tarif_perjam']*$total_jam;

$total_biaya=$biaya_sewa+$biaya_supir+$biaya_kerusakan+$biaya_bbm;

$sql1="UPDATE detail_transaksi set tgl_kembali='$tgl_kembali',jam_kembali='$jam_kembali',km_kembali='$km_kembali',bbm_kembali='$bbm_kembali',kondisi_mobil_kembali='$kondisi_kembali',kerusakan='$kerusakan',biaya_kerusakan='$biaya_kerusakan',biaya_bbm='$biaya_bbm',biaya_sewa='$biaya_sewa',biaya_supir='$biaya_supir' where id_detail='$id_detail'";
$sql2="UPDATE transaksi set total_transaksi='$total_biaya' where id_transaksi='$id_transaksi'";
$sql3="UPDATE kendaraan set status_rental='ada' where id_mobil='$id_mobil'";
$sql4="UPDATE supir set status='ada' where id_supir='$id_supir'";
$query1=mysql_query($sql1);
$query2=mysql_query($sql2);
$query3=mysql_query($sql3);
$query4=mysql_query($sql4);

    if($query3){
    header("location:../transaksi.php");
    }else{
    echo"edit data gagal";
    }
?>