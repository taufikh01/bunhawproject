<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>NIK</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telp</th>
    <th>Username</th>
    <th>Password</th>
    <th>Tipe Login</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';

    $sql="SELECT * FROM login";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['nik'] ?></td>
            <td><?php echo $array['nama'] ?></td>
            <td><?php echo $array['alamat'] ?></td>
            <td><?php echo $array['tlp'] ?></td>
            <td><?php echo $array['username'] ?></td>
            <td><?php echo $array['password'] ?></td>
            <td><?php echo $array['type_login'] ?></td>
            <td><a href="action/f_edit_user.php?id=<?php echo $array['nik']; ?>">Edit</a> <a href="action/hapus_user.php?id=<?php echo $array['nik']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>