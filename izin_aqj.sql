-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2024 at 02:36 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izin_aqj`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kamar`
--

DROP TABLE IF EXISTS `data_kamar`;
CREATE TABLE IF NOT EXISTS `data_kamar` (
  `id_kamar` int NOT NULL AUTO_INCREMENT,
  `wilayah` int NOT NULL,
  `nama_kamar` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_kamar`
--

INSERT INTO `data_kamar` (`id_kamar`, `wilayah`, `nama_kamar`) VALUES
(1, 1, 'asdsad'),
(2, 2, 'Mesir'),
(3, 2, 'Baghdad');

-- --------------------------------------------------------

--
-- Table structure for table `data_penghuni`
--

DROP TABLE IF EXISTS `data_penghuni`;
CREATE TABLE IF NOT EXISTS `data_penghuni` (
  `id_penghuni` int NOT NULL AUTO_INCREMENT,
  `id_santri` int NOT NULL,
  `id_wilayah` int NOT NULL,
  PRIMARY KEY (`id_penghuni`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_perizinan`
--

DROP TABLE IF EXISTS `data_perizinan`;
CREATE TABLE IF NOT EXISTS `data_perizinan` (
  `id_izin` int NOT NULL AUTO_INCREMENT,
  `id_santri` int NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jam_akhir` time NOT NULL,
  `status` enum('SUDAH KEMBALI','BELUM KEMBALI','TERLAMBAT KEMBALI','') NOT NULL,
  `status_izin` enum('SUDAH DIIZINKAN','BELUM DIIZINKAN','','') NOT NULL,
  `keperluan` varchar(256) NOT NULL,
  `pemberi_izin` int NOT NULL,
  PRIMARY KEY (`id_izin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_santri`
--

DROP TABLE IF EXISTS `data_santri`;
CREATE TABLE IF NOT EXISTS `data_santri` (
  `id_santri` int NOT NULL AUTO_INCREMENT,
  `ni_santri` varchar(100) NOT NULL,
  `nama_santri` varchar(100) NOT NULL,
  `tempat_lahir_santri` varchar(20) NOT NULL,
  `tanggal_lahir_santri` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_hp_ayah` varchar(20) NOT NULL,
  `no_hp_ibu` varchar(20) NOT NULL,
  `alamat_santri` varchar(256) NOT NULL,
  PRIMARY KEY (`id_santri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_wilayah`
--

DROP TABLE IF EXISTS `data_wilayah`;
CREATE TABLE IF NOT EXISTS `data_wilayah` (
  `id_wilayah` int NOT NULL AUTO_INCREMENT,
  `nama_wilayah` varchar(100) NOT NULL,
  `singkatan_wilayah` varchar(100) NOT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_wilayah`
--

INSERT INTO `data_wilayah` (`id_wilayah`, `nama_wilayah`, `singkatan_wilayah`) VALUES
(1, 'Sunan Kalijaga', 'SK'),
(2, 'Lembaga Pendidikan Bahasa Arab', 'LPBA'),
(3, 'Sunan Muria', 'SM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `level` enum('ADMIN','PENGURUS') NOT NULL,
  `status` enum('AKTIF','NONAKTIF') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `no_hp`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'administator@email.com', '0000000000', 'ADMIN', 'AKTIF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
