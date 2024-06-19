-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2024 at 01:35 AM
-- Server version: 8.2.0
-- PHP Version: 8.0.30

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_kamar`
--

INSERT INTO `data_kamar` (`id_kamar`, `wilayah`, `nama_kamar`) VALUES
(10, 1, 'SK-1'),
(9, 1, 'SK-2'),
(8, 4, 'Muharram'),
(11, 2, 'Palestina'),
(12, 2, 'Mesir'),
(13, 2, 'Afghanistan'),
(18, 2, 'Baghdad'),
(17, 3, 'xcvgfdsg'),
(16, 5, 'France');

-- --------------------------------------------------------

--
-- Table structure for table `data_lembaga`
--

DROP TABLE IF EXISTS `data_lembaga`;
CREATE TABLE IF NOT EXISTS `data_lembaga` (
  `id_lembaga` int NOT NULL AUTO_INCREMENT,
  `singkatan_lembaga` varchar(20) NOT NULL,
  `nama_lembaga` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_lembaga`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_lembaga`
--

INSERT INTO `data_lembaga` (`id_lembaga`, `singkatan_lembaga`, `nama_lembaga`) VALUES
(1, 'SMKAQJ', 'SMK Al-Qodiri Jember'),
(2, 'MTSUAQ', 'MTs. Unggulan Al-Qodiri Jember'),
(4, 'SMPPAQJ', 'SMP Plus Al-Qodiri Jember'),
(5, 'IAIQOD', 'Institut Agama Islam Al-Qodiri Jember');

-- --------------------------------------------------------

--
-- Table structure for table `data_penghuni`
--

DROP TABLE IF EXISTS `data_penghuni`;
CREATE TABLE IF NOT EXISTS `data_penghuni` (
  `id_penghuni` int NOT NULL AUTO_INCREMENT,
  `id_santri` int NOT NULL,
  `id_wilayah` int NOT NULL,
  `id_kamar` int NOT NULL,
  PRIMARY KEY (`id_penghuni`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_penghuni`
--

INSERT INTO `data_penghuni` (`id_penghuni`, `id_santri`, `id_wilayah`, `id_kamar`) VALUES
(8, 7, 2, 11),
(9, 11, 5, 16),
(6, 6, 2, 18),
(10, 12, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `data_perizinan`
--

DROP TABLE IF EXISTS `data_perizinan`;
CREATE TABLE IF NOT EXISTS `data_perizinan` (
  `id_izin` int NOT NULL AUTO_INCREMENT,
  `kode_perizinan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_perizinan`
--

INSERT INTO `data_perizinan` (`id_izin`, `kode_perizinan`, `id_santri`, `tanggal_mulai`, `jam_mulai`, `tanggal_akhir`, `jam_akhir`, `status`, `status_izin`, `keperluan`, `pemberi_izin`) VALUES
(1, 'R9ZNTV', 7, '2024-06-20', '11:42:00', '2024-06-22', '11:46:00', 'SUDAH KEMBALI', 'SUDAH DIIZINKAN', 'asdasd', 1),
(2, 'TXNWXA', 12, '2024-06-18', '11:44:00', '2024-06-18', '16:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'Ke Pasar Tanjung beli kitab', 1),
(3, 'U4AUHI', 7, '2024-06-18', '12:04:00', '2024-06-18', '16:00:00', 'TERLAMBAT KEMBALI', 'SUDAH DIIZINKAN', 'asdffdasdsadasdasd', 1),
(4, 'TDUWPZ', 11, '2024-06-19', '01:15:00', '2024-06-19', '02:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'sdfsdfsdfsdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_santri`
--

DROP TABLE IF EXISTS `data_santri`;
CREATE TABLE IF NOT EXISTS `data_santri` (
  `id_santri` int NOT NULL AUTO_INCREMENT,
  `no_induk_santri` varchar(20) NOT NULL,
  `nama_lengkap_santri` varchar(150) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_dusun` varchar(20) NOT NULL,
  `alamat_desa` varchar(20) NOT NULL,
  `alamat_kecamatan` varchar(20) NOT NULL,
  `alamat_kabupaten` varchar(20) NOT NULL,
  `alamat_provinsi` varchar(30) NOT NULL,
  `pendidikan_dipilih` int NOT NULL,
  `nama_ayah` varchar(150) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(150) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `status_santri` enum('AKTIF','NONAKTIF','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_santri`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_santri`
--

INSERT INTO `data_santri` (`id_santri`, `no_induk_santri`, `nama_lengkap_santri`, `tanggal_masuk`, `tempat_lahir`, `tanggal_lahir`, `alamat_dusun`, `alamat_desa`, `alamat_kecamatan`, `alamat_kabupaten`, `alamat_provinsi`, `pendidikan_dipilih`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `no_hp`, `foto`, `status_santri`) VALUES
(7, '2024002', 'Lonika', '2024-06-20', 'Jember', '2024-06-21', 'asdas', 'asdas', 'sfdgfdg', 'asdasd', 'asdasd', 2, 'Ancok Wijayasss', 'asdasdasd', 'Ancok Widodowww', '089287867123', './assets/foto_santri/2024002_6c23fa12-48fa-46d2-b206-2c3c224d6b48.jpg', 'AKTIF'),
(6, '2024001', 'Arrohim Dwi Ksatria', '2024-06-19', 'Jember', '2024-06-19', 'sadasd', 'asdfasg', 'sfdgfdg', 'dfweqrwer', 'dsfdsfsd', 1, 'Ancok Wijayasss', 'asdasdasd', 'Ancok Widodo', '089287867123', './assets/foto_santri/2024001_WhatsApp_Image_2024-05-16_at_10_10_29_1fd11b7e.jpg', 'AKTIF'),
(9, '2024003', 'testing santri', '2024-06-18', 'Jember', '2024-06-25', 'saddfghfdhjf', 'asdfasg', 'asdas', 'dfweqrwer', 'tryrty', 1, 'sadsa', 'asdasdasd', 'Ancok Widodo', '089287867123', './assets/foto_santri/2024003_WhatsApp_Image_2024-05-20_at_07_32_47_17219e0f.jpg', 'NONAKTIF'),
(11, '2024004', 'Refi Tri Hidayatullah', '2024-06-16', 'Jember', '2024-06-12', 'asdas', 'asdas', 'sdfgdfg', 'dfgd', 'fdgdf', 5, 'dfgfd', 'dfg', 'dfgfdg', '678678678678', './assets/foto_santri/2024004_carbon.png', 'AKTIF'),
(12, '2024005', 'Riskiatun Nuril Holisa', '2024-06-17', 'Bondowoso', '2003-09-17', 'saradsf', 'sdfsd', 'sdfsd', 'sdf', 'wqeqw', 5, 'wqewq', 'asdrasd', 'sadsa', '23423423', './assets/foto_santri/2024005_WhatsApp_Image_2024-05-20_at_07_32_42_c72c8b51.jpg', 'AKTIF');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_wilayah`
--

INSERT INTO `data_wilayah` (`id_wilayah`, `nama_wilayah`, `singkatan_wilayah`) VALUES
(1, 'Sunan Kalijaga', 'SK'),
(2, 'Lembaga Pendidikan Bahasa Arab', 'LPBA'),
(3, 'Sunan Muria', 'SM'),
(5, 'English Camp', 'ELCA');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `no_hp`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'administator@email.com', '0000000000', 'ADMIN', 'AKTIF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
