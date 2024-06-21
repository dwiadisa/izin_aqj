-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2024 at 11:08 AM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

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
(17, 3, 'xcvgfdsg');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_penghuni`
--

INSERT INTO `data_penghuni` (`id_penghuni`, `id_santri`, `id_wilayah`, `id_kamar`) VALUES
(8, 7, 2, 11),
(13, 13, 1, 10),
(12, 13, 2, 18),
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_perizinan`
--

INSERT INTO `data_perizinan` (`id_izin`, `kode_perizinan`, `id_santri`, `tanggal_mulai`, `jam_mulai`, `tanggal_akhir`, `jam_akhir`, `status`, `status_izin`, `keperluan`, `pemberi_izin`) VALUES
(2, 'TXNWXA', 12, '2022-07-07', '11:44:00', '2022-12-29', '16:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'Ke Pasar Tanjung beli nmkghjkgkhj', 1),
(10, '2IVQU6', 7, '2024-06-20', '19:14:00', '2024-06-21', '15:14:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'dsdfsdfsd', 1),
(7, 'C3NWWT', 6, '2024-06-20', '12:29:00', '2024-06-20', '16:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'asdasdasdasd', 1),
(8, 'XDA7LZ', 12, '2024-06-20', '12:30:00', '2024-06-21', '17:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'sdsdsedsd', 1),
(9, 'RLUCFA', 12, '2024-06-25', '17:00:00', '2024-06-25', '17:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'dfcdfdfd', 1),
(11, 'HKEXL', 12, '2024-06-21', '16:53:00', '2024-06-25', '17:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'Berobat ', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_santri`
--

INSERT INTO `data_santri` (`id_santri`, `no_induk_santri`, `nama_lengkap_santri`, `tanggal_masuk`, `tempat_lahir`, `tanggal_lahir`, `alamat_dusun`, `alamat_desa`, `alamat_kecamatan`, `alamat_kabupaten`, `alamat_provinsi`, `pendidikan_dipilih`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `no_hp`, `foto`, `status_santri`) VALUES
(1, '2023001', 'Ahmad Fauzi', '2023-01-10', 'Surabaya', '2005-05-15', 'Dusun A', 'Desa A', 'Kecamatan A', 'Kabupaten A', 'Provinsi A', 1, 'Budi Santoso', 'Petani', 'Siti Aminah', '081234567890', './assets/foto_santri/2023001.jpg', 'AKTIF'),
(2, '2023002', 'Budi Santoso', '2023-02-15', 'Malang', '2004-04-20', 'Dusun B', 'Desa B', 'Kecamatan B', 'Kabupaten B', 'Provinsi B', 2, 'Slamet Riyadi', 'Guru', 'Rina Wati', '081234567891', './assets/foto_santri/2023002.jpg', 'AKTIF'),
(3, '2023003', 'Citra Dewi', '2023-03-20', 'Jember', '2003-03-25', 'Dusun C', 'Desa C', 'Kecamatan C', 'Kabupaten C', 'Provinsi C', 3, 'Sukardi', 'Pedagang', 'Siti Nurjanah', '081234567892', './assets/foto_santri/2023003.jpg', 'AKTIF'),
(4, '2023004', 'Dewi Sartika', '2023-04-25', 'Banyuwangi', '2002-02-30', 'Dusun D', 'Desa D', 'Kecamatan D', 'Kabupaten D', 'Provinsi D', 4, 'Sutrisno', 'Nelayan', 'Sri Rahayu', '081234567893', './assets/foto_santri/2023004.jpg', 'NONAKTIF'),
(5, '2023005', 'Eko Prasetyo', '2023-05-30', 'Probolinggo', '2001-01-05', 'Dusun E', 'Desa E', 'Kecamatan E', 'Kabupaten E', 'Provinsi E', 5, 'Suyono', 'Buruh', 'Siti Fatimah', '081234567894', './assets/foto_santri/2023005.jpg', 'AKTIF'),
(6, '2023006', 'Fajar Nugraha', '2023-06-15', 'Pasuruan', '2000-06-10', 'Dusun F', 'Desa F', 'Kecamatan F', 'Kabupaten F', 'Provinsi F', 6, 'Agus Salim', 'Dokter', 'Nurul Huda', '081234567895', './assets/foto_santri/2023006.jpg', 'AKTIF'),
(7, '2023007', 'Gita Suryani', '2023-07-20', 'Kediri', '1999-07-15', 'Dusun G', 'Desa G', 'Kecamatan G', 'Kabupaten G', 'Provinsi G', 7, 'Hariyanto', 'Pengusaha', 'Dewi Sartika', '081234567896', './assets/foto_santri/2023007.jpg', 'AKTIF'),
(8, '2023008', 'Hendra Setiawan', '2023-08-25', 'Blitar', '1998-08-20', 'Dusun H', 'Desa H', 'Kecamatan H', 'Kabupaten H', 'Provinsi H', 8, 'Iwan Kurniawan', 'PNS', 'Eka Wulandari', '081234567897', './assets/foto_santri/2023008.jpg', 'AKTIF'),
(9, '2023009', 'Intan Permatasari', '2023-09-30', 'Madiun', '1997-09-25', 'Dusun I', 'Desa I', 'Kecamatan I', 'Kabupaten I', 'Provinsi I', 9, 'Joko Susilo', 'Polisi', 'Fifi Fitriani', '081234567898', './assets/foto_santri/2023009.jpg', 'AKTIF'),
(10, '2023010', 'Joko Widodo', '2023-10-05', 'Mojokerto', '1996-10-10', 'Dusun J', 'Desa J', 'Kecamatan J', 'Kabupaten J', 'Provinsi J', 10, 'Kurniawan', 'TNI', 'Gina Melati', '081234567899', './assets/foto_santri/2023010.jpg', 'AKTIF'),
(11, '2023011', 'Kartika Putri', '2023-11-10', 'Nganjuk', '1995-11-15', 'Dusun K', 'Desa K', 'Kecamatan K', 'Kabupaten K', 'Provinsi K', 11, 'Lukman Hakim', 'Seniman', 'Hana Citra', '081234567900', './assets/foto_santri/2023011.jpg', 'AKTIF'),
(12, '2023012', 'Linda Kusuma', '2023-12-15', 'Ponorogo', '1994-12-20', 'Dusun L', 'Desa L', 'Kecamatan L', 'Kabupaten L', 'Provinsi L', 12, 'Maman Abdurrahman', 'Akuntan', 'Ida Ayu', '081234567901', './assets/foto_santri/2023012.jpg', 'AKTIF'),
(13, '2023013', 'Mega Ayuningtyas', '2024-01-20', 'Tulungagung', '1993-01-25', 'Dusun M', 'Desa M', 'Kecamatan M', 'Kabupaten M', 'Provinsi M', 13, 'Nanang Arifin', 'Advokat', 'Julia Perez', '081234567902', './assets/foto_santri/2023013.jpg', 'AKTIF'),
(14, '2023014', 'Nina Yuliana', '2024-02-25', 'Trenggalek', '1992-02-30', 'Dusun N', 'Desa N', 'Kecamatan N', 'Kabupaten N', 'Provinsi N', 14, 'Oman Sudarman', 'Arsitek', 'Kartini Rahayu', '081234567903', './assets/foto_santri/2023014.jpg', 'AKTIF'),
(15, '2023015', 'Oscar Pratama', '2024-03-31', 'Bojonegoro', '1991-03-05', 'Dusun O', 'Desa O', 'Kecamatan O', 'Kabupaten O', 'Provinsi O', 15, 'Purnomo', 'Dosen', 'Lestari', '081234567904', './assets/foto_santri/2023015.jpg', 'AKTIF'),
(16, '2023016', 'Putri Anggraini', '2024-04-05', 'Jombang', '1990-04-10', 'Dusun P', 'Desa P', 'Kecamatan P', 'Kabupaten P', 'Provinsi P', 16, 'Qomar', 'Bidan', 'Mira Mariani', '081234567905', './assets/foto_santri/2023016.jpg', 'AKTIF'),
(17, '2023017', 'Rahmat Hidayat', '2024-05-10', 'Lamongan', '1989-05-15', 'Dusun R', 'Desa R', 'Kecamatan R', 'Kabupaten R', 'Provinsi R', 17, 'Samsul Arifin', 'Peternak', 'Nurul Aini', '081234567906', './assets/foto_santri/2023017.jpg', 'AKTIF'),
(18, '2023018', 'Siti Badriah', '2024-06-15', 'Magetan', '1988-06-20', 'Dusun S', 'Desa S', 'Kecamatan S', 'Kabupaten S', 'Provinsi S', 18, 'Taufik Hidayat', 'Fotografer', 'Olla Ramlan', '081234567907', './assets/foto_santri/2023018.jpg', 'AKTIF'),
(19, '2023019', 'Tania Putri', '2024-07-20', 'Ngawi', '1987-07-25', 'Dusun T', 'Desa T', 'Kecamatan T', 'Kabupaten T', 'Provinsi T', 19, 'Umar Ali', 'Pilot', 'Puput Carolina', '081234567908', './assets/foto_santri/2023019.jpg', 'AKTIF'),
(20, '2023020', 'Udin Samsudin', '2024-08-25', 'Pamekasan', '1986-08-30', 'Dusun U', 'Desa U', 'Kecamatan U', 'Kabupaten U', 'Provinsi U', 20, 'Viktor Surya', 'Chef', 'Ratna Dewi', '081234567909', './assets/foto_santri/2023020.jpg', 'AKTIF'),
(21, '2023021', 'Vina Panduwinata', '2024-09-30', 'Sumenep', '1985-09-05', 'Dusun V', 'Desa V', 'Kecamatan V', 'Kabupaten V', 'Provinsi V', 21, 'Wahyu Teguh', 'Seniman', 'Sari Puspita', '081234567910', './assets/foto_santri/2023021.jpg', 'AKTIF'),
(22, '2023022', 'Wulan Guritno', '2024-10-05', 'Sampang', '1984-10-10', 'Dusun W', 'Desa W', 'Kecamatan W', 'Kabupaten W', 'Provinsi W', 22, 'Xavier Hernandes', 'Musisi', 'Tina Talisa', '081234567911', './assets/foto_santri/2023022.jpg', 'AKTIF'),
(23, '2023023', 'Xena Warrior', '2024-11-10', 'Bangkalan', '1983-11-15', 'Dusun X', 'Desa X', 'Kecamatan X', 'Kabupaten X', 'Provinsi X', 23, 'Yusuf Mansur', 'Ustadz', 'Umi Pipik', '081234567912', './assets/foto_santri/2023023.jpg', 'AKTIF'),
(24, '2023024', 'Yudi Satria', '2024-12-15', 'Batu', '1982-12-20', 'Dusun Y', 'Desa Y', 'Kecamatan Y', 'Kabupaten Y', 'Provinsi Y', 24, 'Zainal Abidin', 'Politikus', 'Vera Kharisma', '081234567913', './assets/foto_santri/2023024.jpg', 'AKTIF'),
(25, '2023025', 'Zara Leola', '2025-01-20', 'Malang', '1981-01-25', 'Dusun Z', 'Desa Z', 'Kecamatan Z', 'Kabupaten Z', 'Provinsi Z', 25, 'Adam Bachtiar', 'Dokter', 'Nina Zatulini', '081234567914', './assets/foto_santri/2023025.jpg', 'AKTIF');
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_santri_riyadhoh`
--

INSERT INTO `data_santri_riyadhoh` (`id_santri_riyadhoh`, `nama_santri_riyadhoh`, `tempat_lahir`, `tanggal_lahir`, `alamat_desa`, `alamat_kecamatan`, `alamat_kabupaten`, `alamat_provinsi`, `no_nik`, `no_hp`, `nama_wali`, `no_hp_wali`, `tahun_daftar`, `tanggal_daftar`) VALUES
(1, 'Ahmad Faizal', 'Jakarta', '2003-01-15', 'Cempaka Putih', 'Cempaka Putih', 'Jakarta Pusat', 'DKI Jakarta', '3175011501030001', '081234567890', 'Budi Raharjo', '081234567891', '2024', '2024-01-20'),
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
