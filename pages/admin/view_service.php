<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>Id service</th>
    <th>No Plat</th>
    <th>Tanggal Service</th>
    <th>Total Biaya</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT a.*,b.* FROM service a, kendaraan b WHERE a.id_mobil=b.id_mobil";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['id_service'] ?></td>
            <td><?php echo $array['no_plat'] ?></td>
            <td><?php echo $array['tgl_service'] ?></td>
            <td><?php echo $array['total_biaya'] ?></td>
            <td><a href="f_edit_service.php?id=<?php echo $array['id_service']; ?>">Edit</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>