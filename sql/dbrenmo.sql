-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 01. Maret 2016 jam 07:07
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbrenmo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_service`
--

CREATE TABLE IF NOT EXISTS `detail_service` (
  `id_detail_service` int(11) NOT NULL AUTO_INCREMENT,
  `id_service` varchar(10) NOT NULL,
  `nama_jenis_service` varchar(50) NOT NULL,
  PRIMARY KEY (`id_detail_service`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(10) NOT NULL,
  `jam_pinjam` time NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jam_kembali` time NOT NULL,
  `tgl_kembali` date NOT NULL,
  `biaya_sewa` double NOT NULL,
  `km_pinjam` int(11) NOT NULL,
  `km_kembali` int(11) NOT NULL,
  `bbm_pinjam` int(11) NOT NULL,
  `bbm_kembali` int(11) NOT NULL,
  `kondisi_mobil_pinjam` text NOT NULL,
  `kondisi_mobil_kembali` text NOT NULL,
  `kerusakan` text NOT NULL,
  `biaya_bbm` double NOT NULL,
  `biaya_kerusakan` double NOT NULL,
  `id_supir` varchar(10) NOT NULL,
  `biaya_supir` double NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `jam_pinjam`, `tgl_pinjam`, `jam_kembali`, `tgl_kembali`, `biaya_sewa`, `km_pinjam`, `km_kembali`, `bbm_pinjam`, `bbm_kembali`, `kondisi_mobil_pinjam`, `kondisi_mobil_kembali`, `kerusakan`, `biaya_bbm`, `biaya_kerusakan`, `id_supir`, `biaya_supir`) VALUES
(27, 'T0001', '10:10:00', '2016-03-01', '10:10:00', '2016-03-02', 240000, 20000, 12021309, 19, 1, 'rusak', 'rusak', 'kaca pecah', 10000, 20000, 'S0001', 120000),
(28, 'T0002', '12:00:00', '2016-03-01', '13:00:00', '2016-03-01', 9000, 20000, 12021309, 2, 1, 'baik', 'baik', 'tidak ada', 20000, 0, 'S0002', 5000),
(29, 'T0003', '13:00:00', '2016-03-02', '13:00:00', '2016-03-03', 240000, 1002193, 2147483647, 8, 8, 'baik', 'baik', 'kaca pecah', 100000, 200000, 'S0001', 120000),
(30, 'T0004', '22:10:00', '2016-03-01', '22:10:00', '2016-03-02', 240000, 192398, 1203123, 10, 10, 'baik', 'rusak', 'kaca pecah', 50000, 100000, 'S0014', 48000),
(31, 'T0005', '10:00:00', '2016-03-01', '10:00:00', '2016-03-02', 192000, 324234, 2345, 12, 12, 'baik', 'rusak', 'ban bocor', 200000, 50000, 'S0014', 48000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `id_pemilik` varchar(10) NOT NULL,
  `no_plat` text NOT NULL,
  `tahun_mobil` int(11) NOT NULL,
  `tarif_per_jam` double NOT NULL,
  `status_rental` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_mobil`, `id_type`, `id_pemilik`, `no_plat`, `tahun_mobil`, `tarif_per_jam`, `status_rental`) VALUES
('M0001', 'T0005', 'P0002', 'Z 1231 RW', 2015, 10000, 'ada'),
('M0002', 'T0005', 'P0001', 'B 7123 AW', 2005, 8000, 'ada'),
('M0003', 'T0005', 'P0002', 'B 345 DW', 2015, 9000, 'ada'),
('M0004', 'T0008', 'P0002', 'd asd 21', 2015, 10000, 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `nik` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `typeuser` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`nik`, `username`, `password`, `no_ktp`, `nama`, `foto`, `alamat`, `tlp`, `typeuser`) VALUES
('L0001', 'admin', 'admin', 12232131, 'Admin', 'koala.jpg', 'basds', '083816020717', 'Admin'),
('L0003', 'barna123', '123', 12312312, 'Barna Sulaeman', 'images.jpg', 'Bandung Kulon blablabla', '0213124411', 'Petugas'),
('L0005', 'jihan', '123', 12131312, 'Jihan Maemunah', 'Chrysanthemum.jpg', 'jsahjdkahsahjkdh', '0810328', 'Petugas'),
('L0006', 'reva01', '123', 123124215, 'Reva khoirena Gunadi', 'images (3).jpg', 'bandung', '089666223677', 'Petugas'),
('L0002', 'taufikh01', '123', 12313213, 'Taufik Hidayat', 'fik.jpg', 'Bandung', '08988787478', 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE IF NOT EXISTS `merk` (
  `id_merk` varchar(10) NOT NULL,
  `nama_merk` varchar(50) NOT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id_merk`, `nama_merk`) VALUES
('Z0001', 'Honda'),
('Z0002', 'Toyota'),
('Z0003', 'Daihatsu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE IF NOT EXISTS `pemilik` (
  `id_pemilik` varchar(10) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pemilik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `alamat`, `tlp`) VALUES
('P0001', 'Taufik Hidayat', 'Bandung', '089666223679'),
('P0002', 'Jono sutarji', 'Bandung', '022967878123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE IF NOT EXISTS `penyewa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(20) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `file_ktp` varchar(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`no`, `no_ktp`, `nama_penyewa`, `alamat`, `tlp`, `file_ktp`) VALUES
(3, '1123321231', 'Suhaemi', 'Bandung', '0221232131', 'userman.gif'),
(4, '1112223132321', 'Jarwo', 'Sumedang', '089123213', 'desert.jpg'),
(8, '11132213123', 'barin', 'Bandung', '0871238888', 'Penguins.jpg'),
(9, '101122342141', 'kipli', 'Banten', '0227795731', 'userman.gif'),
(10, '1213112111', 'bagja', 'bandung', '092103213', 'userman.gif'),
(12, '1231232131', 'kuya', 'jakarta', '0718321312', 'Jellyfish.jpg'),
(14, '123123443', 'Janet', 'Bandung', '08721342141', 'koala.jpg'),
(15, '122132121321', 'bmnsa', 'aksdjlsajd', '08981722213', 'Tulips.jpg'),
(16, '12321312', 'jesen', 'bandung', '088712837182', 'Jellyfish.jpg'),
(17, '1232131222', 'syahid abraham', 'bandung', '0229973274', 'images (8).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id_service` varchar(10) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `tgl_service` date NOT NULL,
  `total_biaya` double NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `id_mobil`, `tgl_service`, `total_biaya`) VALUES
('C0008', 'M0003', '2016-10-15', 250000),
('C0009', 'M0002', '2006-10-15', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setoran`
--

CREATE TABLE IF NOT EXISTS `setoran` (
  `no_setoran` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `jumlah` double NOT NULL,
  `nik` varchar(10) NOT NULL,
  PRIMARY KEY (`no_setoran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `setoran`
--

INSERT INTO `setoran` (`no_setoran`, `tgl`, `id_mobil`, `jumlah`, `nik`) VALUES
(2, '2006-10-15', 'M0001', 600000, 'L0002'),
(6, '2016-02-27', 'M0001', 200000, 'L0002'),
(7, '2016-02-28', 'M0001', 9000000, 'L0003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE IF NOT EXISTS `supir` (
  `id_supir` varchar(10) NOT NULL,
  `nama_supir` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_sim` varchar(20) NOT NULL,
  `file_sim` varchar(50) NOT NULL,
  `tarif_perjam` double NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_supir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id_supir`, `nama_supir`, `alamat`, `tlp`, `no_ktp`, `no_sim`, `file_sim`, `tarif_perjam`, `status`) VALUES
('S0001', 'Gaarang', 'Sunagakure', '0878676768', '3234343452', '323222323', 'Penguins.jpg', 5000, 'ada'),
('S0002', 'kamen babas', 'aslkjdalk', '089123131', '12313', '1231313', 'user.gif', 5000, 'ada'),
('S0004', 'Jajang suhe', 'jakarta', '08712321', '123123', '31123131', 'Jellyfish.jpg', 4000, 'ada'),
('S0005', 'bahri', 'Baharudin', '01273837293', '1233', '12321', 'desert.jpg', 3000, 'ada'),
('S0006', 'jara mama', 'askjdalkjd', '01328308', '112312', '12313213', 'Penguins.jpg', 6000, 'ada'),
('S0007', 'jarot', 'bandung', '08912313', '1231231', '123131', 'Tulips.jpg', 3000, 'ada'),
('S0008', 'kiwil', 'bandung', '0891231313', '1231313', '1231313', 'koala.jpg', 6000, 'ada'),
('S0009', 'jojo', 'bandung', '089832981', '123893', '1832983', 'Tulips.jpg', 4000, 'ada'),
('S0010', 'ujang', 'bandung', '089123131', '928337', '97132773', 'Penguins.jpg', 4000, 'ada'),
('S0011', ' stevan cocom', 'jakarta', '0229123123', '123131', '123131', 'Penguins.jpg', 8000, 'ada'),
('S0012', 'Supardi Nasir', 'Bandung ', '08812312314', '2132123123', '1122312312', 'userman.gif', 5000, 'ada'),
('S0013', 'Junet', 'Bandung', '0896323762', '11223112322', '14235112334', 'desert.jpg', 5000, 'ada'),
('S0014', 'karjab', 'sumedang', '022779821213', '99877787', '98787676', 'Penguins.jpg', 2000, 'ada'),
('S0015', 'mimin', 'bandung', '08783212', '11223214', '11232142', 'Desert.jpg', 3000, 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `total_transaksi` int(20) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `no_ktp`, `nik`, `id_mobil`, `total_transaksi`) VALUES
('T0001', '1123321231', 'L0002', 'M0001', 390000),
('T0002', '1112223132321', 'L0002', 'M0003', 34000),
('T0003', '1123321231', 'L0002', 'M0001', 660000),
('T0004', '1112223132321', 'L0002', 'M0001', 438000),
('T0005', '1112223132321', 'L0002', 'M0002', 490000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_mobil`
--

CREATE TABLE IF NOT EXISTS `type_mobil` (
  `id_type` varchar(10) NOT NULL,
  `id_merk` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type_mobil`
--

INSERT INTO `type_mobil` (`id_type`, `id_merk`, `nama_type`) VALUES
('T0005', 'Z0001', 'Jazz'),
('T0007', 'Z0001', 'Toyota yaris'),
('T0008', 'Z0001', 'ayla');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
