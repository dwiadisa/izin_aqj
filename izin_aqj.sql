-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2024 at 04:20 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(19, 5, 'Mexico'),
(20, 6, 'Muharram');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_penghuni`
--

INSERT INTO `data_penghuni` (`id_penghuni`, `id_santri`, `id_wilayah`, `id_kamar`) VALUES
(8, 7, 2, 11),
(13, 13, 2, 12),
(6, 6, 2, 11),
(10, 12, 2, 12),
(14, 10, 1, 10),
(15, 23, 2, 11),
(27, 50, 5, 19),
(17, 4, 2, 12),
(18, 19, 3, 17),
(19, 15, 2, 12),
(21, 31, 2, 11),
(22, 5, 1, 9),
(23, 32, 2, 12),
(24, 33, 2, 11),
(25, 44, 2, 13),
(26, 34, 1, 10),
(28, 54, 6, 20);

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_perizinan`
--

INSERT INTO `data_perizinan` (`id_izin`, `kode_perizinan`, `id_santri`, `tanggal_mulai`, `jam_mulai`, `tanggal_akhir`, `jam_akhir`, `status`, `status_izin`, `keperluan`, `pemberi_izin`) VALUES
(1, 'F79E6', 34, '2024-06-25', '20:45:00', '2024-07-02', '14:48:00', 'TERLAMBAT KEMBALI', 'SUDAH DIIZINKAN', 'asdasd', 1),
(2, '28THE', 44, '2024-06-26', '21:05:00', '2024-06-27', '17:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'sdfsdfsdf', 1),
(3, 'HL4VJ', 54, '2024-06-30', '03:13:00', '2024-07-01', '03:18:00', 'SUDAH KEMBALI', 'SUDAH DIIZINKAN', 'Keperluan Menikah', 1),
(4, 'XT0TY', 50, '2024-06-30', '10:56:13', '2024-07-03', '10:50:00', 'SUDAH KEMBALI', 'SUDAH DIIZINKAN', 'sadasdsad', 1),
(5, 'ZXP19', 33, '2024-06-30', '10:59:00', '2024-07-05', '15:00:00', 'SUDAH KEMBALI', 'SUDAH DIIZINKAN', 'ddsafsfsd', 1),
(6, 'YGITO', 5, '2024-06-30', '11:02:00', '2024-07-05', '17:57:00', 'SUDAH KEMBALI', 'SUDAH DIIZINKAN', 'sdafsdfsdf', 1),
(9, 'PQSE2', 34, '2024-06-30', '12:24:00', '2024-07-04', '12:27:00', 'BELUM KEMBALI', 'BELUM DIIZINKAN', 'asddasd', 0),
(10, 'POB3A', 54, '2024-06-30', '12:24:00', '2024-07-26', '12:30:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'asddasdasdsad', 1),
(11, '9TOMK', 10, '2024-06-30', '12:25:00', '2024-07-04', '12:29:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'asdasdas', 1),
(12, 'JHPFQ', 50, '2024-06-30', '19:22:00', '2024-07-14', '17:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'Sunatan Dulure', 1),
(13, 'XO3QT', 50, '2024-06-30', '20:07:00', '2024-07-04', '17:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'Keperluan Keluarga', 1),
(14, 'KXMJ4', 50, '2024-07-20', '11:23:00', '2024-07-21', '10:00:00', 'TERLAMBAT KEMBALI', 'SUDAH DIIZINKAN', 'Ke rumah sakit\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_santri`
--

DROP TABLE IF EXISTS `data_santri`;
CREATE TABLE IF NOT EXISTS `data_santri` (
  `id_santri` int NOT NULL AUTO_INCREMENT,
  `tahun_masuk` year NOT NULL,
  `bulan_masuk` varchar(20) NOT NULL,
  `no_urut` varchar(20) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_santri`
--

INSERT INTO `data_santri` (`id_santri`, `tahun_masuk`, `bulan_masuk`, `no_urut`, `no_induk_santri`, `nama_lengkap_santri`, `tanggal_masuk`, `tempat_lahir`, `tanggal_lahir`, `alamat_dusun`, `alamat_desa`, `alamat_kecamatan`, `alamat_kabupaten`, `alamat_provinsi`, `pendidikan_dipilih`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `no_hp`, `foto`, `status_santri`) VALUES
(1, '0000', '', '', '2022001', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', 'Inggit', '08909999', './assets/foto_santri/1_WhatsApp_Image_2024-05-20_at_07_32_43_4263e0f8.jpg', 'NONAKTIF'),
(4, '0000', '', '', '2022004', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910002', '', 'AKTIF'),
(5, '0000', '', '', '2022005', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910003', '', 'AKTIF'),
(6, '0000', '', '', '2022006', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910004', '', 'AKTIF'),
(7, '0000', '', '', '2022007', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910005', '', 'AKTIF'),
(8, '0000', '', '', '2022008', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910006', '', 'AKTIF'),
(9, '0000', '', '', '2022009', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910007', '', 'AKTIF'),
(10, '0000', '', '', '2022010', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910008', '', 'AKTIF'),
(11, '0000', '', '', '2022011', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910009', '', 'AKTIF'),
(12, '0000', '', '', '2022012', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910010', '', 'AKTIF'),
(13, '0000', '', '', '2022013', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910011', '', 'AKTIF'),
(14, '0000', '', '', '2022014', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910012', '', 'AKTIF'),
(15, '0000', '', '', '2022015', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910013', '', 'AKTIF'),
(16, '0000', '', '', '2022016', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910014', '', 'AKTIF'),
(17, '0000', '', '', '2022017', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910015', '', 'AKTIF'),
(18, '0000', '', '', '2022018', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910016', '', 'AKTIF'),
(19, '0000', '', '', '2022019', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910017', '', 'AKTIF'),
(20, '0000', '', '', '2022020', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910018', '', 'AKTIF'),
(21, '0000', '', '', '2022021', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910019', '', 'AKTIF'),
(22, '0000', '', '', '2022022', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910020', '', 'AKTIF'),
(23, '0000', '', '', '2022023', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910021', '', 'AKTIF'),
(24, '0000', '', '', '2022024', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910022', '', 'AKTIF'),
(25, '0000', '', '', '2022025', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910023', '', 'AKTIF'),
(26, '0000', '', '', '2022026', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910024', '', 'AKTIF'),
(27, '0000', '', '', '2022027', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910025', '', 'AKTIF'),
(28, '0000', '', '', '2022028', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910026', '', 'AKTIF'),
(29, '0000', '', '', '2022029', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910027', '', 'AKTIF'),
(30, '0000', '', '', '2022030', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910028', '', 'AKTIF'),
(31, '0000', '', '', '2022031', 'asdasd', '1970-01-01', 'Jember', '1970-01-01', 'Ngadupiro', 'Sumberjo', 'Sanankulon', 'Blitar', 'Jawa Timur', 1, 'soekarno', 'Presiden', '', '08910029', '', 'AKTIF'),
(32, '0000', '', '', '2023001', 'Ahmad Fauzi', '1970-01-01', 'Surabaya', '1970-01-01', 'Dusun A', 'Desa A', 'Kecamatan A', 'Kabupaten A', 'Provinsi A', 1, 'Budi Santoso', 'Petani', 'Siti Aminah', '081234567890', './assets/foto_santri/1_6c23fa12-48fa-46d2-b206-2c3c224d6b48.jpg', 'NONAKTIF'),
(33, '0000', '', '', '2023002', 'Budi Santoso', '1970-01-01', 'Malang', '1970-01-01', 'Dusun B', 'Desa B', 'Kecamatan B', 'Kabupaten B', 'Provinsi B', 2, 'Slamet Riyadi', 'Guru', 'Rina Wati', '081234567891', './assets/foto_santri/2023002.jpg', 'AKTIF'),
(34, '0000', '', '', '2023003', 'Citra Dewi', '1970-01-01', 'Jember', '1970-01-01', 'Dusun C', 'Desa C', 'Kecamatan C', 'Kabupaten C', 'Provinsi C', 3, 'Sukardi', 'Pedagang', 'Siti Nurjanah', '081234567892', './assets/foto_santri/2023003.jpg', 'AKTIF'),
(35, '0000', '', '', '2023004', 'Dewi Sartika', '1970-01-01', 'Banyuwangi', '1970-01-01', 'Dusun D', 'Desa D', 'Kecamatan D', 'Kabupaten D', 'Provinsi D', 4, 'Sutrisno', 'Nelayan', 'Sri Rahayu', '081234567893', './assets/foto_santri/35_iduladha2024smkaqj-be12a7d5-84ac-4ca2-a12e-ee2068f53eab.jpg', 'NONAKTIF'),
(36, '0000', '', '', '2023005', 'Eko Prasetyo', '1970-01-01', 'Probolinggo', '1970-01-01', 'Dusun E', 'Desa E', 'Kecamatan E', 'Kabupaten E', 'Provinsi E', 5, 'Suyono', 'Buruh', 'Siti Fatimah', '081234567894', './assets/foto_santri/2023005.jpg', 'AKTIF'),
(37, '0000', '', '', '2023006', 'Fajar Nugraha', '1970-01-01', 'Pasuruan', '1970-01-01', 'Dusun F', 'Desa F', 'Kecamatan F', 'Kabupaten F', 'Provinsi F', 6, 'Agus Salim', 'Dokter', 'Nurul Huda', '081234567895', './assets/foto_santri/2023006.jpg', 'AKTIF'),
(38, '0000', '', '', '2023007', 'Gita Suryani', '1970-01-01', 'Kediri', '1970-01-01', 'Dusun G', 'Desa G', 'Kecamatan G', 'Kabupaten G', 'Provinsi G', 2, 'Hariyanto', 'Pengusaha', 'Dewi Sartika', '081234567896', './assets/foto_santri/2023007.jpg', 'AKTIF'),
(39, '0000', '', '', '2023008', 'Hendra Setiawan', '1970-01-01', 'Blitar', '1970-01-01', 'Dusun H', 'Desa H', 'Kecamatan H', 'Kabupaten H', 'Provinsi H', 8, 'Iwan Kurniawan', 'PNS', 'Eka Wulandari', '081234567897', './assets/foto_santri/2023008.jpg', 'AKTIF'),
(40, '0000', '', '', '2023009', 'Intan Permatasari', '1970-01-01', 'Madiun', '1970-01-01', 'Dusun I', 'Desa I', 'Kecamatan I', 'Kabupaten I', 'Provinsi I', 9, 'Joko Susilo', 'Polisi', 'Fifi Fitriani', '081234567898', './assets/foto_santri/2023009.jpg', 'AKTIF'),
(41, '0000', '', '', '2023010', 'Joko Widodo', '1970-01-01', 'Mojokerto', '1970-01-01', 'Dusun J', 'Desa J', 'Kecamatan J', 'Kabupaten J', 'Provinsi J', 4, 'Kurniawan', 'TNI', 'Gina Melati', '081234567899', './assets/foto_santri/2023010.jpg', 'NONAKTIF'),
(42, '0000', '', '', '2023011', 'Kartika Putri', '1970-01-01', 'Nganjuk', '1970-01-01', 'Dusun K', 'Desa K', 'Kecamatan K', 'Kabupaten K', 'Provinsi K', 11, 'Lukman Hakim', 'Seniman', 'Hana Citra', '081234567900', './assets/foto_santri/2023011.jpg', 'AKTIF'),
(43, '0000', '', '', '2023012', 'Linda Kusuma', '1970-01-01', 'Ponorogo', '1970-01-01', 'Dusun L', 'Desa L', 'Kecamatan L', 'Kabupaten L', 'Provinsi L', 12, 'Maman Abdurrahman', 'Akuntan', 'Ida Ayu', '081234567901', './assets/foto_santri/2023012.jpg', 'AKTIF'),
(44, '0000', '', '', '2023013', 'Mega Ayuningtyas', '1970-01-01', 'Tulungagung', '1970-01-01', 'Dusun M', 'Desa M', 'Kecamatan M', 'Kabupaten M', 'Provinsi M', 13, 'Nanang Arifin', 'Advokat', 'Julia Perez', '081234567902', './assets/foto_santri/2023013.jpg', 'AKTIF'),
(45, '0000', '', '', '2023014', 'Nina Yuliana', '1970-01-01', 'Trenggalek', '1970-01-01', 'Dusun N', 'Desa N', 'Kecamatan N', 'Kabupaten N', 'Provinsi N', 4, 'Oman Sudarman', 'Arsitek', 'Kartini Rahayu', '081234567903', './assets/foto_santri/45_misto_putih.jpg', 'AKTIF'),
(46, '0000', '', '', '2023015', 'Oscar Pratama', '1970-01-01', 'Bojonegoro', '1970-01-01', 'Dusun O', 'Desa O', 'Kecamatan O', 'Kabupaten O', 'Provinsi O', 15, 'Purnomo', 'Dosen', 'Lestari', '081234567904', './assets/foto_santri/2023015.jpg', 'AKTIF'),
(47, '0000', '', '', '2023016', 'Putri Anggraini', '1970-01-01', 'Jombang', '1970-01-01', 'Dusun P', 'Desa P', 'Kecamatan P', 'Kabupaten P', 'Provinsi P', 16, 'Qomar', 'Bidan', 'Mira Mariani', '081234567905', './assets/foto_santri/2023016.jpg', 'AKTIF'),
(48, '0000', '', '', '2023017', 'Rahmat Hidayat', '1970-01-01', 'Lamongan', '1970-01-01', 'Dusun R', 'Desa R', 'Kecamatan R', 'Kabupaten R', 'Provinsi R', 17, 'Samsul Arifin', 'Peternak', 'Nurul Aini', '081234567906', './assets/foto_santri/2023017.jpg', 'AKTIF'),
(49, '0000', '', '', '2023018', 'Siti Badriah', '1970-01-01', 'Magetan', '1970-01-01', 'Dusun S', 'Desa S', 'Kecamatan S', 'Kabupaten S', 'Provinsi S', 18, 'Taufik Hidayat', 'Fotografer', 'Olla Ramlan', '081234567907', './assets/foto_santri/2023018.jpg', 'AKTIF'),
(50, '0000', '', '', '2023019', 'Tania Putri', '1970-01-01', 'Ngawi', '1970-01-01', 'Dusun T', 'Desa T', 'Kecamatan T', 'Kabupaten T', 'Provinsi T', 19, 'Umar Ali', 'Pilot', 'Puput Carolina', '081234567908', './assets/foto_santri/2023019.jpg', 'AKTIF'),
(51, '0000', '', '', '2023020', 'Udin Samsudin', '1970-01-01', 'Pamekasan', '1970-01-01', 'Dusun U', 'Desa U', 'Kecamatan U', 'Kabupaten U', 'Provinsi U', 20, 'Viktor Surya', 'Chef', 'Ratna Dewi', '081234567909', './assets/foto_santri/2023020.jpg', 'AKTIF'),
(52, '0000', '', '', '2023021', 'Vina Panduwinata', '1970-01-01', 'Sumenep', '1970-01-01', 'Dusun V', 'Desa V', 'Kecamatan V', 'Kabupaten V', 'Provinsi V', 21, 'Wahyu Teguh', 'Seniman', 'Sari Puspita', '081234567910', './assets/foto_santri/2023021.jpg', 'AKTIF'),
(53, '0000', '', '', '2023022', 'Wulan Guritno', '1970-01-01', 'Sampang', '1970-01-01', 'Dusun W', 'Desa W', 'Kecamatan W', 'Kabupaten W', 'Provinsi W', 22, 'Xavier Hernandes', 'Musisi', 'Tina Talisa', '081234567911', './assets/foto_santri/2023022.jpg', 'AKTIF'),
(54, '0000', '', '', '2023023', 'Xena Warrior', '1970-01-01', 'Bangkalan', '1970-01-01', 'Dusun X', 'Desa X', 'Kecamatan X', 'Kabupaten X', 'Provinsi X', 23, 'Yusuf Mansur', 'Ustadz', 'Umi Pipik', '081234567912', './assets/foto_santri/2023023.jpg', 'AKTIF'),
(55, '0000', '', '', '2023024', 'Yudi Satria', '1970-01-01', 'Batu', '1970-01-01', 'Dusun Y', 'Desa Y', 'Kecamatan Y', 'Kabupaten Y', 'Provinsi Y', 24, 'Zainal Abidin', 'Politikus', 'Vera Kharisma', '081234567913', './assets/foto_santri/2023024.jpg', 'AKTIF'),
(56, '0000', '', '', '2023025', 'Zara Leola', '1970-01-01', 'Malang', '1970-01-01', 'Dusun Z', 'Desa Z', 'Kecamatan Z', 'Kabupaten Z', 'Provinsi Z', 25, 'Adam Bachtiar', 'Dokter', 'Nina Zatulini', '081234567914', './assets/foto_santri/2023025.jpg', 'AKTIF'),
(60, '2023', '11', '', '202311001', 'Fulan', '2023-11-09', 'sdfsdfsd', '2000-09-18', 'sadasd', 'dsfsd', 'sdfsdf', 'sdfsdf', 'sdfsdf', 4, 'sdfsdf', 'sdfsd', 'sdfsd', '23423423', './assets/foto_santri/202209001_Desain_tanpa_judul_(22).png', 'AKTIF'),
(58, '2024', '07', '', '202407001', 'Refi Tri askdhhaskjdha', '2024-07-31', 'Jember', '1999-02-22', 'asdas', 'asdas', 'asdsad', 'fewfdsfs', 'sdfsdf', 2, 'afdsf', 'sdfsdf', 'sdfsdf', '234234234', './assets/foto_santri/202407001_aqj_png.png', 'AKTIF'),
(59, '2024', '08', '', '202408002', 'Tewelisasi', '2024-08-21', 'asdsadas', '2024-12-30', 'dfsdf', 'sdfsdf', 'sdfsdf', 'sgdfgf', 'sdfsdfs', 2, 'sdfsdf', 'sdfsd', 'sdfsdf', '809808908', './assets/foto_santri/202408002_qrcode_aqj.png', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `data_santri_riyadhoh`
--

DROP TABLE IF EXISTS `data_santri_riyadhoh`;
CREATE TABLE IF NOT EXISTS `data_santri_riyadhoh` (
  `id_santri_riyadhoh` int NOT NULL AUTO_INCREMENT,
  `nama_santri_riyadhoh` varchar(100) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_desa` varchar(50) NOT NULL,
  `alamat_kecamatan` varchar(50) NOT NULL,
  `alamat_kabupaten` varchar(50) NOT NULL,
  `alamat_provinsi` varchar(50) NOT NULL,
  `no_nik` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `no_hp_wali` varchar(20) NOT NULL,
  `tahun_daftar` year NOT NULL,
  `tanggal_daftar` date NOT NULL,
  PRIMARY KEY (`id_santri_riyadhoh`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_santri_riyadhoh`
--

INSERT INTO `data_santri_riyadhoh` (`id_santri_riyadhoh`, `nama_santri_riyadhoh`, `tempat_lahir`, `tanggal_lahir`, `alamat_desa`, `alamat_kecamatan`, `alamat_kabupaten`, `alamat_provinsi`, `no_nik`, `no_hp`, `nama_wali`, `no_hp_wali`, `tahun_daftar`, `tanggal_daftar`) VALUES
(26, 'asdasd', 'asdasd', '2024-06-19', 'sqdasd', 'asdasd', 'asdas', 'asdasd', '123123', '12321312', 'qweqweqw', '12312321', '2024', '2024-06-30'),
(2, 'Bella Saphira', 'Bandung', '2003-02-20', 'Sukajadi', 'Sukajadi', 'Bandung', 'Jawa Barat', '3273012002030002', '081234567892', 'Siti Aminah', '081234567893', '2024', '2024-02-25'),
(3, 'Chandra Wijaya', 'Surabaya', '2003-03-25', 'Wonokromo', 'Wonokromo', 'Surabaya', 'Jawa Timur', '3578012503030003', '081234567894', 'Wahyu Nugroho', '081234567895', '2024', '2024-03-30'),
(4, 'Dewi Persik', 'Semarang', '2003-04-30', 'Candisari', 'Candisari', 'Semarang', 'Jawa Tengah', '3374013004030004', '081234567896', 'Agus Salim', '081234567897', '2024', '2024-04-05'),
(5, 'Eko Prasetyo', 'Yogyakarta', '2003-05-05', 'Kraton', 'Kraton', 'Yogyakarta', 'DI Yogyakarta', '3471010505030005', '081234567898', 'Surya Kencana', '081234567899', '2024', '2024-05-10'),
(6, 'Fajar Nugraha', 'Denpasar', '2003-06-10', 'Denpasar Barat', 'Denpasar Barat', 'Denpasar', 'Bali', '5171011006030006', '081234567900', 'Made Alit', '081234567901', '2024', '2024-06-15'),
(7, 'Gita Suryani', 'Medan', '2003-07-15', 'Medan Baru', 'Medan Baru', 'Medan', 'Sumatera Utara', '1271011507030007', '081234567902', 'Rahmat Hidayat', '081234567903', '2024', '2024-07-20'),
(8, 'Hendra Setiawan', 'Palembang', '2003-08-20', 'Ilir Timur II', 'Ilir Timur II', 'Palembang', 'Sumatera Selatan', '1671012008030008', '081234567904', 'Dedi Mulyadi', '081234567905', '2024', '2024-08-25'),
(9, 'Intan Permatasari', 'Makassar', '2003-09-25', 'Makassar', 'Makassar', 'Makassar', 'Sulawesi Selatan', '9271012509030009', '081234567906', 'Andi Sulaiman', '081234567907', '2024', '2024-09-30'),
(10, 'Joko Widodo', 'Batam', '2003-10-30', 'Batam Kota', 'Batam Kota', 'Batam', 'Kepulauan Riau', '2971013001003010', '081234567908', 'Herman Syah', '081234567909', '2024', '2024-10-05'),
(11, 'Kartika Putri', 'Pekanbaru', '2003-11-05', 'Pekanbaru Kota', 'Pekanbaru Kota', 'Pekanbaru', 'Riau', '1471010511030011', '081234567910', 'Arief Rahman', '081234567911', '2024', '2024-11-10'),
(12, 'Linda Kusuma', 'Banjarmasin', '2003-12-10', 'Banjarmasin Tengah', 'Banjarmasin Tengah', 'Banjarmasin', 'Kalimantan Selatan', '7371011012030012', '081234567912', 'Bambang Suryo', '081234567913', '2024', '2024-12-15'),
(13, 'Mega Ayuningtyas', 'Pontianak', '2004-01-15', 'Pontianak Kota', 'Pontianak Kota', 'Pontianak', 'Kalimantan Barat', '7471011501040013', '081234567914', 'Cahyo Nugroho', '081234567915', '2024', '2024-01-20'),
(14, 'Nina Yuliana', 'Samarinda', '2004-02-19', 'Samarinda Seberang', 'Samarinda Seberang', 'Samarinda', 'Kalimantan Timur', '7571011902040014', '081234567916', 'Dwi Astuti', '081234567917', '2024', '2024-02-25'),
(15, 'Oscar Pratama', 'Manado', '2004-03-25', 'Wanea', 'Wanea', 'Manado', 'Sulawesi Utara', '8271012503040015', '081234567918', 'Eka Putra', '081234567919', '2024', '2024-03-31'),
(16, 'Putri Anggraini', 'Jayapura', '2004-04-30', 'Jayapura Utara', 'Jayapura Utara', 'Jayapura', 'Papua', '9471013004040016', '081234567920', 'Fajar Kurniawan', '081234567921', '2024', '2024-04-05'),
(17, 'Rahmat Hidayat', 'Ambon', '2004-05-05', 'Sirimau', 'Sirimau', 'Ambon', 'Maluku', '9771010505040017', '081234567922', 'Agus Setiawan', '081234567923', '2024', '2024-05-10'),
(18, 'Siti Badriah', 'Kupang', '2004-06-10', 'Kupang Timur', 'Kupang Timur', 'Kupang', 'Nusa Tenggara Timur', '8571011006040018', '081234567924', 'Budi Santoso', '081234567925', '2024', '2024-06-15'),
(19, 'Tania Putri', 'Mataram', '2004-07-15', 'Mataram', 'Mataram', 'Mataram', 'Nusa Tenggara Barat', '8371011507040019', '081234567926', 'Citra Dewi', '081234567927', '2024', '2024-07-20'),
(20, 'Udin Samsudin', 'Banda Aceh', '2004-08-20', 'Baiturrahman', 'Baiturrahman', 'Banda Aceh', 'Aceh', '1171012008040020', '081234567928', 'Dian Permata', '081234567929', '2024', '2024-08-25'),
(21, 'Vina Panduwinata', 'Palu', '2004-09-25', 'Palu Timur', 'Palu Timur', 'Palu', 'Sulawesi Tengah', '8271012509040021', '081234567930', 'Eko Wahyudi', '081234567931', '2024', '2024-09-30'),
(22, 'Wulan Guritno', 'Gorontalo', '2004-10-30', 'Gorontalo', 'Gorontalo', 'Gorontalo', 'Gorontalo', '7571013001040022', '081234567932', 'Fahri Hamzah', '081234567933', '2024', '2024-10-05'),
(23, 'Xena Warrior', 'Kendari', '2004-11-05', 'Kendari', 'Kendari', 'Kendari', 'Sulawesi Tenggara', '9371010511040023', '081234567934', 'Galih Ginanjar', '081234567935', '2024', '2024-11-10'),
(24, 'Yudi Satria', 'Ternate', '2004-12-10', 'Ternate Selatan', 'Ternate Selatan', 'Ternate', 'Maluku Utara', '9771011012040024', '081234567936', 'Hariyanto', '081234567937', '2024', '2024-12-15'),
(25, 'Zara Leola', 'Sorong', '2005-01-15', 'Sorong', 'Sorong', 'Sorong', 'Papua Barat', '9571011501050025', '081234567938', 'Indra Bekti', '081234567939', '2024', '2024-01-20');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_wilayah`
--

INSERT INTO `data_wilayah` (`id_wilayah`, `nama_wilayah`, `singkatan_wilayah`) VALUES
(1, 'Sunan Kalijaga', 'SK'),
(2, 'Lembaga Pendidikan Bahasa Arab', 'LPBA'),
(3, 'Sunan Muria', 'SM'),
(5, 'English Camp', 'ELCA'),
(6, 'Rusunawa (Unggulan)', 'RSW');

-- --------------------------------------------------------

--
-- Table structure for table `kiosk_setting`
--

DROP TABLE IF EXISTS `kiosk_setting`;
CREATE TABLE IF NOT EXISTS `kiosk_setting` (
  `id_setting` int NOT NULL AUTO_INCREMENT,
  `nama_setting` varchar(10) NOT NULL,
  `status` enum('AKTIF','NONAKTIF','','') NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kiosk_setting`
--

INSERT INTO `kiosk_setting` (`id_setting`, `nama_setting`, `status`) VALUES
(1, 'aktif', 'AKTIF');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `no_hp`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Maftuhin', 'administator@email.com', '0000000000', 'ADMIN', 'AKTIF'),
(3, 'pengurus', 'ef4113dcac30d9fea0cd4ed7caa66ee8', 'MAHFUDZ ROZIQI, S.Pd.I', 'mahfudzroziqi16@guru.smk.belajar.id', '089287867123', 'PENGURUS', 'AKTIF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
