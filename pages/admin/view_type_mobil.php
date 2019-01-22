<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>ID Type</th>
    <th>Merk</th>
    <th>Type</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT a.*,b.* FROM type_mobil a,merk b where a.id_merk=b.id_merk";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['id_type'] ?></td>
            <td><?php echo $array['nama_merk'] ?></td>
            <td><?php echo $array['nama_type'] ?></td>
            <td><a href="f_edit_typemobil.php?id=<?php echo $array['id_type']; ?>">Edit</a> <a href="action/hapus_type_mobil.php?id=<?php echo $array['id_type']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>