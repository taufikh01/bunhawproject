<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>No Transaksi</th>
    <th>Peminjam</th>
    <th>Supir</th>
    <th>No Plat</th>
    <th>Merk</th>
    <th>Tipe</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Jam Pinjam</th>
    <th>Jam Kembali</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="select a.*,b.*,c.*,d.*,e.*,f.*,g.*,h.* from transaksi a,penyewa b,login c,kendaraan d,merk e,type_mobil f,detail_transaksi g,supir h
            where a.no_ktp=b.no_ktp and a.nik=c.nik and a.id_mobil=d.id_mobil and e.id_merk=f.id_merk and d.id_type=f.id_type and g.id_supir=h.id_supir and a.id_transaksi=g.id_transaksi order by g.id_detail desc";
    $query=mysql_query($sql)or die (mysql_error());
    while ($array=mysql_fetch_array($query)) {
        echo"<tr>
                <td>$array[id_detail]</td>
                <td>$array[nama_penyewa]</td>
                <td>$array[nama_supir]</td>
                <td>$array[no_plat]</td>
                <td>$array[nama_merk]</td>
                <td>$array[nama_type]</td>
                <td>$array[tgl_pinjam]</td>
                <td>$array[tgl_kembali]</td>
                <td>$array[jam_pinjam]</td>
                <td>$array[jam_kembali]</td>";
                if ($array['total_transaksi']==0){
                echo"<td>&nbsp
                    Detail</td>";
                }else{
                echo"<td><a href='rincian_transaksi.php?id_detail=$array[id_detail]'>&nbsp Detail</a></td>
             </tr>";
             }
    }
?>
</tbody>
</table>