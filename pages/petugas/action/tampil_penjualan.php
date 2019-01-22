<table border=1>
<tr>
<th>No Faktur<th>Kode Barang <th>Nama Barang<th>Kategori Barang<th>Harga<th>Jumlah Beli<th>Total Harga<th>Tanggal Beli</th>Stok<th>Aksi
<?php

include "koneksi.php";

$query=mysql_query("select * from barang b,kategori k,penjualan p where b.id_kategori=k.id_kategori and b.kode_barang=p.kode_barang");
while($array=mysql_fetch_assoc($query)){
    echo
    "<tr>
        <td>$array[no_faktur]
        <td>$array[kode_barang]
        <td>$array[nama_barang]
        <td>$array[kategori]
        <td>$array[harga]
        <td>$array[jumlah_beli]
        <td>$array[tgl_beli]
        <td>$array[stok]
        <td><a href='edit_barang.php?kode_barang=$array[kode_barang]'>Edit</a>    
            <a href='hapus_barang.php?kode_barang=$array[kode_barang]'>Hapus</a>
    ";
}

?>
</table>
<hr />
<form method="POST" action="proses_cari.php">
Cari Barang <input type="text" name="barang">
<input type="submit" value="cari"> 