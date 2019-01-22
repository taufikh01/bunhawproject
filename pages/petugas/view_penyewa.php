<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>No KTP</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telp</th>
    <th>Foto KTP</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT * FROM penyewa";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['no_ktp'] ?></td>
            <td><?php echo $array['nama_penyewa'] ?></td>
            <td><?php echo $array['alamat'] ?></td>
            <td><?php echo $array['tlp'] ?></td>
            <td><img src="../../img/<?php echo $array['file_ktp'] ?>" width="40" height="50"></td>
            <td><a href="f_edit_penyewa.php?no=<?php echo $array['no']; ?>">Edit</a> <a href="action/hapus_penyewa.php?no=<?php echo $array['no']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>