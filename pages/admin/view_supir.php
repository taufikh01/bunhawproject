<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>ID Supir</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telp</th>
    <th>No KTP</th>
    <th>No SIM</th>
    <th>Foto SIM</th>
    <th>Tarif Per Jam</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT * FROM supir";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['id_supir'] ?></td>
            <td><?php echo $array['nama_supir'] ?></td>
            <td><?php echo $array['alamat'] ?></td>
            <td><?php echo $array['tlp'] ?></td>
            <td><?php echo $array['no_ktp'] ?></td>
            <td><?php echo $array['no_sim'] ?></td>
            <td><img src="../../img/supir/<?php echo $array['file_sim'] ?>" width="40" height="50"></td>
            <td><?php echo $array['tarif_perjam'] ?></td>
            <td><a href="f_edit_supir.php?id=<?php echo $array['id_supir']; ?>">Edit</a> <a href="action/hapus_supir.php?id=<?php echo $array['id_supir']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>