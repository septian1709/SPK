-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2018 pada 22.45
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `dataresume`
--

CREATE TABLE `dataresume` (
  `id` varchar(30) NOT NULL,
  `idpublic` varchar(30) NOT NULL,
  `gempabumi` varchar(500) NOT NULL,
  `KODE` varchar(500) NOT NULL,
  `RMS` varchar(30) NOT NULL,
  `GAP` varchar(30) NOT NULL,
  `FASE` varchar(30) NOT NULL,
  `TIME` varchar(30) NOT NULL DEFAULT 'CURRENT_TIMESTAMP(6)',
  `TIME2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SKOR` int(10) NOT NULL,
  `OT` varchar(11) NOT NULL,
  `mag` varchar(4) NOT NULL,
  `lat` varchar(4) NOT NULL,
  `lon` varchar(5) NOT NULL,
  `depth` int(3) NOT NULL,
  `ket` text NOT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Struktur dari tabel `repository`
--

CREATE TABLE `repository` (
  `nomor` int(255) NOT NULL,
  `id` varchar(30) NOT NULL,
  `idpublic` varchar(30) NOT NULL,
  `gempabumi` varchar(500) NOT NULL,
  `KODE` varchar(500) NOT NULL,
  `RMS` varchar(30) NOT NULL,
  `GAP` varchar(30) NOT NULL,
  `FASE` varchar(30) NOT NULL,
  `TIME` varchar(30) NOT NULL DEFAULT 'CURRENT_TIMESTAMP(6)',
  `TIME2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SKOR` int(10) NOT NULL,
  `OT` varchar(11) NOT NULL,
  `mag` varchar(4) NOT NULL,
  `lat` varchar(4) NOT NULL,
  `lon` varchar(5) NOT NULL,
  `depth` int(3) NOT NULL,
  `ket` text NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `ket2` varchar(50) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sig1` varchar(100) NOT NULL,
  `sig2` varchar(100) NOT NULL,
  `sig3` varchar(100) NOT NULL,
  `sig4` varchar(100) NOT NULL,
  `sig5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `repository`
--

INSERT INTO `repository` (`nomor`, `id`, `idpublic`, `gempabumi`, `KODE`, `RMS`, `GAP`, `FASE`, `TIME`, `TIME2`, `SKOR`, `OT`, `mag`, `lat`, `lon`, `depth`, `ket`, `STATUS`, `ket2`, `sumber`, `lokasi`, `judul`, `sig1`, `sig2`, `sig3`, `sig4`, `sig5`) VALUES
(1, 'PGR III', 'bmg2018oqby\n', 'Info Gempa Mag:4.1 SR, 28-Jul-18 07:39:12 WIB, Lok:8.60 LS,119.15 BT (47 km Tenggara BIMA-NTB), Kedlmn:137 Km ::BMKG-PGR III', ' 28-Jul-18 07:39:12 WIB, Lok:8.60 LS,119.15 BT (47 km Tenggara BIMA-NTB), Kedlmn:137 Km ::BMKG-PGR III', '0.49', '121', '21', '07:39:12', '2018-07-30 20:00:36', 833, '07:39:12', '4.1 ', '-8.6', '119.1', -137, ' Lok:8.60 LS,119.15 BT (47 km Tenggara BIMA-NTB)', '1', '', 'aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).', 'laut', '', '', '', '', '', ''),
(2, 'PGR III', 'bmg2018osnt\n', 'Info Gempa Mag:3 SR, 29-Jul-18 15:54:19 WIB, Lok:8.91 LS,116.22 BT (24 km BaratDaya LOMBOKTENGAH-NTB), Kedlmn:13 Km ::BMKG-PGR III', ' 29-Jul-18 15:54:19 WIB, Lok:8.91 LS,116.22 BT (24 km BaratDaya LOMBOKTENGAH-NTB), Kedlmn:13 Km ::BMKG-PGR III', '0.68', '196', '9', '15:54:19', '2018-07-29 09:03:00', 632, '15:54:19', '3 SR', '-8.9', '116.2', -13, ' Lok:8.91 LS,116.22 BT (24 km BaratDaya LOMBOKTENGAH-NTB)', '1', '', '', '', '', '', '', '', '', ''),
(3, 'PGR III', 'bmg2018osox\n', 'Info Gempa Mag:2.8 SR, 29-Jul-18 16:28:38 WIB, Lok:8.76 LS,116.13 BT (12 km Tenggara LOMBOKBARAT-NTB), Kedlmn:34 Km ::BMKG-PGR III', ' 29-Jul-18 16:28:38 WIB, Lok:8.76 LS,116.13 BT (12 km Tenggara LOMBOKBARAT-NTB), Kedlmn:34 Km ::BMKG-PGR III', '1.18', '214', '8', '16:28:38', '2018-07-29 09:45:12', 532, '16:28:38', '2.8 ', '-8.7', '116.1', -34, ' Lok:8.76 LS,116.13 BT (12 km Tenggara LOMBOKBARAT-NTB)', '', '', '', '', '', '', '', '', '', ''),
(4, 'PGR III', 'bmg2018otrj\n', 'Info Gempa Mag:2.5 SR, 30-Jul-18 06:51:58 WIB, Lok:8.76 LS,116.30 BT (7 km Tenggara LOMBOKTENGAH-NTB), Kedlmn:18 Km ::BMKG-PGR III', ' 30-Jul-18 06:51:58 WIB, Lok:8.76 LS,116.30 BT (7 km Tenggara LOMBOKTENGAH-NTB), Kedlmn:18 Km ::BMKG-PGR III', '0.59', '215', '6', '06:51:58', '2018-07-30 19:36:01', 564, '06:51:58', '2.5 ', '-8.7', '116.3', -18, ' Lok:8.76 LS,116.30 BT (7 km Tenggara LOMBOKTENGAH-NTB)', '0', '', 'aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).', 'laut', '', '', '', '', '', ''),
(5, 'PGR III', 'bmg2018ottb\n', 'Info Gempa Mag:3.7 SR, 30-Jul-18 07:42:47 WIB, Lok:8.31 LS,116.47 BT (22 km TimurLaut LOMBOKUTARA-NTB), Kedlmn:10 Km ::BMKG-PGR III', ' 30-Jul-18 07:42:47 WIB, Lok:8.31 LS,116.47 BT (22 km TimurLaut LOMBOKUTARA-NTB), Kedlmn:10 Km ::BMKG-PGR III', '0.91', '192', '9', '07:42:47', '2018-07-30 00:52:42', 599, '07:42:47', '3.7 ', '-8.3', '116.4', -10, ' Lok:8.31 LS,116.47 BT (22 km TimurLaut LOMBOKUTARA-NTB)', '', '', '', '', '', '', '', '', '', ''),
(27, 'PGR III', 'bmg2018otzm\n', 'Info Gempa Mag:3 SR, 30-Jul-18 12:16:44 WIB, Lok:8.37 LS,116.54 BT (16 km BaratLaut LOMBOKTIMUR-NTB), Kedlmn:10 Km ::BMKG-PGR III', ' 30-Jul-18 12:16:44 WIB, Lok:8.37 LS,116.54 BT (16 km BaratLaut LOMBOKTIMUR-NTB), Kedlmn:10 Km ::BMKG-PGR III', '0.82', '172', '9', '12:16:44', '2018-07-30 20:22:06', 632, '12:16:44', '3 SR', '-8.3', '116.5', -10, ' Lok:8.37 LS,116.54 BT (16 km BaratLaut LOMBOKTIMUR-NTB)', '', '', '', '', '', '', '', '', '', ''),
(6, 'BMKG SANGLAH', 'BMKG2018oqbx\n', 'Info Gempa Mag:4 SR, 28-Jul-18 07:39:12 WIB, Lok:8.57 LS,119.19 BT (46 km TimurLaut BIMA-NTB), Kedlmn:134 Km ::BMKG-DNP', ' 28-Jul-18 07:39:12 WIB, Lok:8.57 LS,119.19 BT (46 km TimurLaut BIMA-NTB), Kedlmn:134 Km ::BMKG-DNP', '0.82', '119', '17', '07:39:12', '2018-07-28 00:52:55', 733, '07:39:12', '4 SR', '-8.5', '119.1', -134, ' Lok:8.57 LS,119.19 BT (46 km TimurLaut BIMA-NTB)', '', '', '', '', '', '', '', '', '', ''),
(7, 'BMKG SANGLAH', 'BMKG2018oqdi\n', 'Info Gempa Mag:3.8 SR, 28-Jul-18 08:22:03 WIB, Lok:9.42 LS,112.85 BT (135 km Tenggara KAB-MALANG-JATIM), Kedlmn:6 Km ::BMKG-DNP', ' 28-Jul-18 08:22:03 WIB, Lok:9.42 LS,112.85 BT (135 km Tenggara KAB-MALANG-JATIM), Kedlmn:6 Km ::BMKG-DNP', '0.99', '222', '13', '08:22:03', '2018-07-28 06:42:49', 435, '08:22:03', '3.8 ', '-9.4', '112.8', -6, ' Lok:9.42 LS,112.85 BT (135 km Tenggara KAB-MALANG-JATIM)', '1', '', '', '', '', '', '', '', '', ''),
(8, 'BMKG SANGLAH', 'BMKG2018osnu\n', 'Info Gempa Mag:3 SR, 29-Jul-18 15:54:23 WIB, Lok:8.72 LS,116.37 BT (6 km TimurLaut LOMBOKTENGAH-NTB), Kedlmn:11 Km ::BMKG-DNP', ' 29-Jul-18 15:54:23 WIB, Lok:8.72 LS,116.37 BT (6 km TimurLaut LOMBOKTENGAH-NTB), Kedlmn:11 Km ::BMKG-DNP', '0.33', '204', '8', '15:54:23', '2018-07-29 09:01:31', 631, '15:54:23', '3 SR', '-8.7', '116.3', -11, ' Lok:8.72 LS,116.37 BT (6 km TimurLaut LOMBOKTENGAH-NTB)', '', '', '', '', '', '', '', '', '', ''),
(9, 'BMKG SANGLAH', 'BMKG2018osox\n', 'Info Gempa Mag:2.9 SR, 29-Jul-18 16:28:43 WIB, Lok:8.25 LS,116.58 BT (18 km TimurLaut LOMBOKUTARA-NTB), Kedlmn:5 Km ::BMKG-DNP', ' 29-Jul-18 16:28:43 WIB, Lok:8.25 LS,116.58 BT (18 km TimurLaut LOMBOKUTARA-NTB), Kedlmn:5 Km ::BMKG-DNP', '0.20', '199', '9', '16:28:43', '2018-07-29 09:46:30', 698, '16:28:43', '2.9 ', '-8.2', '116.5', -5, ' Lok:8.25 LS,116.58 BT (18 km TimurLaut LOMBOKUTARA-NTB)', '1', '', '', '', '', '', '', '', '', ''),
(10, 'BMKG SANGLAH', 'BMKG2018otqv\n', 'Info Gempa Mag:3.7 SR, 30-Jul-18 06:35:03 WIB, Lok:8.31 LS,116.60 BT (20 km Tenggara LOMBOKUTARA-NTB), Kedlmn:13 Km ::BMKG-DNP', ' 30-Jul-18 06:35:03 WIB, Lok:8.31 LS,116.60 BT (20 km Tenggara LOMBOKUTARA-NTB), Kedlmn:13 Km ::BMKG-DNP', '2.54', '192', '11', '06:35:03', '2018-07-30 00:22:03', 468, '06:35:03', '3.7 ', '-8.3', '116.6', -13, ' Lok:8.31 LS,116.60 BT (20 km Tenggara LOMBOKUTARA-NTB)', '', '', '', '', '', '', '', '', '', ''),
(11, 'BMKG SANGLAH', 'BMKG2018ottb\n', 'Info Gempa Mag:3.7 SR, 30-Jul-18 07:42:47 WIB, Lok:8.38 LS,116.46 BT (13 km Tenggara LOMBOKUTARA-NTB), Kedlmn:13 Km ::BMKG-DNP', ' 30-Jul-18 07:42:47 WIB, Lok:8.38 LS,116.46 BT (13 km Tenggara LOMBOKUTARA-NTB), Kedlmn:13 Km ::BMKG-DNP', '0.59', '138', '11', '07:42:47', '2018-07-30 19:20:40', 699, '07:42:47', '3.7 ', '-8.3', '116.4', -13, ' Lok:8.38 LS,116.46 BT (13 km Tenggara LOMBOKUTARA-NTB)', '0', '', 'aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).', 'laut', '', 'tes1', 'tes2', 'tes3', 'tes4', 'tes5'),
(28, 'BMKG SANGLAH', 'BMKG2018otzm\n', 'Info Gempa Mag:3.2 SR, 30-Jul-18 12:16:45 WIB, Lok:8.31 LS,116.56 BT (16 km Tenggara LOMBOKUTARA-NTB), Kedlmn:2 Km ::BMKG-DNP', ' 30-Jul-18 12:16:45 WIB, Lok:8.31 LS,116.56 BT (16 km Tenggara LOMBOKUTARA-NTB), Kedlmn:2 Km ::BMKG-DNP', '0.70', '177', '10', '12:16:45', '2018-07-30 20:40:26', 665, '12:16:45', '3.2 ', '-8.3', '116.5', -2, ' Lok:8.31 LS,116.56 BT (16 km Tenggara LOMBOKUTARA-NTB)', '1', '', 'aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).', 'laut', '', 't', '', '', '', '');

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
  `Keterangan` varchar(250) NOT NULL,
  `sig` varchar(100) NOT NULL,
  `mmi` varchar(100) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Petugas` varchar(20) NOT NULL,
  `naras` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_narasi`
--

INSERT INTO `tb_narasi` (`No`, `Tanggal`, `OT`, `Lat`, `Bujur`, `Mag`, `Kedalaman`, `Lokasi`, `Stasiun`, `Keterangan`, `sig`, `mmi`, `Status`, `Petugas`, `naras`) VALUES
(3, '13 April 2018', '15:22:09', '8.81', '118.37', '4.9', '113', ' 30 km Tenggara Dompu NTB', 'BMKG-PGRIII', 'Bima I SIG (I-II MMI)', '2meilombokmmi.jpg', 'BimaMMI.jpeg', '', 'witra', ''),
(4, '26 April 2018', '17:54:18', '7.54', '115.58', '5.8', '366', ' 89 km Timur Laut Karangasem BALI', 'BMKG-PGR III', 'Gianyar dan Karangasem (I SIG (II MMI)),\r\n			Nusa Dua, Kuta dan Mataram (II SIG (III MMI))', 'buleleng sig.jpg', 'buleleng mmi.jpg', '', 'pande', ''),
(5, '30 April 2018', '00:13:11', '8.72', '116.20', '3.0', '10', ' 9 km Barat Daya Lombok Tengah NTB', 'BMKG-KHK', 'Lombok Barat II SIG (III MMI)', '', 'lombok baratmmi.jpg', '', 'sabun', ''),
(6, '01 Mei 2018', '14:13:31', '8.86', '118.37', '5.0', '115', ' 36 km Tenggara Dompu NTB', 'BMKG-PGR III', 'Bima I SIG (II MMI)', 'bima1meiSIG.jpg', 'bima1mei.jpg', '', 'rian', ''),
(7, '03 Mei 2018', '00:11:36', '8.55', '115.82', '3.3', '23', ' 31 km Barat Laut Mataram NTB', 'BMKG-PGR III', 'Karangasem, Mataram, Lombok Barat II SIG (III MMI)', '', '2meilombokmmi.jpg', '', 'rian', ''),
(44, '07 Mei 2018', '23:59:13', '8.90', '118.73', '4.5', '93', ' 48 km Barat Daya Bima NTB', 'BMKG-PGR III', 'Bima I SIG (II MMI)', 'Bima_07052018SIG.jpg', 'Bima_07052018MMI.jpg', '', 'pande', ''),
(80, '19 Mei 2018', '15:54:45', '9.27', '119.22', '4.6', '12', ' 31 km Timur Laut Sumba Barat Daya NTT', 'BMKG-PGR III', 'Bima (I SIG (II MMI)),\r\n			Waingapu (II SIG (III MMI))', '190518145445SIG.jpg', '190518145445MMI.jpg', '', 'pande', ''),
(85, '22 Mei 2018', '18:01:43', '9.02', '115.63', '4.8', '91', ' 33 km Tenggara Klungkung BALI', 'BMKG-PGR III', 'Karangasem dan Jimbaran (I SIG (II MMI)),\r\n			Denpasar, Mataram, dan Kuta (II SIG (III MMI))', '22Mei2018SIGBALI.jpg', '22Mei2018MMIBALI.jpg', '', 'sabun', ''),
(94, '29 Mei 2018', '03:25:26', '9.29', '118.42', '5.6', '10', ' 84 km Barat Laut Sumba Barat Daya NTT', 'BMKG-PGR III', 'Kuta (I SIG (II MMI)),\r\n			Mataram, Sumbawa, Bima, dan Tambolaka  (II SIG (III MMI))', '', '20180529022526Sumbawa_MMI.jpeg', '', 'Ihsan', ''),
(101, '04 Jun 2018', '05:16:49', '8.74', '118.37', '4.9', '119', ' 22 km Tenggara Dompu NTB', 'BMKG-PGR III', 'Bima I SIG (II MMI)', '20180604BimSIG.jpeg', '20180604BimaMMI.jpeg', '', 'Pande', ''),
(102, '13 Jun 2018', '19:23:41', '8.49', '116.07', '3.8', '10', ' 17 km Barat Laut Lombok Barat NTB', 'BMKG-PGR III', 'Mataram (I SIG (II MMI)),\r\n			Lombok Utara (II SIG (III MMI))', 'WhatsApp Image 2018-06-13 at 8.16.44 PM.jpeg', 'WhatsApp Image 2018-06-13 at 8.16.35 PM.jpeg', '', 'sabun', ''),
(138, '11 Jun 2018', '07:30:35', '7.57', '120.01', '4.1', '399', ' 115 km Timur Laut Manggarai Barat NTT', 'BMKG-DNP', 'Xvmxvm I SIG (II MMI)', '', '', '', 'pande', ''),
(139, '11 Jun 2018', '07:30:35', '7.57', '120.01', '4.1', '399', ' 115 km Timur Laut Manggarai Barat NTT', 'BMKG-DNP', 'Xvmxvm I SIG (II MMI)', '', '', '', 'pande', ''),
(140, '11 Jun 2018', '07:30:35', '7.57', '120.01', '4.1', '399', ' 115 km Timur Laut Manggarai Barat NTT', 'BMKG-DNP', 'Xvmxvm I SIG (II MMI)', '', '', '', 'pande', ''),
(141, '11 Jun 2018', '07:30:35', '7.57', '120.01', '4.1', '399', ' 115 km Timur Laut Manggarai Barat NTT', 'BMKG-DNP', 'J,m I SIG (II MMI)', '', '', '', 'pande', ''),
(142, '11 Jun 2018', '07:30:35', '7.57', '120.01', '4.1', '399', ' 115 km Timur Laut Manggarai Barat NTT', 'BMKG-DNP', 'Fhgn I SIG (II MMI)', '', '', '', 'pande', ''),
(143, '11 Jun 2018', '07:30:35', '7.57', '120.01', '4.1', '399', ' 115 km Timur Laut Manggarai Barat NTT', 'BMKG-DNP', 'Fhgn I SIG (II MMI)', '', '', '', 'pande', ''),
(144, '23 Jun 2018', '07:20:52', '9.95', '119.45', '3.7', '34', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', 'Xbxvcb I SIG (II MMI)', '', '', '', 'pande', ''),
(145, '23 Jun 2018', '07:20:52', '9.95', '119.45', '3.7', '34', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', 'Mataram I SIG (II MMI)', '', '', '', 'pande', ''),
(146, '23 Jun 2018', '07:20:52', '7.95', '119.45', '3.7', '34', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', 'Mataram I SIG (II MMI)', '', '', '', 'pande', ''),
(147, '23 Jun 2018', '07:20:52', '9.95', '119.45', '3.7', '34', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', 'Mataram I SIG (II MMI)', '', '', '', 'pande', ''),
(148, '23 Jun 2018', '07:20:52', '9.95', '117.45', '3.7', '34', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', 'Mataram I SIG (II MMI)', '', '', '', 'pande', ''),
(149, '23 Jun 2018', '07:20:52', '7.95', '117.45', '3.7', '34', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', 'Mataram I SIG (II MMI)', '', '', '', 'pande', ''),
(150, '23 Jun 2018', '07:20:52', '7.95', '17.45', '3.7', '34', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', 'Mataram I SIG (II MMI)', '', '', '', 'pande', ''),
(151, '23 Jun 2018', '07:20:52', '9.95', '119.45', '3.7', '300', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', ' ', '', '', '', 'pande', ''),
(152, '23 Jun 2018', '07:20:52', '9.95', '119.45', '3.7', '34', ' 33 km Tenggara Sumba Barat NTT', 'BMKG-PGR III', 'Mataram I SIG (II MMI)', '', '', '', 'pande', ''),
(153, '27 Jun 2018', '13:37:40', '8.06', '117.81', '5.0', '10', ' 79 km Barat Laut Dompu NTB', 'BMKG', 'Sumbawa dan Bima II SIG (III MMI)', '06_27123740SIG.jpg', '06_27123740MMI.jpg', '', 'pande', ''),
(154, '01 Juli 2018', '14:00:16', '8.64', '116.15', '4.5', '109', ' 4 km Timur Laut Lombok Barat NTB', 'BMKG', 'Praya (I SIG (II MMI)),\r\n			Mataram, Lombok Timur dan Lombok Barat (II SIG (III MMI))', '1juli2018lombokSIG.jpg', '1juli2018lombokMMI.jpg', '', 'rian', ''),
(155, '03 Juli 2018', '09:19:00', '9.68', '115.20', '5.0', '10', ' 112 km Barat Daya Denpasar BALI', 'BMKG', 'Mataram (I SIG (II MMI)),\r\n			Kuta dan Denpasar (II SIG (III MMI))', '', '3072018MMIdenpasar.jpeg', '', 'ricko', ''),
(156, '04 Juli 2018', '13:14:47', '9.97', '119.00', '5.4', '10', ' 50 km Barat Daya Sumba Barat Daya NTT', 'BMKG', ' ', 'WhatsApp Image 2018-07-04 at 13.39.26.jpeg', '', '', 'witra', ''),
(157, '13 Juli 2018', '13:36:49', '8.98', '116.22', '4.1', '79', ' 32 km Barat Daya Lombok Tengah NTB', 'BMKG-PGR III', 'Lombok Tengah I SIG (II MMI)', 'Loteng13072018SIG.jpg', 'Loteng13072018MMI.jpg', '', 'ricko', ''),
(158, '15 Juli 2018', '22:03:57', '8.71', '119.48', '4.5', '134', ' 65 km Barat Daya Manggarai Barat NTT', 'BMKG-PGR III', 'Bima I SIG (II MMI)', 'WhatsApp Image 2018-07-15 at 22.34.12.jpeg', 'WhatsApp Image 2018-07-15 at 22.29.22.jpeg', '', 'witra', ''),
(159, '15 Juli 2018', '22:03:57', '8.71', '119.48', '4.5', '134', ' 65 km Barat Daya Manggarai Barat NTT', 'BMKG-PGR III', 'Bima I SIG (II MMI)', 'WhatsApp Image 2018-07-15 at 22.34.12.jpeg', 'WhatsApp Image 2018-07-15 at 22.29.22.jpeg', '', 'witra', ''),
(160, '16 Juli 2018', '07:48:51', '8.89', '115.38', '4.8', '111', ' 25 km Barat Daya Klungkung BALI', 'BMKG-PGR III', 'Denpasar, Nusa Dua, Mataram, dan Lombok Tengah II SIG (III MMI)', 'WhatsApp Image 2018-07-16 at 08.08.27.jpeg', 'WhatsApp Image 2018-07-16 at 08.08.25.jpeg', 'Aktif', 'rizqa', ''),
(161, '16 Juli 2018', '07:48:51', '8.89', '115.38', '4.8', '111', ' 25 km Barat Daya Klungkung BALI', 'BMKG-PGR III', 'Denpasar, Nusa Dua, Mataram, dan Lombok Tengah II SIG (III MMI)', 'WhatsApp Image 2018-07-16 at 08.08.27.jpeg', 'WhatsApp Image 2018-07-16 at 08.08.25.jpeg', 'Aktif', 'rizqa', '');

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
('199210022013121001', 'pande', 'PANDE KOMANG GEDE ARTA NEGARA, S.Tr', '1234', 'Admin'),
('199212062012101001', 'sabun', 'I GUSTI KETUT SATRIA BUNAGA, S.Tr', '1234', 'Admin'),
('19930531201322002', 'rizqa', 'RIZQA ADHARY TEGAR PUTRI, S.Tr', '1234', 'Admin'),
('199307112013121002', 'rian', 'RIAN MAHENDRA TARUNA, S.Tr', '1234', 'Admin'),
('199405062013121001', 'yusuf', 'YUSUF NUR PERKASA', '1234', 'Admin'),
('199405132013121001', 'witra', 'WITRA HESTIANTO, S.Tr', '1234', 'Admin'),
('199411282013122001', 'ganis', 'GANIS RIANDHITA', '1234', 'Admin'),
('199505022014112001', 'ika', 'IKA SULFIANA PUTRI', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjelasan`
--

CREATE TABLE `tb_penjelasan` (
  `no` int(20) NOT NULL,
  `OT` char(15) NOT NULL,
  `sig` varchar(100) NOT NULL,
  `mmi` varchar(100) NOT NULL,
  `narasi` varchar(3000) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjelasan`
--

INSERT INTO `tb_penjelasan` (`no`, `OT`, `sig`, `mmi`, `narasi`, `judul`, `kondisi`) VALUES
(5, '15.54.45', '190518145445SIG.jpg', '', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG BIMA DAN WAINGAPU , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nSabtu, 19Â MeiÂ 2018 pukul 15.54.45 WITA, wilayah Bima dan Waingapu diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,6. Episenter terletak pada kordinat 9,27 LS dan 119,22 BT atau tepatnya pada jarak 31Â kmÂ arahÂ Timur Laut Sumba Barat Daya NTT pada kedalaman 12 km .\r\nÂ \r\nDampak gempabumi berdasarkan laporan masyarakat berupa guncangan dirasakan di wilayah Waingapu dalam skala intensitas II SIG (III MMI). Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang. Selain itu, di Bima guncangan lemah dirasakan dalam skala intensitas I SIG (II MMI). Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.\r\nÂ \r\nJika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi dangkal akibat aktifitas sesar aktif.\r\nÂ \r\nHingga pukul 16:09 WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock). Kepada masyarakat di wilayah Bima dan Waingapu dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*\r\nÂ \r\nMataram, 19 Mei 2018\r\nKepala Stasiun Geofisika Mataram\r\nAgus Riyanto, SP.MM\r\n', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG BIMA DAN WAINGAPU , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nSabtu, 19Â MeiÂ 2018 pukul 15.54.45 WITA, wilayah Bima dan Waingapu diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,6. Episenter terletak pada kordinat 9,27 LS dan 119,22 BT atau tepatnya pada jarak 31Â kmÂ arahÂ Timur Laut Sumba Barat Daya NTT pada kedalaman 12 km...\r\n', ''),
(9, '15.22.30', 'bima1meiSIG.jpg', '', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG TES NARASI , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nJumat, 13Â AprilÂ 2018 pukul 15.22.30 WITA, wilayah Tes Narasi diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,9. Episenter terletak pada kordinat 8,81 LS dan 118,37 BT atau tepatnya pada jarak 30Â kmÂ arahÂ Tenggara Dompu NTB pada kedalaman 113 km .\r\nÂ \r\nDampak gempabumi berdasarkan laporan masyarakat menunjukkan bahwa wilayah Tes Narasi mengalami guncangan dalam skala intensitas I SIG (II MMI). Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang. Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.\r\nÂ \r\nJika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi menengah akibat aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).\r\nÂ \r\nHingga pukul 06:46 WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock). Kepada masyarakat di wilayah Tes Narasi dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*\r\nÂ \r\nMataram, 21 Mei 2018\r\nKepala Stasiun Geofisika Mataram\r\nAgus Riyanto, SP.MM\r\n', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG TES NARASI , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nJumat, 13Â AprilÂ 2018 pukul 15.22.30 WITA, wilayah Tes Narasi diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,9. Episenter terletak pada kordinat 8,81 LS dan 118,37 BT atau tepatnya pada jarak 30Â kmÂ arahÂ Tenggara Dompu NTB pada keda...', ''),
(10, '18.01.43', '22Mei2018SIGBALI.jpg', '', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG BALI DAN LOMBOK , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nSelasa, 22Â MeiÂ 2018 pukul 18.01.43 WITA, wilayah Bali Dan Lombok diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,8. Episenter terletak pada kordinat 9,02 LS dan 115,63 BT atau tepatnya pada jarak 33Â kmÂ arahÂ Tenggara Klungkung Bali pada kedalaman 91 km .\r\nÂ \r\nDampak gempabumi berdasarkan laporan masyarakat berupa guncangan dirasakan di wilayah Denpasar, Mataram, dan Kuta dalam skala intensitas II SIG (III MMI). Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang. Selain itu, di Karangasem dan Jimbaran guncangan lemah dirasakan dalam skala intensitas I SIG (II MMI). Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.\r\nÂ \r\nJika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi menengah akibat aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia.\r\nÂ \r\nHingga pukul 18:21 WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock). Kepada masyarakat di wilayah Bali Dan Lombok dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*\r\nÂ \r\nMataram, 22 Mei 2018\r\nKepala Stasiun Geofisika Mataram\r\nAgus Riyanto, SP.MM\r\n', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG BALI DAN LOMBOK , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nSelasa, 22Â MeiÂ 2018 pukul 18.01.43 WITA, wilayah Bali Dan Lombok diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,8. Episenter terletak pada kordinat 9,02 LS dan 115,63 BT atau tepatnya pada jarak 33Â kmÂ arahÂ Tenggara Klungkung Bali pada kedalaman 91 km .', ''),
(18, '03.25.26', '20180604BimSIG.jpeg', '', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG BALI DAN NTB , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nSelasa, 29Â MeiÂ 2018 pukul 03.25.26 WITA, wilayah Bali Dan NTB diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=5,6. Episenter terletak pada kordinat 9,29 LS dan 118,42 BT atau tepatnya pada jarak 84Â kmÂ arahÂ Barat Laut Sumba Barat Daya NTT pada kedalaman 10 km .\r\nÂ \r\nDampak gempabumi berdasarkan laporan masyarakat berupa guncangan dirasakan di wilayah Mataram, Sumbawa, Bima, dan Tambolaka dalam skala intensitas II SIG (III MMI). Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang. Selain itu, di Kuta guncangan lemah dirasakan dalam skala intensitas I SIG (II MMI). Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.\r\nÂ \r\nJika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi dangkal akibat aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia.\r\nÂ \r\nHingga pukul 01:51 WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock). Kepada masyarakat di wilayah Bali Dan NTB dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*\r\nÂ \r\nMataram, 07 Juni 2018\r\nKepala Stasiun Geofisika Mataram\r\nAgus Riyanto, SP.MM\r\n', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG BALI DAN NTB , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nSelasa, 29Â MeiÂ 2018 pukul 03.25.26 WITA, wilayah Bali Dan NTB diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=5,6. Episenter terletak pada kordinat 9,29 LS dan 118,42 BT atau tepatnya pada jarak 84Â kmÂ arahÂ Barat Laut Sumba Barat Daya NTT pada kedalaman 10 km .\r...', ''),
(19, '05.16.49', '20180604BimSIG.jpeg', '', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG BIMA , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nSenin, 04Â JunÂ 2018 pukul 05.16.49 WITA, wilayah Bima diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,9. Episenter terletak pada kordinat 8,74 LS dan 118,37 BT atau tepatnya pada jarak 22Â kmÂ arahÂ Tenggara Dompu NTB pada kedalaman 119 km .\r\nÂ \r\nDampak gempabumi berdasarkan laporan masyarakat menunjukkan bahwa wilayah Bima mengalami guncangan dalam skala intensitas I SIG (II MMI). Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang. Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.\r\nÂ \r\nJika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi menengah akibat aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia.\r\nÂ \r\nHingga pukul 01:58 WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock). Kepada masyarakat di wilayah Bima dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*\r\nÂ \r\nMataram, 07 Juni 2018\r\nKepala Stasiun Geofisika Mataram\r\nAgus Riyanto, SP.MM\r\n', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG BIMA , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nSenin, 04Â JunÂ 2018 pukul 05.16.49 WITA, wilayah Bima diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,9. Episenter terletak pada kordinat 8,74 LS dan 118,37 BT atau tepatnya pada jarak 22Â kmÂ arahÂ Tenggara Dompu NTB pada kedalaman 119 km .\r\nÂ \r\nDampak gempabumi berdasa...', ''),
(20, '19.23.41', 'WhatsApp Image 2018-06-13 at 8.16.44 PM.jpeg', '', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG LOMBOK , NUSA TENGGARA BARAT.\r\nÂ \r\nRabu, 13Â JunÂ 2018 pukul 19.23.41 WITA, wilayah Lombok diguncang gempabumi tektonik. Hasil analisa BMKG menunjukkan bahwa gempabumi ini berkekuatan M=3,8. Episenter terletak pada kordinat 8,49 LS dan 116,07 BT atau tepatnya pada jarak 17Â kmÂ arahÂ Barat Laut Lombok Barat NTB pada kedalaman 10 km .\r\nÂ \r\nDampak gempabumi berdasarkan laporan masyarakat berupa guncangan dirasakan di wilayah Lombok Utara dalam skala intensitas II SIG (III MMI). Di daerah ini guncangan gempabumi dirasakan oleh sebagian orang. Selain itu, di Mataram guncangan lemah dirasakan dalam skala intensitas I SIG (II MMI).\r\nÂ \r\nJika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi dangkal akibat aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).\r\nÂ \r\nHingga pukul 19:47 WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock). Kepada masyarakat di wilayah Lombok dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*\r\nÂ \r\nMataram, 13 Juni 2018\r\nKepala Stasiun Geofisika Mataram\r\nAgus Riyanto, SP.MM\r\n', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG LOMBOK , NUSA TENGGARA BARAT.\r\nÂ \r\nRabu, 13Â JunÂ 2018 pukul 19.23.41 WITA, wilayah Lombok diguncang gempabumi tektonik. Hasil analisa BMKG menunjukkan bahwa gempabumi ini berkekuatan M=3,8. Episenter terletak pada kordinat 8,49 LS dan 116,07 BT atau tepatnya pada jarak 17Â kmÂ arahÂ Barat Laut Lombok Barat NTB pada kedalaman 10 km .\r\nÂ \r\nDampak gempabumi...', ''),
(71, '13.37.40', '', '', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG NTB , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nRabu, 27Â JunÂ 2018 pukul 13.37.40 WITA, wilayah NTB diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=5,0. Episenter terletak pada kordinat 8,06 LS dan 117,81 BT atau tepatnya pada jarak 79Â kmÂ arahÂ Barat Laut Dompu NTB pada kedalaman 10 km .\r\nÂ \r\nDampak gempabumi berdasarkan laporan masyarakat menunjukkan bahwa wilayah Sumbawa dan Bima mengalami guncangan dalam skala intensitas II SIG (III MMI). Di daerah ini guncangan gempabumi dirasakan oleh sebagian orang. Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.\r\nÂ \r\nJika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi dangkal akibat aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).\r\nÂ \r\nHingga pukul 14:04 WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock). Kepada masyarakat di wilayah NTB dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*\r\nÂ \r\nMataram, 27 Juni 2018\r\nKepala Stasiun Geofisika Mataram\r\nAgus Riyanto, SP.MM\r\n', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG NTB , TIDAK BERPOTENSI TSUNAMI\r\nÂ \r\nRabu, 27Â JunÂ 2018 pukul 13.37.40 WITA, wilayah NTB diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=5,0. Episenter terletak pada kordinat 8,06 LS dan 117,81 BT atau tepatnya pada jarak 79Â kmÂ arahÂ Barat Laut Dompu NTB pada kedalaman 10 km .\r\nÂ \r\nDampak gempabumi berdasark...', ''),
(72, '14.00.16', '1juli2018lombokSIG.jpg', '', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG LOMBOK , NUSA TENGGARA BARAT.\r\nÂ \r\nMinggu, 01Â JuliÂ 2018 pukul 14.00.16 WITA, wilayah Lombok diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,5. Episenter terletak pada kordinat 8,64 LS dan 116,15 BT atau tepatnya pada jarak 4Â kmÂ arahÂ Timur Laut Lombok Barat NTB pada kedalaman 109 km .\r\nÂ \r\nDampak gempabumi berdasarkan laporan masyarakat berupa guncangan dirasakan di wilayah Mataram, Lombok Timur dan Lombok Barat dalam skala intensitas II SIG (III MMI). Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang. Selain itu, di Praya guncangan lemah dirasakan dalam skala intensitas I SIG (II MMI).\r\nÂ \r\nJika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi menengah akibat aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia.\r\nÂ \r\nHingga pukul 14:23 WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock). Kepada masyarakat di wilayah Lombok dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*\r\nÂ \r\nMataram, 01 Juli 2018\r\nKepala Stasiun Geofisika Mataram\r\nAgus Riyanto, SP.MM\r\n', '\r\nGEMPABUMI TEKTONIK MENGGUNCANG LOMBOK , NUSA TENGGARA BARAT.\r\nÂ \r\nMinggu, 01Â JuliÂ 2018 pukul 14.00.16 WITA, wilayah Lombok diguncang gempabumi tektonik. Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=4,5. Episenter terletak pada kordinat 8,64 LS dan 116,15 BT atau tepatnya pada jarak 4Â kmÂ arahÂ Timur Laut Lombok Barat NTB pada kedalaman 109 km .\r\nÂ \r\nDampak gempabu...', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataresume`
--
ALTER TABLE `dataresume`
  ADD PRIMARY KEY (`KODE`);

--
-- Indexes for table `repository`
--
ALTER TABLE `repository`
  ADD PRIMARY KEY (`idpublic`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `tb_narasi`
--
ALTER TABLE `tb_narasi`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `tb_penjelasan`
--
ALTER TABLE `tb_penjelasan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `repository`
--
ALTER TABLE `repository`
  MODIFY `nomor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_narasi`
--
ALTER TABLE `tb_narasi`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `tb_penjelasan`
--
ALTER TABLE `tb_penjelasan`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
