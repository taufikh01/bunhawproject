<?php
include  "../../koneksi.php";
include "../../koneksi.php";
$getid = $_GET['id_detail'];
$sql="select a.*,b.*,c.*,d.*,e.*,f.*,g.*,h.*,b.no_ktp as no_ktp_penyewa,b.tlp as tlp_penyewa,b.alamat as alamat_penyewa from transaksi a,penyewa b,login c,kendaraan d,merk e,type_mobil f,detail_transaksi g,supir h
                                      where a.no_ktp=b.no_ktp and a.nik=c.nik and a.id_mobil=d.id_mobil and e.id_merk=f.id_merk and d.id_type=f.id_type and g.id_supir=h.id_supir and a.id_transaksi=g.id_transaksi and g.id_detail='$getid'";
$query=mysql_query($sql);
$array=mysql_fetch_array($query)or die(mysql_error());    
$tarif = $array['total_transaksi'];
$biaya_kerusakan = $array['biaya_kerusakan'];
$biaya_bbm = $array['biaya_bbm']; 

$html = '
                                <div class="panel-body">
                                <center><h1>ThRentCar</h1></center>
                                <hr>
                                <p>Nota Transaksi Kode :'.$array['id_transaksi'].'</p>
                                <p>Pendata :'.$array['nama'].'</p>
                                <table class="table table-striped">
                                <tr>
                                <td width="200">Nama Penyewa</td>
                                <td width="20">:</td>
                                <td width="350">'.$array ['nama_penyewa'].'</td>
                                </tr>
                                <tr>
                                <td>No KTP</td>
                                <td>:</td>
                                <td>'.$array['no_ktp_penyewa'].'</td>
                                </tr>
                                <tr>
                                <td>No Telp Penyewa</td>
                                <td>:</td>
                                <td>'.$array['tlp_penyewa'].'</td>
                                </tr>
                                <tr>
                                <td>Alamat penyewa</td>
                                <td>:</td>
                                <td>'.$array['alamat_penyewa'].'</td>
                                </tr>
                                <tr>
                                <td>Supir yang disewa</td>
                                <td>:</td>
                                <td>'.$array['nama_supir'].'</td>
                                </tr>
                                <tr>
                                <td>Jenis Mobil yang disewa</td>
                                <td>:</td>
                                <td>'.$array['nama_type'].'</td>
                                </tr>
                                <tr>
                                <td>No Plat Kendaraan</td>
                                <td>:</td>
                                <td>'.$array['no_plat'].'</td>
                                </tr>
                                <tr>
                                <td>Tanggal Pinjam</td>
                                <td>:</td>
                                <td>'.tglindo($array['tgl_pinjam']).'</td>
                                </tr>
                                <tr>
                                <td>Jam Pinjam</td>
                                <td>:</td>
                                <td>'.$array['jam_pinjam'].'</td>
                                </tr>
                                <tr>
                                <td>Tanggal Kembali</td>
                                <td>:</td>
                                <td>'.tglindo($array['tgl_kembali']).'</td>
                                </tr>
                                <tr>
                                <td>Jam Kembali</td>
                                <td>:</td>
                                <td>'.$array['jam_kembali'].'</td>
                                </tr>
                                <tr>
                                <td>Kilometer Pinjam</td>
                                <td>:</td>
                                <td>'.$array['km_pinjam'].'&nbsp;KM</td>
                                </tr>
                                <tr>
                                <td>Kilometer Kembali</td>
                                <td>:</td>
                                <td>'.$array['km_kembali'].'&nbsp;KM</td>
                                </tr>
                                <tr>
                                <td>BBM Pinjam</td>
                                <td>:</td>
                                <td>'.$array['bbm_pinjam'].'&nbsp;Liter</td>
                                </tr>
                                <tr>
                                <td>BBM Kembali</td>
                                <td>:</td>
                                <td>'.$array['bbm_kembali'].'&nbsp;Liter</td>
                                </tr>
                                <tr>
                                <td>Kondisi Mobil Pinjam</td>
                                <td>:</td>
                                <td>'.$array['kondisi_mobil_pinjam'].'</td>
                                </tr>
                                <tr>
                                <td>Kondisi Mobil Kembali</td>
                                <td>:</td>
                                <td>'.$array['kondisi_mobil_kembali'].'</td>
                                </tr>
                                <tr>
                                <td>Kerusakan</td>
                                <td>:</td>
                                <td>'.$array['kerusakan'].'</td>
                                </tr>
                                <tr>
                                <td>Biaya Kerusakan</td>
                                <td>:</td>
                                <td>Rp.'. number_format($biaya_kerusakan, 0, ",", ".").'</td>
                                </tr>
                                <tr>
                                <td>Biaya BBM</td>
                                <td>:</td>
                                <td>Rp.'. number_format($biaya_bbm, 0, ",", ".").'</td>
                                </tr>
                                <tr>
                                <td>Total Biaya</td>
                                <td>:</td>
                                <td>Rp. '.number_format($tarif, 0, ",", ".").'</td>
                                </tr>
                             </table>
                          </div>';

//==============================================================
//==============================================================
//==============================================================

include("../../pdf/mpdf.php");

$mpdf=new mpdf(); 

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>
<?php
function tglindo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
    // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
    $BulanIndo = array("Januari", "Februari", "Maret",
        "April", "Mei", "Juni",
        "Juli", "Agustus", "September",
        "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
    $bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
    $tgl = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring

    $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
    return($result);
}
?>