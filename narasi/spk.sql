-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 05:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataresume`
--

CREATE TABLE `dataresume` (
  `id` varchar(30) NOT NULL,
  `id_gempa` varchar(30) NOT NULL,
  `gempabumi` text NOT NULL,
  `RMS` varchar(30) NOT NULL,
  `GAP` varchar(30) NOT NULL,
  `FASE` varchar(30) NOT NULL,
  `TIME` varchar(30) NOT NULL DEFAULT 'CURRENT_TIMESTAMP(6)',
  `TIME2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SKOR` int(10) NOT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataresume`
--

INSERT INTO `dataresume` (`id`, `id_gempa`, `gempabumi`, `RMS`, `GAP`, `FASE`, `TIME`, `TIME2`, `SKOR`, `STATUS`) VALUES
('PGR III', '123', 'Info Gempa Mag:4.6SR, 15-Oct-17 17:56:17 WIB,Lok: 10.45 LS - 112.30 BT (251 km BaratDaya KAB-MALANG-JATIM), Kedlmn: 10 Km ::BMKG', '0.9', '80', '15', '15-Oct-17 17:56:17', '2017-11-05 08:49:59', 831, '1'),
('BMKG MATARAM', '12312', 'Info Gempa Mag:4.0SR, 15-Oct-17 17:56:17 WIB,Lok: 10.45 LS - 112.30 BT (277 km BaratDaya KAB-MALANG-JATIM), Kedlmn: 10 Km ::BMKG', '0.9', '100', '10', '15-Oct-17 17:56:17', '2017-11-05 08:48:30', 764, '0'),
('BMKG SANGLAH', '198723', 'Info Gempa Mag:4.8SR, 15-Oct-17 17:56:17 WIB,Lok: 10.45 LS - 112.30 BT (251 km BaratDaya KAB-MALANG-JATIM), Kedlmn: 10 Km ::BMKG', '1.3', '80', '8', '15-Oct-17 17:56:17', '2017-11-05 08:48:30', 763, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataresume`
--
ALTER TABLE `dataresume`
  ADD PRIMARY KEY (`id_gempa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
