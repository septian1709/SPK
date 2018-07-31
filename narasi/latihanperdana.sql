-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mar 2018 pada 17.09
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihanperdana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `earthquake`
--

CREATE TABLE `earthquake` (
  `evid` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `locstring` text NOT NULL,
  `tabsol` varchar(30) NOT NULL,
  `tzone` varchar(20) NOT NULL,
  `mag` varchar(80) NOT NULL,
  `lat` varchar(80) NOT NULL,
  `lon` varchar(10) NOT NULL,
  `mainshock` varchar(30) NOT NULL,
  `cluster` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `earthquake`
--

INSERT INTO `earthquake` (`evid`, `name`, `locstring`, `tabsol`, `tzone`, `mag`, `lat`, `lon`, `mainshock`, `cluster`) VALUES
('1214468754', '', '6 km barat daya karangasem', '20-09-2017 00:00:00', 'WIB', '5.3', '-8.3', '115.2', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `narasi`
--

CREATE TABLE `narasi` (
  `No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `narasi`
--

INSERT INTO `narasi` (`No`) VALUES
(0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kuantitas` tinyint(4) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id_transaksi`, `id_produk`, `tgl_transaksi`, `kuantitas`, `harga`, `id_pelanggan`) VALUES
(1, 100, '2016-09-20', 8, 265000, 1),
(2, 100, '2016-10-11', 3, 270000, 2),
(3, 101, '2016-08-17', 8, 250000, 2),
(4, 101, '2016-08-24', 12, 380000, 2),
(5, 101, '2016-05-10', 12, 250000, 1),
(6, 101, '2016-05-04', 11, 375000, 1),
(7, 101, '2016-07-15', 3, 265000, 1),
(8, 100, '2016-05-19', 4, 250000, 1),
(9, 101, '2016-06-17', 12, 255000, 2),
(10, 100, '2016-09-11', 12, 280000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beritacuaca`
--

CREATE TABLE `tb_beritacuaca` (
  `IDBeritaCuaca` int(11) NOT NULL,
  `NoBeritaCuaca` varchar(25) DEFAULT NULL,
  `JumlahCurah` varchar(25) DEFAULT NULL,
  `TmpMax` varchar(25) DEFAULT NULL,
  `TmpMin` varchar(25) DEFAULT NULL,
  `UdaraMax` varchar(25) DEFAULT NULL,
  `UdaraMin` varchar(25) DEFAULT NULL,
  `RHMax` varchar(25) DEFAULT NULL,
  `RHMin` varchar(25) DEFAULT NULL,
  `IDPemohon` int(11) DEFAULT NULL,
  `NIP` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_beritacuaca`
--

INSERT INTO `tb_beritacuaca` (`IDBeritaCuaca`, `NoBeritaCuaca`, `JumlahCurah`, `TmpMax`, `TmpMin`, `UdaraMax`, `UdaraMin`, `RHMax`, `RHMin`, `IDPemohon`, `NIP`) VALUES
(1, '6767', '1', '2', '3', '4', '5', '1', '5', 2, '199112202012102001'),
(2, 'CONTOH 3', '10', '32', '23', '1010', '1008', '92', '75', 3, '198903242009111001'),
(3, 'PE.001/004/II/2017', '21.8', '33.0', '24.4', '1005.4', '1001.9', '87', '59', 8, '198205202003121002'),
(4, '-', '-', '-', '-', '-', '-', '-', '-', 9, '198205202003121002'),
(5, '-', '-', '-', '-', '-', '-', '-', '-', 10, '198912292009111001'),
(6, 'PE/004/DNP/II/2017', '37.2', '31', '24.4', '1011.5', '1008.6', '97', '77', 12, '198903242009111001'),
(7, 'PE/006/DNP/III/2017', '37.2', '31', '24.4', '1011.5', '1008.6', '97', '77', 15, '198903242009111001'),
(8, 'CU.000/DNP/III/2017', '0.1', '10', '10', '1000', '1000', '10', '10', 18, '198903242009111001'),
(9, 'CU.000/DNP/III/2017', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 24, '198612012008121001'),
(10, '-', '-', '-', '-', '-', '-', '-', '-', 27, '198205202003121002'),
(11, '-', '-', '-', '-', '-', '-', '-', '-', 28, '198903242009111001'),
(12, '-', '-', '-', '-', '-', '-', '-', '-', 29, '198903242009111001'),
(13, '1', '0.0', '33.2', '26.4', '1012.4', '1007.9', '85', '61', 31, '198205202003121002'),
(14, '1', '1', '101', '10', '1012.4', '1007.9', '85', '61', 36, '198912292009111001'),
(15, '-', '-', '-', '-', '-', '-', '-', '-', 37, '199112202012102001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_latlong`
--

CREATE TABLE `tb_latlong` (
  `IDLatLong` int(11) NOT NULL,
  `DaerahLatLong` varchar(100) DEFAULT NULL,
  `Latitude` varchar(50) DEFAULT NULL,
  `Longitude` varchar(50) DEFAULT NULL,
  `NIP` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_latlong`
--

INSERT INTO `tb_latlong` (`IDLatLong`, `DaerahLatLong`, `Latitude`, `Longitude`, `NIP`) VALUES
(1, 'Bangli', '-8.404174', '115.363616', '198903242009111001'),
(2, 'Kintamani, Bangli', '-8.237748', '115.333304', '198903242009111001'),
(3, 'Susut, Bangli', '-8.441596', '115.338993', '198903242009111001'),
(4, 'Tembuku, Bangli', '-8.417091', '115.391601', '198903242009111001'),
(5, 'Abiansemal, Badung', '-8.528297', '115.217206', '198903242009111001'),
(6, 'Kuta, Badung', '-8.725267', '115.173817', '198903242009111001'),
(7, 'Kuta Selatan, Badung', '-8.811659', '115.164807', '198903242009111001'),
(8, 'Kuta Utara, Badung', '-8.644599', '115.159938', '198903242009111001'),
(9, 'Mengwi, Badung', '-8.562051', '115.177037', '198903242009111001'),
(10, 'Petang, Badung', '-8.339070', '115.223412', '198903242009111001'),
(11, 'Banjar, Buleleng', '-8.235780', '115.032715', '198903242009111001'),
(12, 'Buleleng', '-8.117298', '115.088504', '198903242009111001'),
(13, 'Busungbiu, Buleleng', '-8.305062', '114.946223', '198903242009111001'),
(14, 'Gerokgak, Buleleng', '-8.166601', '114.639756', '198903242009111001'),
(15, 'Kubutambahan, Buleleng', '-8.154021', '115.228657', '198903242009111001'),
(16, 'Sawan, Buleleng', '-8.145901', '115.170233', '198903242009111001'),
(17, 'Seririt, Buleleng', '-8.249782', '114.910106', '198903242009111001'),
(18, 'Sukasada, Buleleng', '-8.198290', '115.117386', '198903242009111001'),
(19, 'Tejakula, Buleleng', '-8.133690', '115.341043', '198903242009111001'),
(20, 'Denpasar Barat, Denpasar', '-8.666777', '115.195566', '198903242009111001'),
(21, 'Denpasar Timur, Denpasar', '-8.642107', '115.246155', '198903242009111001'),
(22, 'Denpasar Selatan, Denpasar', '-8.704117', '115.225499', '198903242009111001'),
(23, 'Denpasar Utara, Denpasar', '-8.626847', '115.210085', '198903242009111001'),
(24, 'Blahbatuh, Gianyar', '-8.571419', '115.308875', '198903242009111001'),
(25, 'Gianyar', '-8.531814', '115.330666', '198903242009111001'),
(26, 'Payangan, Gianyar', '-8.390918', '115.249094', '198903242009111001'),
(27, 'Sukawati, Gianyar', '-8.600514', '115.269362', '198903242009111001'),
(28, 'Tampaksiring, Gianyar', '-8.447959', '115.305941', '198903242009111001'),
(29, 'Tegallalang, Gianyar', '-8.405548', '115.286236', '198903242009111001'),
(30, 'Ubud, Gianyar', '-8.498766', '115.261489', '198903242009111001'),
(31, 'Jembrana', '-8.362273', '114.636396', '198903242009111001'),
(32, 'Melaya, Jembrana', '-8.248319', '114.532433', '198903242009111001'),
(33, 'Mendoyo, Jembrana', '-8.320908', '114.742568', '198903242009111001'),
(34, 'Negara, Jembrana', '-8.357377', '114.617918', '198903242009111001'),
(35, 'Pekutatan, Jembrana', '-8.397054', '114.864898', '198903242009111001'),
(36, 'Abang, Karangasem', '-8.368083', '115.619026', '198903242009111001'),
(37, 'Bebandem, Karangasem', '-8.408591', '115.540789', '198903242009111001'),
(38, 'Karangasem', '-8.448930', '115.614549', '198903242009111001'),
(39, 'Kubu, Karangasem', '-8.267033', '115.512507', '198903242009111001'),
(40, 'Manggis, Karangasem', '-8.492180', '115.525191', '198903242009111001'),
(41, 'Rendang, Karangasem', '-8.378192', '115.435632', '198903242009111001'),
(42, 'Selat, Karangasem', '-8.416490', '115.479104', '198903242009111001'),
(43, 'Sidemen, Karangasem', '-8.485418', '115.438360', '198903242009111001'),
(44, 'Banjarangkan, Klungkung', '-8.518317', '115.372126', '198903242009111001'),
(45, 'Dawan, Klungkung', '-8.538927', '115.445217', '198903242009111001'),
(46, 'Klungkung', '-8.541726', '115.402659', '198903242009111001'),
(47, 'Nusa Penida, Klungkung', '-8.734689', '115.536937', '198903242009111001'),
(48, 'Baturiti, Tabanan', '-8.339651', '115.177223', '198903242009111001'),
(49, 'Kediri, Tabanan', '-8.582983', '115.124215', '198903242009111001'),
(50, 'Kerambitan, Tabanan', '-8.533254', '115.085793', '198903242009111001'),
(51, 'Marga, Tabanan', '-8.461743', '115.168604', '198903242009111001'),
(52, 'Penebel, Tabanan', '-8.394696', '115.121191', '198903242009111001'),
(53, 'Pupuan, Tabanan', '-8.359942', '115.005739', '198903242009111001'),
(54, 'Selemadeg, Tabanan', '-8.448241', '115.041994', '198903242009111001'),
(55, 'Selemadeg Timur, Tabanan', '-8.482754', '115.063215', '198903242009111001'),
(56, 'Selemadeg Barat, Tabanan', '-8.455981', '114.972169', '198903242009111001'),
(57, 'Tabanan', '-8.542039', '115.121262', '198903242009111001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_narasi`
--

CREATE TABLE `tb_narasi` (
  `No` int(11) NOT NULL,
  `Tanggal` char(20) NOT NULL,
  `OT` char(15) NOT NULL,
  `Lat` decimal(3,2) NOT NULL,
  `Bujur` decimal(5,2) NOT NULL,
  `Mag` decimal(2,1) NOT NULL,
  `Kedalaman` char(3) NOT NULL,
  `Lokasi` varchar(60) NOT NULL,
  `Stasiun` char(20) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `sig` varchar(100) NOT NULL,
  `mmi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_narasi`
--

INSERT INTO `tb_narasi` (`No`, `Tanggal`, `OT`, `Lat`, `Bujur`, `Mag`, `Kedalaman`, `Lokasi`, `Stasiun`, `Keterangan`, `sig`, `mmi`) VALUES
(198, '03 Februari 2018', '11:21:48', '7.75', '121.19', '3.6', '420', ' 103 km Barat Laut nagekeo NTT', 'BMKG-PGR III', 'Gianyar I SIG (I-II MMI)', '', ''),
(199, '03 Februari 2018', '11:21:48', '7.75', '121.19', '3.6', '420', ' 103 km Barat Laut nagekeo NTT', 'BMKG-PGR III', ' ', '', ''),
(200, '03 Februari 2018', '11:21:48', '7.75', '121.19', '3.6', '420', ' 103 km Barat Laut nagekeo NTT', 'BMKG-PGR III', ' ', '', ''),
(201, '03 Februari 2018', '11:21:48', '7.75', '121.19', '3.6', '420', ' 103 km Barat Laut nagekeo NTT', 'BMKG-PGR III', ' ', '', ''),
(202, '03 Februari 2018', '11:21:43', '7.73', '121.27', '3.5', '484', ' 129 km Utara endeh NTT', 'BMKG-KHK', ' ', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `IDPemohon` int(11) NOT NULL,
  `TGLPermohonan` char(2) NOT NULL,
  `BLNPermohonan` char(2) NOT NULL,
  `THNPermohonan` char(4) NOT NULL,
  `NamaPemohon` varchar(50) DEFAULT NULL,
  `PekerjaanPemohon` varchar(15) DEFAULT NULL,
  `PerBidPemohon` varchar(50) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `KodePosPemohon` char(10) DEFAULT NULL,
  `KartuIdentitas` char(3) DEFAULT NULL,
  `NoKartu` char(25) DEFAULT NULL,
  `TeleponPemohon` char(15) DEFAULT NULL,
  `JenisData` varchar(50) DEFAULT NULL,
  `DiperUtkPemohon` varchar(100) DEFAULT NULL,
  `TGLPemohon` char(2) DEFAULT NULL,
  `BLNPemohon` char(2) DEFAULT NULL,
  `THNPemohon` char(4) DEFAULT NULL,
  `JAMPemohon` char(2) DEFAULT NULL,
  `MNTPemohon` char(2) DEFAULT NULL,
  `IDLatLong` int(11) DEFAULT NULL,
  `NIP` char(20) DEFAULT NULL,
  `NoSurat` varchar(50) DEFAULT NULL,
  `NoBeritaPetir` varchar(50) DEFAULT NULL,
  `NoKwitansi1` varchar(50) DEFAULT NULL,
  `JumlahKWa` varchar(15) DEFAULT NULL,
  `TerbilangKWa` varchar(100) DEFAULT NULL,
  `NoKwitansi2` varchar(50) DEFAULT NULL,
  `JumlahKWb` varchar(15) DEFAULT NULL,
  `TerbilangKWb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`IDPemohon`, `TGLPermohonan`, `BLNPermohonan`, `THNPermohonan`, `NamaPemohon`, `PekerjaanPemohon`, `PerBidPemohon`, `Alamat`, `KodePosPemohon`, `KartuIdentitas`, `NoKartu`, `TeleponPemohon`, `JenisData`, `DiperUtkPemohon`, `TGLPemohon`, `BLNPemohon`, `THNPemohon`, `JAMPemohon`, `MNTPemohon`, `IDLatLong`, `NIP`, `NoSurat`, `NoBeritaPetir`, `NoKwitansi1`, `JumlahKWa`, `TerbilangKWa`, `NoKwitansi2`, `JumlahKWb`, `TerbilangKWb`) VALUES
(9, '', '', '', 'Luh Pt Mas Shinta Sriwati,SE', 'Wiraswasta', 'PT. Graha Karya Risata', 'Jl. Karang Mas Sejahtera 100 Y, Lingk Perarudan Kel. Jimbaran, Kec Kuta Selatan, Kab Badung', '0', 'KTP', '5171015405730002', '0361708906', 'Data petir ', 'Klaim Asuransi', '08', '02', '2017', '22', '30', 7, '198205202003121002', 'GF.301/018/OPS/DNP/II/2017', 'PE/003/DNP/II/2017', 'GF.301/004a/OPS/DNP/II/2017', '50.000', 'Lima Puluh Ribu Rupiah', 'GF.301/004b/OPS/DNP/II/2017', '125.000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(10, '', '', '', 'Putu Indriyati', 'Pegawai Swasta', 'Siddhartha Ocean Front Resort', 'Desa Kubu, Kecamatan Kubu, Karangasem', '80853', 'KTP', '5171026509770003', '', 'Data Cuaca dan Petir', 'Klaim Asuransi', '23', '01', '2017', '12', '30', 39, '198912292009111001', 'GF.301/019/OPS/DNP/II/2017', 'PE/005/DNP/II/2017', 'GF.301/006a/OPS/DNP/II/2017', '50.000', 'Lima Puluh Ribu Rupiah', 'GF.301/006b/OPS/DNP/II/2017', '125.000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(12, '', '', '', 'Eka Wirastuti', 'Pegawai Swasta', 'B Villa', 'Jl. Pangkung sari, Seminyak, Bali, Indonesia', '80361', 'KTP', '000', '0361 731343', 'Data Petir', 'Klaim Asuransi', '11', '02', '2017', '01', '00', 6, '198903242009111001', 'GF.301/023/OPS/DNP/II/2017', 'PE/004/DNP/II/2017', 'GF.301/005a/OPS/DNP/II/2017', '50.000', 'Lima Puluh Ribu Rupiah', 'GF.301/005b/OPS/DNP/II/2017', '125.000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(15, '', '', '', 'Aji Dwi Hardianto', 'Pegawai Swasta', 'PT Solusi Tunas Pratama', 'Jl. Tentara Pelajar jakarta 12210/ Rukan Permata Senayan Blok C', '12210', 'KTP', '3305060506940002', '08001401380 / 0', 'Kejadian Petir daerah Kubu Karangasem', 'Klaim Asuransi', '11', '02', '2017', '01', '00', 39, '198903242009111001', 'GF.301/030/OPS/DNP/III/2017', 'PE/006/DNP/III/2017', 'GF.301/007a/OPS/DNP/III/2017', '125.000', 'Seratus Dua Puluh Lima Ribu Rupiah', 'GF.301/007b/OPS/DNP/III/2017', '50.000', 'Lima Puluh Ribu Rupiah'),
(18, '', '', '', 'Ika Sudarmaja', 'Pegawai Negeri', 'PLN', 'Taman Kopo Indah I Blok K 101', '00000', 'KTP', '3204092909930004', '08970858433', 'Data Petir', 'Klaim Asuransi', '20', '03', '2017', '15', '35', 14, '198903242009111001', 'GF.303/228/OPS/DNP/III/2017', 'PE.007/DNP/III/2017', 'GF.303/10a/OPS/DNP/III/2017', '125000', 'Seratus Lima Puluh Ribu Rupiah', 'GF.303/10b/OPS/DNP/III/2017', '50000', 'Lima Puluh Ribu Rupiah'),
(24, '', '', '', 'Gede Ariana', 'Pegawai Swasta', 'PT Mandira Infra Tripakarti', 'Sukasada - Singaraja', '81161', 'KTP', '5108093101810002', '085238819481', 'Data Petir', 'Klaim Asuransi', '21', '03', '2017', '18', '00', 18, '198612012008121001', 'GF.303/054/OPS/DNP/IV/2017', 'PE.009/DNP/IV/2017', 'GF.303/14a/OPS/DNP/IV/2017', '125000', 'Seratus Lima Puluh Ribu Rupiah', 'GF.303/14b/OPS/DNP/IV/2017', '50000', 'Lima Puluh Ribu Rupiah'),
(25, '', '', '', 'Balam Bali Villa', 'Pegawai Swasta', 'Balam Bali Villa', 'Jalan Teleng 100, Banjar Cengkok, Baha, Mengwi Badung', '80351', 'KTP', '-', '0816295888', 'Data Petir', 'Klaim Asuransi', '08', '04', '2017', '15', '00', 9, '198205202003121002', '', '', '', '', '', '', '', ''),
(26, '', '', '', 'Balam Bali Villa', 'Pegawai Swasta', 'Balam Bali Villa', 'Jalan Teleng 100, Banjar Cengkok, Baha, Mengwi Badung', '80351', 'KTP', '-', '-', 'Data Petir', 'Klaim Asuransi', '07', '04', '2017', '15', '00', 9, '198205202003121002', '', '', '', '', '', '', '', ''),
(27, '', '', '', 'Denny Sucita', 'Pegawai Swasta', 'Villa Permata Ayung', 'Banjar Tohpati, Desa Bongkasa, Kecamatan Abiansemal, Kabupaten Badung', '-', 'KTP', '-', '081246997414', 'Data Petir', 'Klaim Asuransi', '08', '04', '2017', '15', '00', 5, '198205202003121002', 'GF.301/073/OPS/DNP/V/2017', 'PE/010/DNP/V/2017', 'GF.301/&nbsp&nbsp&nbsp&nbsp/OPS/DNP/V/2017', '50000', 'Lima Puluh Ribu Rupiah', 'GF.301/&nbsp&nbsp&nbsp&nbsp/OPS/DNP/V/2017        ', '125000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(28, '', '', '', 'Gede Ariana', 'Swasta', 'PT. Mandira Infra Tripabarti', 'Singaraja', '-', 'KTP', '510809310181002', '(0361)8588151', 'Data Petir', 'Klaim Asuransi', '01', '05', '2017', '00', '00', 18, '198903242009111001', 'GF.301/074/OPS/DNP/VI/2017', 'PE/011/DNP/VI/2017', 'GF.301/019a/OPS/DNP/VI/2017', '50000', 'Lima Puluh Ribu Rupiah', 'GF.301/019b/OPS/DNP/VI/2017        ', '125000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(29, '', '', '', 'Kusbadi', 'Pegawai Swasta', 'Tower Bersama Group', 'Banjar Dinas Buluada Desa Selat, Kecamatan Sukasada , Kabupaten Buleleng (Site Tegal Linggah Singara', '', '', '-', '-', 'Petir', 'Klaim Asuransi', '12', '06', '2017', '00', '00', 18, '198903242009111001', 'GF.301/081/OPS/DNP/VI/2017', 'PE/012/DNP/VI/2017', 'GF.301/020a/OPS/DNP/VI/2017', '50000', 'Lima Puluh Ribu Rupiah', 'GF.301/020b/OPS/DNP/VI/2017', '125000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(31, '07', '08', '2017', 'Gede Semadi', 'Pegawai Swasta', 'Koperasi Daya Mitra Telekomunikasi', 'Jl. Gajah Mada, Pupuan, Kabupaten Tabanan', '82163', 'KTP', '', '', 'Data Sambaran Petir', 'Klaim Asuransi', '06', '10', '2017', '12', '00', 53, '198205202003121002', 'GF.301/111/OPS/DNP/X/2017', 'PE/014/DNP/X/2017', 'GF.301/023a/OPS/DNP/X/2017', '50000', 'Lima Puluh Ribu Rupiah', 'GF.301/023b/OPS/DNP/X/2017', '125000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(32, '07', '09', '2017', 'Laode Atim Suhartoyo', 'Pegawai Swasta', 'PT. Solusi Tunas Pratama', 'Desa Pekraman Pohgading, Denpasar Utara', '00000', 'KTP', '7403151804810001', '00000', 'Data Petir', 'Klaim Asuransi', '12', '06', '2017', '00', '00', 39, '198812252009111001', 'GF.301/103/OPS/DNP/IX/2017', 'PE/013/DNP/IX/2017', 'GF.301/022a/OPS/DNP/IX/2017', '50000', 'Lima Puluh Ribu Rupiah', 'GF.301/022b/OPS/DNP/IX/2017', '125000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(33, '19', '10', '2017', 'Ayu', 'Pegawai Swasta', 'Hotel WAPA_DI_UME', 'Jl. Sweta Banjar Bentuyung Ubud-Gianyar', '', 'KTP', '1234567890', '08123871005', 'Petir', 'Klaim Asuransi', '10', '10', '2017', '16', '00', 30, '198912292009111001', '', '', '', '', '', '', '', ''),
(34, '14', '11', '2017', 'I Made Wismaya', 'Pegawai Swasta', 'Blue Point Bay Villas', 'Jl Labuan Sait Uluwatu, Pecatu, Kuta Selatan', '80361', 'KTP', '5171022076800001', '0811385252', 'Data Petir', 'Klaim Asuransi', '13', '11', '2017', '17', '00', 7, '198612012008121001', 'GF.301/121/OPS/DNP/XI/2017', 'PE/015/DNP/XI/2017', 'GF.301/024a/OPS/DNP/XI/2017', '50000', 'Lima Puluh Ribu Rupiah', 'GF.301/024b/OPS/DNP/XI/2017', '125000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(35, '15', '11', '2017', 'Ika Sudarmaja', 'Pegawai Negeri', 'PLN', 'Jl Abianbase-Kapal, Mengwi, Badung, Bali', '80351', 'KTP', '3204092909930004', '08970858433', 'Kejadian Petir daerah SUTT 150KV Celukan Bawang-Ka', 'Klaim Asuransi', '15', '11', '2017', '13', '44', 53, '198912292009111001', 'GF.301/124/OPS/DNP/XI/2017', 'PE/016/DNP/XI/2017', 'GF.301/026a/OPS/DNP/XI/2017', '50000', 'Lima Puluh Ribu Rupiah', 'GF.301/026b/OPS/DNP/XI/2017', '125000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(36, '27', '11', '2017', 'Ika Sudarmaja', 'Pegawai Negeri', 'PLN', 'Jl Abianbase-Kapal, Mengwi, Badung, Bali', '80351', 'KTP', '3204092909930004', '08970858433', 'Kejadian Petir daerah SUTT Denpasar', 'Klaim Asuransi', '27', '11', '2017', '16', '08', 22, '198912292009111001', '1', '11', '1', '50000', 'Lima Puluh Ribu Rupiah', '1', '125000', 'Seratus Dua Puluh Lima Ribu Rupiah'),
(37, '12', '12', '2017', 'Hotel Ritz Carlton', 'Pegawai Swasta', 'Hotel Ritz Carlton', 'xxx', 'xxx', 'KTP', '000', '000', 'Kejadian petir', 'Klaim Asuransi', '12', '12', '2017', '01', '00', 7, '199112202012102001', '-', '-', '-', '-', '-', '-', '-', '-'),
(38, '12', '12', '2017', 'Maya Ubud Resort', 'Pegawai Swasta', 'Maya Ubud Resort', 'Ubud', '00', 'KTP', '00', '00', 'Petir', 'Klaim Asuransi', '07', '12', '2017', '02', '30', 30, '199112202012102001', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `NIP` char(20) NOT NULL,
  `User` varchar(25) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `KataSandi` varchar(25) DEFAULT NULL,
  `Statuspengguna` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`NIP`, `User`, `Nama`, `KataSandi`, `Statuspengguna`) VALUES
('1234', 'admin', 'Admin', 'admin', 'Admin'),
('195909231982031001', 'anik', 'I GST NGR. ANIK ARYANTO', '1234', 'Petugas'),
('195912311980032001', 'wayan', 'NI WYN PUTU DARMIYANI', '1234', 'Admin'),
('196001021981031000', 'asrori', 'Asrori', '1234', 'Admin'),
('196105301984032001', 'winarti', 'SRI WINARTI, SP', '1234', 'Admin'),
('196212311982031008', 'nurasin', 'I NYOMAN NURASIN', '1234', 'Admin'),
('196506251990031001', 'artana', 'I MADE ARTANA', '1234', 'Admin'),
('196511251987111001', 'artajaya', 'I GD MADE  ARTAJAYA', '1234', 'Admin'),
('196605121989031001', 'astika', 'I MADE ASTIKA, SP', '1234', 'Admin'),
('196807201990031003', 'ketut', 'I KETUT SUDIARTA', '1234', 'Admin'),
('197212301996031001', 'asnawa', 'I WYN SUKA ASNAWA, SP', '1234', 'Admin'),
('197312032008122001', 'switriasih', 'NI NYM SWITRIASIH, SE', '1234', 'Admin'),
('198205202003121002', 'sodikin', 'SODIKIN', '1234', 'Admin'),
('198408182009112001', 'diah', 'NI PT. DIAH AGUSTIN P, ST', '1234', 'Admin'),
('198612012008121001', 'dwi', 'DWI KARYADI PRIYANTO, S.SI', '1234', 'Admin'),
('198706082008122001', 'juniasih', 'NI KADE JUNIASIH, SE', '1234', 'Admin'),
('198812252009111001', 'kris', 'I MD KRIS ADI ASTRA,S.Si', '1234', 'Admin'),
('198902042010121001', 'ihsan', 'IHSAN BAGUS FAHAD ARAFAT, S.Tr', '1234', 'Admin'),
('198903242009111001', 'melky', 'MELKY ADI KURNIAWAN, S. SI', '1234', 'Admin'),
('198912292009111001', 'dedy', 'I PT. DEDY PRATAMA, S.ST', '1234', 'Admin'),
('199002242012101002', 'franky', 'FRANKY FERARY, S.Tr', '1234', 'Admin'),
('199105162012101001', 'ricko', 'RICKO KARDOSO, S.Tr', '1234', 'Admin'),
('199112202012102001', 'desi', 'NI LUH DESI PURNAMI, S.ST', '1234', 'Admin'),
('199210022013121000', 'arta', 'PANDE KM GD ARTA NEGARA', '1234', 'Admin'),
('199210022013121001', 'pande', 'PANDE KOMANG GEDE ARTA NEGARA,S.Tr', '1234', 'Admin'),
('199212062012101001', 'sabun', 'I GUSTI KETUT SATRIA BUNAGA, S.Tr', '1234', 'Admin'),
('19930531201322002', 'rizqa', 'RIZQA ADHARY TEGAR PUTRI, S.Tr', '1234', 'Admin'),
('199307112013121002', 'rian', 'RIAN MAHENDRA TARUNA, S.Tr', '1234', 'Admin'),
('199405062013121001', 'yusuf', 'YUSUF NUR PERKASA', '1234', 'Admin'),
('199405132013121001', 'witra', 'WITRA HESTIANTO, S.Tr', '1234', 'Admin'),
('199411282013122001', 'ganis', 'GANIS RIANDHITA', '1234', 'Admin'),
('199505022014112001', 'ika', 'IKA SULFIANA PUTRI', '1234', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `earthquake`
--
ALTER TABLE `earthquake`
  ADD PRIMARY KEY (`evid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_beritacuaca`
--
ALTER TABLE `tb_beritacuaca`
  ADD PRIMARY KEY (`IDBeritaCuaca`);

--
-- Indexes for table `tb_latlong`
--
ALTER TABLE `tb_latlong`
  ADD PRIMARY KEY (`IDLatLong`);

--
-- Indexes for table `tb_narasi`
--
ALTER TABLE `tb_narasi`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`IDPemohon`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_beritacuaca`
--
ALTER TABLE `tb_beritacuaca`
  MODIFY `IDBeritaCuaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_latlong`
--
ALTER TABLE `tb_latlong`
  MODIFY `IDLatLong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_narasi`
--
ALTER TABLE `tb_narasi`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  MODIFY `IDPemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
