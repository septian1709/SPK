-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2018 pada 22.50
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihanperdana`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `repository`
--
ALTER TABLE `repository`
  ADD PRIMARY KEY (`idpublic`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `repository`
--
ALTER TABLE `repository`
  MODIFY `nomor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
