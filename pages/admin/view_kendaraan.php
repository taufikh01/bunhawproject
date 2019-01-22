<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>ID Mobil</th>
    <th>Type</th>
    <th>Pemilik</th>
    <th>No Plat</th>
    <th>Tahun Mobil</th>
    <th>Tarif Per Jam</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT a.*,b.*,c.* FROM kendaraan a,type_mobil b,pemilik c  WHERE a.id_type=b.id_type and a.id_pemilik=c.id_pemilik";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['id_mobil'] ?></td>
            <td><?php echo $array['nama_type'] ?></td>
            <td><?php echo $array['nama_pemilik'] ?></td>
            <td><?php echo $array['no_plat'] ?></td>
            <td><?php echo $array['tahun_mobil'] ?></td>
            <td><?php echo $array['tarif_per_jam'] ?></td>
            <td><?php echo $array['status_rental'] ?></td>
            <td><a href="f_edit_kendaraan.php?id=<?php echo $array['id_mobil']; ?>">Edit</a> <a href="action/hapus_kendaraan.php?id=<?php echo $array['id_mobil']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>