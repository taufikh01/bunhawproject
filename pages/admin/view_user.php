<table id="tabel" class="responsive-table display" cellspacing="0">
<thead>
<tr>
    <th>NIK</th>
    <th>Username</th>
    <th>Password</th>
    <th>Nama</th>
    <th>Foto</th>
    <th>Alamat</th>
    <th>Telp</th>
    <th>Type User</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    include '../../koneksi.php';
    
    $sql="SELECT * FROM login where typeuser='Petugas'";
    $query=mysql_query($sql);
    while ($array=mysql_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $array['nik'] ?></td>
            <td><?php echo $array['username'] ?></td>
            <td><?php echo $array['password'] ?></td>
            <td><?php echo $array['nama'] ?></td>
            <td><img src="../../img/<?php echo $array['foto'] ?>" width="40" height="50"></td>
            <td><?php echo $array['alamat'] ?></td>
            <td><?php echo $array['tlp'] ?></td>
            <td><?php echo $array['typeuser'] ?></td>
            <td><a href="f_edit_user.php?nik=<?php echo $array['nik']; ?>">Edit</a>
                <a href="action/hapus_user.php?nik=<?php echo $array['nik']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>