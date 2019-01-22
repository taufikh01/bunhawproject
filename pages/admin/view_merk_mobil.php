<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>ID Merk</th>
    <th>Nama Merk</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT * FROM merk";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['id_merk'] ?></td>
            <td><?php echo $array['nama_merk'] ?></td>
            <td><a href="f_edit_merk_mobil.php?id=<?php echo $array['id_merk']; ?>">Edit</a> <a href="action/hapus_merk_mobil.php?id=<?php echo $array['id_merk']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>