<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>Tanggal</th>
    <th>No Plat Mobil</th>
    <th>Jumlah</th>
    <th>Penyetor</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT a.*,b.*,c.* FROM setoran a, kendaraan b ,login c WHERE a.id_mobil=b.id_mobil and a.nik=c.nik";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['tgl'] ?></td>
            <td><?php echo $array['no_plat'] ?></td>
            <td><?php echo $array['jumlah'] ?></td>
            <td><?php echo $array['nama'] ?></td>
            <td><a href="action/hapus_setoran.php?id=<?php echo $array['no_setoran']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>