<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>Id Pemilik</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telp</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT * FROM pemilik";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['id_pemilik'] ?></td>
            <td><?php echo $array['nama_pemilik'] ?></td>
            <td><?php echo $array['alamat'] ?></td>
            <td><?php echo $array['tlp'] ?></td>
            <td><a href="f_edit_pemilik.php?id=<?php echo $array['id_pemilik']; ?>">Edit</a> <a href="action/hapus_pemilik.php?id=<?php echo $array['id_pemilik']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>