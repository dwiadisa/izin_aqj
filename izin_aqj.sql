/*
 Navicat Premium Dump SQL

 Source Server         : lokalan
 Source Server Type    : MySQL
 Source Server Version : 80200 (8.2.0)
 Source Host           : localhost:3306
 Source Schema         : izin_aqj

 Target Server Type    : MySQL
 Target Server Version : 80200 (8.2.0)
 File Encoding         : 65001

 Date: 21/12/2024 17:11:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_history_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `data_history_pendidikan`;
CREATE TABLE `data_history_pendidikan`  (
  `id_history` int NOT NULL AUTO_INCREMENT,
  `id_santri` int NOT NULL,
  `id_lembaga` int NOT NULL,
  `tahun_masuk_lembaga` year NOT NULL,
  `tahun_keluar_lembaga` year NOT NULL,
  PRIMARY KEY (`id_history`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of data_history_pendidikan
-- ----------------------------
INSERT INTO `data_history_pendidikan` VALUES (1, 10, 9, 2002, 2003);
INSERT INTO `data_history_pendidikan` VALUES (2, 5, 10, 2003, 2024);
INSERT INTO `data_history_pendidikan` VALUES (3, 4, 9, 2003, 2006);
INSERT INTO `data_history_pendidikan` VALUES (4, 12, 11, 2018, 2020);
INSERT INTO `data_history_pendidikan` VALUES (5, 17, 11, 2019, 2021);
INSERT INTO `data_history_pendidikan` VALUES (6, 6, 11, 2015, 2018);
INSERT INTO `data_history_pendidikan` VALUES (8, 8, 17, 0000, 0000);
INSERT INTO `data_history_pendidikan` VALUES (9, 10, 11, 2002, 2003);
INSERT INTO `data_history_pendidikan` VALUES (10, 10, 19, 2002, 2003);
INSERT INTO `data_history_pendidikan` VALUES (13, 6, 15, 2024, 2026);
INSERT INTO `data_history_pendidikan` VALUES (14, 23, 9, 2024, 2028);
INSERT INTO `data_history_pendidikan` VALUES (15, 49, 11, 2024, 2026);

-- ----------------------------
-- Table structure for data_kamar
-- ----------------------------
DROP TABLE IF EXISTS `data_kamar`;
CREATE TABLE `data_kamar`  (
  `id_kamar` int NOT NULL AUTO_INCREMENT,
  `wilayah` int NOT NULL,
  `nama_kamar` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_kamar`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 52 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_kamar
-- ----------------------------
INSERT INTO `data_kamar` VALUES (10, 1, 'SK-1');
INSERT INTO `data_kamar` VALUES (9, 1, 'SK-2');
INSERT INTO `data_kamar` VALUES (8, 4, 'Muharram');
INSERT INTO `data_kamar` VALUES (11, 2, 'PALESTINA');
INSERT INTO `data_kamar` VALUES (12, 2, 'MESIR');
INSERT INTO `data_kamar` VALUES (13, 2, 'AFGHANISTAN');
INSERT INTO `data_kamar` VALUES (18, 2, 'BAGHDHAD');
INSERT INTO `data_kamar` VALUES (17, 3, 'xcvgfdsg');
INSERT INTO `data_kamar` VALUES (19, 5, 'Mexico');
INSERT INTO `data_kamar` VALUES (20, 6, 'Muharram');
INSERT INTO `data_kamar` VALUES (21, 8, '1');
INSERT INTO `data_kamar` VALUES (22, 7, 'SA 1');
INSERT INTO `data_kamar` VALUES (23, 7, 'SA 2');
INSERT INTO `data_kamar` VALUES (24, 7, 'SA 3 (PENGDAR)');
INSERT INTO `data_kamar` VALUES (25, 7, 'SA 4');
INSERT INTO `data_kamar` VALUES (26, 9, 'RU 1 ');
INSERT INTO `data_kamar` VALUES (27, 9, 'RU 2');
INSERT INTO `data_kamar` VALUES (28, 9, 'RU 3 (PENGDAR)');
INSERT INTO `data_kamar` VALUES (29, 9, 'RU 4');
INSERT INTO `data_kamar` VALUES (30, 9, 'RU 5');
INSERT INTO `data_kamar` VALUES (31, 9, 'RU 6');
INSERT INTO `data_kamar` VALUES (43, 2, 'MEKKAH');
INSERT INTO `data_kamar` VALUES (34, 10, 'Sunan Gersik');
INSERT INTO `data_kamar` VALUES (35, 10, 'Sunan Giri');
INSERT INTO `data_kamar` VALUES (36, 10, 'Sunan Bonang');
INSERT INTO `data_kamar` VALUES (37, 10, 'Sunan KaliJogo');
INSERT INTO `data_kamar` VALUES (38, 10, 'Sunan Drajad');
INSERT INTO `data_kamar` VALUES (39, 10, 'sunan Kudus');
INSERT INTO `data_kamar` VALUES (40, 10, 'Sunan Muria');
INSERT INTO `data_kamar` VALUES (41, 10, 'Sunan Gunung Jati');
INSERT INTO `data_kamar` VALUES (42, 10, 'Sunan Bayat');
INSERT INTO `data_kamar` VALUES (44, 2, 'YAMAN');
INSERT INTO `data_kamar` VALUES (45, 11, 'SEKSI TARBIYAH');
INSERT INTO `data_kamar` VALUES (46, 11, 'SEKSI KEAMANAN');
INSERT INTO `data_kamar` VALUES (47, 11, 'SEKSI KESENIAN');
INSERT INTO `data_kamar` VALUES (48, 11, 'SEKSI KESEHATAN');
INSERT INTO `data_kamar` VALUES (49, 11, 'SEKSI KEBERSIHAN');
INSERT INTO `data_kamar` VALUES (50, 11, 'SEKSI KAHRUBAX');

-- ----------------------------
-- Table structure for data_kelas
-- ----------------------------
DROP TABLE IF EXISTS `data_kelas`;
CREATE TABLE `data_kelas`  (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(100) CHARACTER SET utf16le COLLATE utf16le_general_ci NOT NULL,
  `lembaga` int NOT NULL,
  PRIMARY KEY (`id_kelas`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf16le COLLATE = utf16le_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_kelas
-- ----------------------------
INSERT INTO `data_kelas` VALUES (5, 'VII A', 17);
INSERT INTO `data_kelas` VALUES (4, 'X DKV', 11);
INSERT INTO `data_kelas` VALUES (3, 'XI DKV', 11);
INSERT INTO `data_kelas` VALUES (6, 'VII A', 9);
INSERT INTO `data_kelas` VALUES (7, 'X IPA', 10);
INSERT INTO `data_kelas` VALUES (8, 'X AKL', 11);
INSERT INTO `data_kelas` VALUES (9, 'XI AKL', 11);

-- ----------------------------
-- Table structure for data_keperluan_izin
-- ----------------------------
DROP TABLE IF EXISTS `data_keperluan_izin`;
CREATE TABLE `data_keperluan_izin`  (
  `id_keperluan` int NOT NULL AUTO_INCREMENT,
  `nama_keperluan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_keperluan`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_keperluan_izin
-- ----------------------------
INSERT INTO `data_keperluan_izin` VALUES (1, 'Cap Tiga Jari');
INSERT INTO `data_keperluan_izin` VALUES (2, 'Kepentingan Keluarga');

-- ----------------------------
-- Table structure for data_lembaga
-- ----------------------------
DROP TABLE IF EXISTS `data_lembaga`;
CREATE TABLE `data_lembaga`  (
  `id_lembaga` int NOT NULL AUTO_INCREMENT,
  `singkatan_lembaga` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_lembaga` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_lembaga`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_lembaga
-- ----------------------------
INSERT INTO `data_lembaga` VALUES (10, 'MA AQ', 'MADRASAH ALIYAH AL QODIRI 1 JEMBER');
INSERT INTO `data_lembaga` VALUES (9, 'SMP PLUS AQ', 'SMP PLUS AL QODIRI 1 JEMBER');
INSERT INTO `data_lembaga` VALUES (17, 'MTS UNGGULAN AQ', 'MTS UNGGULAN AL QODIRI 1 JEMBER');
INSERT INTO `data_lembaga` VALUES (11, 'SMK AQ', 'SMK AL QODIRI 1 JEMBER');
INSERT INTO `data_lembaga` VALUES (12, 'MAN 2 JEMBER', 'MADRASAH ALIYAH NEGERI 2 JEMBER');
INSERT INTO `data_lembaga` VALUES (14, 'MTSN 2 JEMBER', 'MADRASAH TSANAWIYAH NEGERI 2 JEMBER');
INSERT INTO `data_lembaga` VALUES (15, 'IAI AQ', 'INSTITUT AGAMA ISLAM AL QODIRI JEMBER');
INSERT INTO `data_lembaga` VALUES (16, 'STIKES AQ', 'STIKES BHAKTI AL QODIRI');
INSERT INTO `data_lembaga` VALUES (20, 'STIKES SOEBANDI', 'STIKES SOEBANDI');
INSERT INTO `data_lembaga` VALUES (21, 'POLTEK J', 'POLTEK JEMBER');

-- ----------------------------
-- Table structure for data_penghuni
-- ----------------------------
DROP TABLE IF EXISTS `data_penghuni`;
CREATE TABLE `data_penghuni`  (
  `id_penghuni` int NOT NULL AUTO_INCREMENT,
  `id_santri` int NOT NULL,
  `id_wilayah` int NOT NULL,
  `id_kamar` int NOT NULL,
  PRIMARY KEY (`id_penghuni`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 246 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of data_penghuni
-- ----------------------------
INSERT INTO `data_penghuni` VALUES (48, 17, 7, 23);
INSERT INTO `data_penghuni` VALUES (40, 26, 7, 22);
INSERT INTO `data_penghuni` VALUES (47, 16, 7, 22);
INSERT INTO `data_penghuni` VALUES (243, 190, 11, 45);
INSERT INTO `data_penghuni` VALUES (50, 19, 7, 23);
INSERT INTO `data_penghuni` VALUES (46, 15, 7, 23);
INSERT INTO `data_penghuni` VALUES (35, 5, 8, 21);
INSERT INTO `data_penghuni` VALUES (226, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (210, 8, 10, 34);
INSERT INTO `data_penghuni` VALUES (37, 7, 8, 21);
INSERT INTO `data_penghuni` VALUES (45, 14, 7, 23);
INSERT INTO `data_penghuni` VALUES (44, 13, 7, 22);
INSERT INTO `data_penghuni` VALUES (36, 6, 8, 21);
INSERT INTO `data_penghuni` VALUES (43, 12, 7, 22);
INSERT INTO `data_penghuni` VALUES (211, 9, 10, 34);
INSERT INTO `data_penghuni` VALUES (49, 18, 7, 22);
INSERT INTO `data_penghuni` VALUES (59, 29, 9, 27);
INSERT INTO `data_penghuni` VALUES (51, 20, 7, 22);
INSERT INTO `data_penghuni` VALUES (52, 21, 7, 23);
INSERT INTO `data_penghuni` VALUES (53, 22, 7, 22);
INSERT INTO `data_penghuni` VALUES (54, 23, 7, 23);
INSERT INTO `data_penghuni` VALUES (55, 24, 7, 23);
INSERT INTO `data_penghuni` VALUES (56, 25, 7, 22);
INSERT INTO `data_penghuni` VALUES (57, 27, 8, 21);
INSERT INTO `data_penghuni` VALUES (58, 28, 7, 23);
INSERT INTO `data_penghuni` VALUES (60, 30, 9, 26);
INSERT INTO `data_penghuni` VALUES (61, 31, 9, 29);
INSERT INTO `data_penghuni` VALUES (62, 32, 9, 30);
INSERT INTO `data_penghuni` VALUES (63, 33, 9, 29);
INSERT INTO `data_penghuni` VALUES (64, 34, 9, 30);
INSERT INTO `data_penghuni` VALUES (65, 35, 9, 30);
INSERT INTO `data_penghuni` VALUES (66, 4, 8, 21);
INSERT INTO `data_penghuni` VALUES (67, 36, 9, 30);
INSERT INTO `data_penghuni` VALUES (68, 37, 9, 26);
INSERT INTO `data_penghuni` VALUES (69, 38, 9, 26);
INSERT INTO `data_penghuni` VALUES (70, 39, 9, 27);
INSERT INTO `data_penghuni` VALUES (71, 40, 9, 29);
INSERT INTO `data_penghuni` VALUES (72, 41, 9, 30);
INSERT INTO `data_penghuni` VALUES (73, 42, 9, 30);
INSERT INTO `data_penghuni` VALUES (74, 45, 9, 30);
INSERT INTO `data_penghuni` VALUES (75, 43, 9, 29);
INSERT INTO `data_penghuni` VALUES (76, 46, 9, 29);
INSERT INTO `data_penghuni` VALUES (77, 44, 9, 30);
INSERT INTO `data_penghuni` VALUES (78, 47, 9, 30);
INSERT INTO `data_penghuni` VALUES (79, 48, 9, 26);
INSERT INTO `data_penghuni` VALUES (80, 49, 9, 29);
INSERT INTO `data_penghuni` VALUES (81, 50, 9, 29);
INSERT INTO `data_penghuni` VALUES (82, 51, 9, 27);
INSERT INTO `data_penghuni` VALUES (83, 52, 9, 27);
INSERT INTO `data_penghuni` VALUES (84, 53, 9, 27);
INSERT INTO `data_penghuni` VALUES (85, 54, 9, 30);
INSERT INTO `data_penghuni` VALUES (86, 56, 9, 26);
INSERT INTO `data_penghuni` VALUES (87, 55, 9, 27);
INSERT INTO `data_penghuni` VALUES (88, 57, 9, 27);
INSERT INTO `data_penghuni` VALUES (89, 58, 9, 29);
INSERT INTO `data_penghuni` VALUES (90, 59, 9, 27);
INSERT INTO `data_penghuni` VALUES (91, 60, 9, 30);
INSERT INTO `data_penghuni` VALUES (92, 61, 9, 27);
INSERT INTO `data_penghuni` VALUES (93, 62, 9, 29);
INSERT INTO `data_penghuni` VALUES (94, 63, 9, 27);
INSERT INTO `data_penghuni` VALUES (95, 64, 9, 30);
INSERT INTO `data_penghuni` VALUES (96, 65, 9, 29);
INSERT INTO `data_penghuni` VALUES (97, 66, 9, 26);
INSERT INTO `data_penghuni` VALUES (98, 67, 9, 30);
INSERT INTO `data_penghuni` VALUES (99, 68, 9, 26);
INSERT INTO `data_penghuni` VALUES (100, 69, 9, 28);
INSERT INTO `data_penghuni` VALUES (101, 70, 9, 26);
INSERT INTO `data_penghuni` VALUES (102, 71, 9, 28);
INSERT INTO `data_penghuni` VALUES (103, 72, 9, 26);
INSERT INTO `data_penghuni` VALUES (104, 73, 9, 26);
INSERT INTO `data_penghuni` VALUES (105, 74, 9, 29);
INSERT INTO `data_penghuni` VALUES (106, 75, 9, 28);
INSERT INTO `data_penghuni` VALUES (107, 77, 9, 26);
INSERT INTO `data_penghuni` VALUES (109, 78, 9, 29);
INSERT INTO `data_penghuni` VALUES (110, 79, 9, 29);
INSERT INTO `data_penghuni` VALUES (111, 80, 9, 28);
INSERT INTO `data_penghuni` VALUES (112, 81, 7, 23);
INSERT INTO `data_penghuni` VALUES (113, 82, 7, 23);
INSERT INTO `data_penghuni` VALUES (114, 83, 7, 22);
INSERT INTO `data_penghuni` VALUES (115, 84, 7, 23);
INSERT INTO `data_penghuni` VALUES (116, 85, 7, 23);
INSERT INTO `data_penghuni` VALUES (117, 86, 7, 22);
INSERT INTO `data_penghuni` VALUES (118, 87, 7, 22);
INSERT INTO `data_penghuni` VALUES (119, 88, 7, 22);
INSERT INTO `data_penghuni` VALUES (120, 89, 7, 24);
INSERT INTO `data_penghuni` VALUES (121, 90, 7, 23);
INSERT INTO `data_penghuni` VALUES (122, 91, 7, 22);
INSERT INTO `data_penghuni` VALUES (123, 92, 7, 24);
INSERT INTO `data_penghuni` VALUES (124, 93, 7, 24);
INSERT INTO `data_penghuni` VALUES (125, 94, 7, 24);
INSERT INTO `data_penghuni` VALUES (126, 95, 10, 41);
INSERT INTO `data_penghuni` VALUES (127, 96, 10, 39);
INSERT INTO `data_penghuni` VALUES (128, 97, 10, 41);
INSERT INTO `data_penghuni` VALUES (129, 98, 10, 41);
INSERT INTO `data_penghuni` VALUES (130, 99, 10, 39);
INSERT INTO `data_penghuni` VALUES (209, 100, 10, 34);
INSERT INTO `data_penghuni` VALUES (132, 103, 10, 40);
INSERT INTO `data_penghuni` VALUES (133, 101, 10, 35);
INSERT INTO `data_penghuni` VALUES (134, 104, 10, 42);
INSERT INTO `data_penghuni` VALUES (135, 105, 10, 42);
INSERT INTO `data_penghuni` VALUES (136, 106, 10, 40);
INSERT INTO `data_penghuni` VALUES (137, 107, 10, 36);
INSERT INTO `data_penghuni` VALUES (138, 108, 10, 42);
INSERT INTO `data_penghuni` VALUES (139, 109, 7, 23);
INSERT INTO `data_penghuni` VALUES (140, 110, 10, 40);
INSERT INTO `data_penghuni` VALUES (141, 111, 10, 36);
INSERT INTO `data_penghuni` VALUES (142, 112, 7, 23);
INSERT INTO `data_penghuni` VALUES (143, 113, 10, 35);
INSERT INTO `data_penghuni` VALUES (144, 115, 10, 40);
INSERT INTO `data_penghuni` VALUES (145, 117, 10, 37);
INSERT INTO `data_penghuni` VALUES (146, 118, 10, 37);
INSERT INTO `data_penghuni` VALUES (147, 119, 10, 37);
INSERT INTO `data_penghuni` VALUES (148, 120, 10, 37);
INSERT INTO `data_penghuni` VALUES (149, 121, 10, 37);
INSERT INTO `data_penghuni` VALUES (150, 122, 10, 36);
INSERT INTO `data_penghuni` VALUES (151, 123, 10, 35);
INSERT INTO `data_penghuni` VALUES (152, 124, 10, 37);
INSERT INTO `data_penghuni` VALUES (153, 126, 10, 38);
INSERT INTO `data_penghuni` VALUES (154, 127, 10, 42);
INSERT INTO `data_penghuni` VALUES (155, 128, 10, 37);
INSERT INTO `data_penghuni` VALUES (156, 114, 10, 38);
INSERT INTO `data_penghuni` VALUES (157, 125, 10, 37);
INSERT INTO `data_penghuni` VALUES (158, 129, 10, 39);
INSERT INTO `data_penghuni` VALUES (159, 130, 10, 39);
INSERT INTO `data_penghuni` VALUES (160, 131, 11, 48);
INSERT INTO `data_penghuni` VALUES (161, 132, 11, 48);
INSERT INTO `data_penghuni` VALUES (162, 133, 11, 50);
INSERT INTO `data_penghuni` VALUES (163, 134, 7, 23);
INSERT INTO `data_penghuni` VALUES (164, 135, 2, 11);
INSERT INTO `data_penghuni` VALUES (165, 136, 2, 11);
INSERT INTO `data_penghuni` VALUES (166, 137, 2, 44);
INSERT INTO `data_penghuni` VALUES (167, 138, 2, 44);
INSERT INTO `data_penghuni` VALUES (168, 139, 2, 18);
INSERT INTO `data_penghuni` VALUES (169, 140, 2, 13);
INSERT INTO `data_penghuni` VALUES (170, 141, 2, 18);
INSERT INTO `data_penghuni` VALUES (171, 142, 2, 11);
INSERT INTO `data_penghuni` VALUES (173, 144, 2, 18);
INSERT INTO `data_penghuni` VALUES (174, 145, 2, 18);
INSERT INTO `data_penghuni` VALUES (175, 146, 2, 13);
INSERT INTO `data_penghuni` VALUES (176, 147, 2, 18);
INSERT INTO `data_penghuni` VALUES (177, 148, 2, 13);
INSERT INTO `data_penghuni` VALUES (178, 149, 2, 44);
INSERT INTO `data_penghuni` VALUES (179, 150, 2, 11);
INSERT INTO `data_penghuni` VALUES (180, 152, 2, 44);
INSERT INTO `data_penghuni` VALUES (181, 155, 2, 13);
INSERT INTO `data_penghuni` VALUES (182, 157, 2, 44);
INSERT INTO `data_penghuni` VALUES (183, 159, 2, 13);
INSERT INTO `data_penghuni` VALUES (184, 160, 2, 44);
INSERT INTO `data_penghuni` VALUES (185, 161, 2, 11);
INSERT INTO `data_penghuni` VALUES (186, 162, 2, 18);
INSERT INTO `data_penghuni` VALUES (187, 163, 2, 18);
INSERT INTO `data_penghuni` VALUES (188, 164, 2, 13);
INSERT INTO `data_penghuni` VALUES (189, 165, 2, 13);
INSERT INTO `data_penghuni` VALUES (190, 166, 2, 44);
INSERT INTO `data_penghuni` VALUES (191, 167, 2, 44);
INSERT INTO `data_penghuni` VALUES (192, 168, 2, 44);
INSERT INTO `data_penghuni` VALUES (193, 169, 2, 18);
INSERT INTO `data_penghuni` VALUES (194, 170, 2, 13);
INSERT INTO `data_penghuni` VALUES (195, 171, 2, 13);
INSERT INTO `data_penghuni` VALUES (196, 172, 2, 43);
INSERT INTO `data_penghuni` VALUES (197, 173, 2, 13);
INSERT INTO `data_penghuni` VALUES (198, 158, 2, 44);
INSERT INTO `data_penghuni` VALUES (199, 174, 2, 18);
INSERT INTO `data_penghuni` VALUES (200, 175, 2, 43);
INSERT INTO `data_penghuni` VALUES (201, 176, 2, 43);
INSERT INTO `data_penghuni` VALUES (202, 177, 11, 50);
INSERT INTO `data_penghuni` VALUES (203, 156, 10, 41);
INSERT INTO `data_penghuni` VALUES (204, 178, 10, 35);
INSERT INTO `data_penghuni` VALUES (205, 151, 10, 40);
INSERT INTO `data_penghuni` VALUES (206, 179, 10, 42);
INSERT INTO `data_penghuni` VALUES (207, 180, 10, 37);
INSERT INTO `data_penghuni` VALUES (208, 154, 11, 49);
INSERT INTO `data_penghuni` VALUES (225, 183, 10, 42);
INSERT INTO `data_penghuni` VALUES (224, 182, 10, 42);
INSERT INTO `data_penghuni` VALUES (223, 181, 10, 42);
INSERT INTO `data_penghuni` VALUES (217, 184, 6, 20);
INSERT INTO `data_penghuni` VALUES (242, 185, 11, 45);
INSERT INTO `data_penghuni` VALUES (220, 187, 6, 20);
INSERT INTO `data_penghuni` VALUES (245, 191, 6, 20);
INSERT INTO `data_penghuni` VALUES (244, 143, 6, 20);
INSERT INTO `data_penghuni` VALUES (228, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (229, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (230, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (231, 10, 10, 42);
INSERT INTO `data_penghuni` VALUES (232, 11, 10, 42);
INSERT INTO `data_penghuni` VALUES (233, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (234, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (235, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (236, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (237, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (238, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (239, 0, 10, 42);
INSERT INTO `data_penghuni` VALUES (240, 0, 10, 42);

-- ----------------------------
-- Table structure for data_perizinan
-- ----------------------------
DROP TABLE IF EXISTS `data_perizinan`;
CREATE TABLE `data_perizinan`  (
  `id_izin` int NOT NULL AUTO_INCREMENT,
  `kode_perizinan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_santri` int NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jam_akhir` time NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `jam_checkin` time NOT NULL,
  `status` enum('SUDAH KEMBALI','BELUM KEMBALI','TERLAMBAT KEMBALI','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status_izin` enum('SUDAH DIIZINKAN','BELUM DIIZINKAN','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `keperluan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pemberi_izin` int NOT NULL,
  PRIMARY KEY (`id_izin`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_perizinan
-- ----------------------------
INSERT INTO `data_perizinan` VALUES (10, 'NJH9C', 26, '2024-08-29', '06:32:00', '2024-11-30', '04:35:00', '2024-10-15', '00:11:25', 'SUDAH KEMBALI', 'SUDAH DIIZINKAN', 'CAP 3 JARI', 1);
INSERT INTO `data_perizinan` VALUES (16, 'WTETZ', 6, '2024-10-11', '16:22:00', '2024-10-11', '17:00:00', '2024-10-14', '21:20:18', 'TERLAMBAT KEMBALI', 'SUDAH DIIZINKAN', 'rtret', 1);
INSERT INTO `data_perizinan` VALUES (17, '4XALY', 9, '2024-11-04', '12:28:00', '2024-11-05', '17:00:00', '2024-11-15', '12:21:46', 'TERLAMBAT KEMBALI', 'SUDAH DIIZINKAN', 'test', 1);
INSERT INTO `data_perizinan` VALUES (18, '2PKTV', 26, '2024-11-07', '20:13:00', '2024-11-09', '17:00:00', '0000-00-00', '00:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'Ngetesting saja\r\n', 1);
INSERT INTO `data_perizinan` VALUES (19, 'FGKXL', 44, '2024-11-13', '16:07:00', '2024-11-13', '17:00:00', '2024-11-13', '16:09:33', 'SUDAH KEMBALI', 'SUDAH DIIZINKAN', 'aslkdhjalsjkhdjkasd\r\n', 1);
INSERT INTO `data_perizinan` VALUES (20, 'LSMBY', 9, '2024-12-01', '23:43:00', '2024-12-20', '17:00:00', '2024-12-05', '13:39:35', 'SUDAH KEMBALI', 'SUDAH DIIZINKAN', 'yyyyy\r\n', 1);
INSERT INTO `data_perizinan` VALUES (21, 'ZKIDB', 31, '2024-12-04', '20:26:00', '2024-12-04', '17:00:00', '0000-00-00', '00:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'ppppp\r\n', 1);
INSERT INTO `data_perizinan` VALUES (22, 'DO4ZT', 32, '2024-12-04', '23:57:00', '2024-12-06', '17:00:00', '2024-12-08', '21:41:57', 'TERLAMBAT KEMBALI', 'SUDAH DIIZINKAN', 'jkhkj', 1);
INSERT INTO `data_perizinan` VALUES (23, 'AJE4B', 17, '2024-12-08', '21:46:00', '2024-12-09', '17:00:00', '0000-00-00', '00:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'hjghjghj\r\n', 1);
INSERT INTO `data_perizinan` VALUES (24, 'SQULR', 32, '2024-12-13', '00:24:00', '2025-02-07', '17:00:00', '0000-00-00', '00:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'dsfsdfsdf', 1);
INSERT INTO `data_perizinan` VALUES (25, 'ORPXI', 12, '2024-12-18', '23:22:00', '2024-12-19', '17:00:00', '0000-00-00', '00:00:00', 'BELUM KEMBALI', 'SUDAH DIIZINKAN', 'cvgdcfgdf', 1);

-- ----------------------------
-- Table structure for data_rombel
-- ----------------------------
DROP TABLE IF EXISTS `data_rombel`;
CREATE TABLE `data_rombel`  (
  `id_rombel` int NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` int NOT NULL,
  `santri` int NOT NULL,
  `lembaga` int NOT NULL,
  `kelas` int NOT NULL,
  PRIMARY KEY (`id_rombel`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 32 CHARACTER SET = utf16le COLLATE = utf16le_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of data_rombel
-- ----------------------------
INSERT INTO `data_rombel` VALUES (1, 1, 6, 9, 6);
INSERT INTO `data_rombel` VALUES (2, 4, 6, 11, 4);
INSERT INTO `data_rombel` VALUES (3, 1, 7, 9, 6);
INSERT INTO `data_rombel` VALUES (4, 1, 8, 9, 6);
INSERT INTO `data_rombel` VALUES (5, 1, 9, 9, 6);
INSERT INTO `data_rombel` VALUES (6, 1, 10, 9, 6);
INSERT INTO `data_rombel` VALUES (7, 1, 11, 9, 6);
INSERT INTO `data_rombel` VALUES (8, 1, 12, 9, 6);
INSERT INTO `data_rombel` VALUES (9, 1, 13, 9, 6);
INSERT INTO `data_rombel` VALUES (10, 1, 14, 9, 6);
INSERT INTO `data_rombel` VALUES (11, 1, 15, 9, 6);
INSERT INTO `data_rombel` VALUES (12, 1, 16, 9, 6);
INSERT INTO `data_rombel` VALUES (13, 1, 17, 9, 6);
INSERT INTO `data_rombel` VALUES (14, 1, 18, 9, 6);
INSERT INTO `data_rombel` VALUES (15, 6, 7, 11, 9);
INSERT INTO `data_rombel` VALUES (16, 6, 8, 11, 9);
INSERT INTO `data_rombel` VALUES (17, 6, 9, 11, 9);
INSERT INTO `data_rombel` VALUES (18, 6, 10, 11, 9);
INSERT INTO `data_rombel` VALUES (19, 6, 11, 11, 9);
INSERT INTO `data_rombel` VALUES (20, 6, 12, 11, 9);
INSERT INTO `data_rombel` VALUES (21, 6, 13, 11, 9);
INSERT INTO `data_rombel` VALUES (22, 6, 14, 11, 9);
INSERT INTO `data_rombel` VALUES (23, 6, 15, 11, 9);
INSERT INTO `data_rombel` VALUES (24, 6, 16, 11, 9);
INSERT INTO `data_rombel` VALUES (25, 6, 17, 11, 9);
INSERT INTO `data_rombel` VALUES (26, 1, 191, 10, 7);
INSERT INTO `data_rombel` VALUES (27, 6, 181, 11, 9);
INSERT INTO `data_rombel` VALUES (28, 1, 171, 9, 6);
INSERT INTO `data_rombel` VALUES (29, 4, 171, 11, 9);
INSERT INTO `data_rombel` VALUES (30, 1, 155, 9, 6);
INSERT INTO `data_rombel` VALUES (31, 4, 155, 10, 7);

-- ----------------------------
-- Table structure for data_santri
-- ----------------------------
DROP TABLE IF EXISTS `data_santri`;
CREATE TABLE `data_santri`  (
  `id_santri` int NOT NULL AUTO_INCREMENT,
  `tahun_masuk` year NOT NULL,
  `bulan_masuk` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_urut` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_induk_santri` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_lengkap_santri` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tempat_lahir` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_dusun` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_desa` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_kecamatan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_kabupaten` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_provinsi` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pendidikan_dipilih` int NOT NULL,
  `pendidikan_saat_ini` int NOT NULL,
  `nama_ayah` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pekerjaan_ayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_ibu` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pekerjaan_ibu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status_santri` enum('AKTIF','NONAKTIF','ALUMNI','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_santri`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 192 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_santri
-- ----------------------------
INSERT INTO `data_santri` VALUES (6, 1970, '01', '', '201507001', 'MOH YAZID MUJADI', '2015-07-22', 'BANYUWANGI', '2000-07-11', 'CANGKRING', 'PENGATIGAN', 'ROGOJAMPI', 'BANYUWANGI', 'JAWA TIMUR', 11, 0, 'SYAIFULLOH', 'PETANI', 'HUSRIYATI', '', '081515465448', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (7, 2013, '11', '', '201311001', 'MUHAMMAD YUNUS', '2013-11-12', 'BANYUWANGI', '1999-09-09', 'KEDUNEN', 'BOMO', 'BLIMBIMGSARI', 'BANYUWANGI', 'JAWA TIMUR', 17, 0, 'MISWAN SAJIDI', 'WIRASWASTA', 'KHUSNUL KHOTIMAH', '', '087853844855', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (8, 2022, '07', '', '202207001', 'RIKY RIDHO', '2022-07-13', 'JEMBER', '2009-03-14', 'LAWANGSARI', 'NOGOSARI ', 'RAMBIPUJI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'JUMADI MASHURY', 'PETANI', 'SUSIATI', '', '085645820287', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (9, 2024, '08', '', '202408001', 'MUHAMMAD RAFAHI ALKAUNAIN', '2024-08-29', 'JEMBER', '2008-08-12', 'PEJI', 'LENGKONG', 'MUMBULSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'ARIK EFENDI', 'PEDAGANG', 'RITA LIDIYAWATI', '', '083109753012', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (10, 2024, '08', '', '202408002', 'M DA\'I BU ROQQI', '2024-08-29', 'BANYUWANGI', '2008-12-13', 'DURENAN', 'PAKEL', 'LICIN', 'BANYUWANGI', 'JAWA TIMUR', 9, 0, 'ROMLI SUCIPTO', 'PETANI', 'SITI KHODIJAH', '', '085230518821', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (11, 2023, '09', '', '202309001', 'REFAN SYAFIQ. F', '2023-09-20', 'JEMBER', '2009-04-02', 'KRAJAN', 'SUKOKERTO', 'SUKOWONO', 'JEMBER', 'JAWA TIMUR', 9, 0, 'BAKRIYANTO', 'PETANI', 'NANIK ALFIYAH', '', '085852780577', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (12, 2022, '06', '', '202206002', 'MUHAMMAD MUZAKKI', '2022-06-12', 'JEMBER', '2009-02-27', 'BACEM', 'PANDUMAN', 'JELBUK', 'JEMBER', 'JAWA TIMUR', 9, 0, 'MULYADI', 'PETANI', 'NIWATI', '', '083877590355', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (13, 2024, '06', '', '202406003', 'SAMSUL ARIFIN AZ ZAKKI', '2024-06-11', 'JEMBER', '2011-12-06', 'LAMPARAN', 'PANDUMAN', 'JELBUK', 'JEMBER', 'JAWA TIMUR', 9, 0, 'IMAM AMINULLOH', 'HONORER', 'IRMAWATI', '', '081299910599', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (14, 2023, '06', '', '202306002', 'ALFIN YANNUR WIDIANSYAH', '2023-06-14', 'JEMBER', '2011-01-30', 'KRAJAN A', 'BANGSALSARI', 'BANGSALSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'EKO WIDIYANTO', 'WIRASWASTA', 'SAMSIYATI', '', '082143908998', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (15, 2023, '06', '', '202306002', 'ALFAN YANNUR WIDIANSYAH', '2023-06-14', 'JEMBER', '2011-01-30', 'KRAJAN A', 'BANGSALSARI', 'BANGSALSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'EKO WIDIYANTO', 'WIRASWASTA', 'SAMSIYATI', '', '082143908998', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (16, 2024, '05', '', '202405003', 'BAKHTIAR ROBITUL UMAM KHOLIS', '2024-05-30', 'JEMBER', '2011-12-26', 'SUMURAN', 'AJUNG', 'AJUNG', 'JEMBER', 'JAWA TIMUR', 9, 0, 'AHMAD NUR KHOLIS', 'WIRASWASTA', 'SITI FATIMAH', '', '081336103204', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (17, 2022, '07', '', '202207002', 'ACHMAD.FIRMANSYAH', '2022-07-05', 'JEMBER', '2009-09-04', 'GUMUK MUMUNDUNG', 'SUMBERSARI', 'SUMBERSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'ABDUL HALIM', 'MANDOR BANGUNAN', 'LILIK TOHIR', '', '085101155815', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (18, 2022, '07', '', '202207003', 'MUHAMMAD ARIS MUNANDAR', '2022-07-10', 'JEMBER', '2010-06-13', 'KARETAN', 'GRENDEN', 'PUGER', 'JEMBER', 'JAWA TIMUR', 9, 0, 'IMAM SUBAKIR', 'PETANI', 'PUTRIE ERNA WATI', '', '085643193037', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (19, 2022, '06', '', '202206004', 'ALFIANSYAH MAULANA', '2022-06-17', 'JEMBER', '2009-11-10', 'KARANGSONO', 'GRENDEN', 'PUGER', 'JEMBER', 'JAWA TIMUR', 14, 0, 'MUHAMAD HOLIL', 'PETANI', 'SITI MALIHA', '', '083856580734', './assets/foto_santri/6754897f2e0d6.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (20, 2024, '07', '', '202407003', 'ACHMAD AZZYAN JAKA WAHYUDI', '2024-07-09', 'JEMBER', '2012-01-21', 'LENGKONG TOKO', 'MRAWAN', 'MAYANG', 'JEMBER', 'JAWA TIMUR', 9, 0, 'IMAM WAHYUDI', 'WIRASWASTA', 'EDWINA DWI UTAMI', '', '082334928418', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (21, 2023, '11', '', '202311002', 'AHMAD NAUFAL AZMI DAFA', '2023-11-06', 'JEMBER', '2010-06-03', 'LEMBENGAN', 'LEMBENGAN', 'LEDOKOMBO', 'JEMBER', 'JAWA TIMUR', 14, 0, 'SUGENG HARIANTO', 'PNS', 'NUR HALIFAH', '', '082139944386', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (22, 2024, '03', '', '202403003', 'MOCH RIFAL FERDIANSYAH', '2024-03-02', 'JEMBER', '2010-06-23', 'JL AHMAD YANI ', 'KEBONSARI', 'SUMBERSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'JUNAIDI', 'WIRASWASTA', 'LISTIANA', '', '085738684497', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (23, 2022, '06', '', '202206004', 'AFDI KURNIA PRATAMA', '2022-06-28', 'NGAWI', '2009-11-06', 'VGH ', 'SATRIYA MEKAR ', 'SATRIYA MEKAR ', 'BEKASI', 'JAWA BARAT', 9, 0, 'SUJADI', 'WIRASWASTA', 'SRI RUBIATI', '', '085737446096', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (24, 2022, '06', '', '202206004', 'ABDUL LATIF', '2022-06-05', 'JEMBER', '2009-12-21', 'TEMPUREJO', 'TEMPUREJO', 'TEMPUREJO', 'JEMBER', 'JAWA TIMUR', 9, 0, 'SUDIONO', 'WIRASWASTA', 'LILIK SURIYATI', '', '085232500988', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (25, 2024, '07', '', '202407003', 'ALIF KHOIRIL RIZAL', '2024-07-10', 'BONDOWOS', '2010-05-20', 'KRAJAN', 'TAPEN', 'TAPEN', 'BONDOWOSO', 'JAWA TIMUR', 9, 0, 'YUHYI FAHYUDI', 'PNS', 'SRI WAHYUNI', '', '085790637331', './assets/foto_santri/6755bf16f15b6.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (26, 2024, '06', '', '202406003', 'DEVA ALIEF ROHADI', '2024-06-23', 'PAMEKASAN', '2012-02-25', 'BANLANJANG', 'TLONTORAJA', 'PASEAN', 'PAMEKASAN', 'JAWA TIMUR', 9, 0, 'MOH ROHADI', 'SUPIR', 'HALIMAH', '', '087829210194', './assets/foto_santri/6755bec2dc8e6.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (27, 2012, '12', '', '201212002', 'IWAN HARIYANTO', '2012-12-12', 'JEMBER', '1984-12-12', 'KUMITIR', 'GRENDEN', 'PUGER', 'JEMBER', 'JAWA TIMUR', 10, 0, 'SLAMET', 'WIRASWASTA', 'TARMI', '', '082333909903', './assets/foto_santri/201212002_WhatsApp_Image_2024-09-03_at_13_34_28.jpeg', 'AKTIF');
INSERT INTO `data_santri` VALUES (28, 2022, '07', '', '202207004', 'DINAR ANTALOKA', '2022-07-12', 'DENPASAR', '2009-06-30', 'PANGONAN', 'PANGONAN', 'KENCONG', 'JEMBER', 'JAWA TIMUR', 9, 0, 'HARIYANTO', 'PEDAGANG', 'SARIMA', '', '081338518611', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (29, 2022, '06', '', '202206005', 'AHMAD FIRMANSYAH', '2022-06-18', 'JEMBER', '2006-05-03', 'DARUSSALAM', 'JATIMULYO', 'JENGGAWAH', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MISNAWI', 'PETANI', 'WATININGSIH', '', '082334216246', './assets/foto_santri/67548a466d2e4.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (30, 2020, '06', '', '202006001', 'ALVIN ANDRIANSYAH', '2020-06-12', 'JEMBER', '2008-07-29', 'KRAJAN KIDUL', 'SUMBEREJO', 'AMBULU', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SUMARDI', 'PETANI', 'WINARSIH', '', '085259104009', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (31, 2020, '07', '', '202007002', 'THORIQ ABI PRATAMA', '2020-07-23', 'KOTA BARU', '2007-07-13', 'WONOREJO', 'WONOREJO', 'PAMUKAN UTARA', 'KOTA BARU', 'KALIMANTAN SELATAN', 11, 0, 'SARWONO', 'BENGKEL', 'HARTINI', '', '0', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (32, 1970, '01', '', '202307003', 'RIZAL HUZAIMI ', '2023-07-01', 'JEMBER', '2007-04-14', 'KRAJAN', 'GLAGAH WERO', 'KALISAT', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SUKARTO', 'BURUH TANI', 'SULIHA', '', '082146324117', './assets/foto_santri/197001008_DSCF3360.JPG', 'AKTIF');
INSERT INTO `data_santri` VALUES (33, 2023, '07', '', '202307003', 'MOHAMMAD ALFI HIDAYATULLAH', '2023-07-02', 'JEMBER', '2007-12-17', 'KRAJAN', 'TEGAL WANGI', 'UMBULSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'ALM. ASMU\'I', '0', 'SITI MAISAROH', '', '085258535850', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (34, 2023, '07', '', '202307003', 'MUHAMMAD RAYHAN ROHMADTULLAH', '2023-07-03', 'BLORA', '2008-04-04', 'PONDOK LALANG', 'WONOJATI', 'JENGGAWAH', 'JEMBER', 'JAWA TIMUR', 11, 0, 'ABU BAKAR', 'PEDAGANG', 'SULASIH', '', '085258535850', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (35, 2023, '06', '', '202306003', 'MUHAMMAD RAFLY ARDIANSYAH', '2023-06-27', 'JEMBER', '2007-12-29', 'KRAJAN', 'GADING REJO', 'UMBULSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SUGIRIANTO', 'PETANI', 'MARDIYAH', '', '085230260063', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (36, 2023, '07', '', '202307003', 'MUHAMMAD NAUFAL FIRMANSYAH NABILA', '2023-07-10', 'JEMBER', '2007-05-05', 'MANGLI', 'AJUNG', 'AJUNG', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MUHAMMAD DLABITH', 'GURU', 'CHUMAY', '', '0895348949280', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (37, 2024, '07', '', '202407003', 'MOH SYAIFUL KHAIR', '2024-07-04', 'SUMENEP', '2008-10-27', 'TEGAL BARAT', 'BRAGUNG', 'GULUK GULUK', 'SUMENEP', 'JAWA TIMUR', 11, 0, 'ABDULLAH', 'WIRASWASTA', 'LAYYINAH', '', '082337777945', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (38, 2024, '07', '', '202407003', 'MOH NOR SIDDIEQY', '2024-07-07', 'SUMENEP', '2009-03-28', 'BANASEREP TIMUR', 'PANGGULAN', 'LENTENG', 'SUMENEP', 'JAWA TIMUR', 11, 0, 'IDRIS SHALEH', 'PETANI', 'HAMIYAH', '', '085933677137', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (39, 2022, '05', '', '202205005', 'ABDUL MALIK FR', '2022-05-18', 'JEMBER', '2008-08-28', 'BULANGAN', 'LENGKONG', 'MUMBULSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'FATHUR RAHMAN', 'GURU', 'ISNAWATI HARHAP', '', '085105414447', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (40, 2020, '07', '', '202007003', 'AHMAT AFFREIL KUNCORO', '2020-07-09', 'JEMBER ', '2007-06-26', 'JUMBATAN', 'DARUNGAN', 'TANGGUL', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SUDARSO', 'PEDAGANG', 'SUWINDA', '', '08', './assets/foto_santri/67548c170c93e.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (41, 2022, '07', '', '202207005', 'AHMAD ALDI BAHTIYARIL ANAM', '2022-07-06', 'JEMBER', '2006-05-03', 'KRAJAN', 'BORAN', 'TEMPUREJO', 'JEMBER', 'JAWA TIMUR', 11, 0, 'ILYAS ALFAROKI', 'WIRASWASTA', 'IFA KURNIAWATI', '', '081559628789', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (42, 2022, '07', '', '202207006', 'M ERFAN ALINATA AZIZI', '2022-07-17', 'JEMBER ', '2007-07-12', 'TISNOGAMBAR', 'JATISARI', 'BANGSALSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'AZIZ', 'PETANI', 'YANA', '', '082337527509', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (43, 2020, '07', '', '202007004', 'AHMAD MAULANA ARMADANI', '2020-07-06', 'Jember', '2006-09-28', 'SUMBER DANDANG', 'KEBONSARI', 'SUMBERSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'HARIYANTO', 'WIRASWASTA', 'SULIYAH', '', '08', './assets/foto_santri/67548b2aab5ab.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (44, 2020, '08', '', '202008005', 'ROYYAN BADARUZZAMAN', '2020-08-05', 'MALANG', '2008-01-29', 'ORO ORO OMBO', 'ORO ORO OMBO', 'BATU', 'MALANG', 'JAWA TIMUR', 11, 0, 'ACHMAD FAIZ ABRORI', 'GURU', 'MULYANI', '', '087859130003', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (45, 2022, '06', '', '202206007', 'MUHAMMAD FERDIANSYAH', '2022-06-29', 'JEMBER ', '2005-12-31', 'KRAJAN', 'BORAN KRAJAN', 'TEMPUREJO', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SYAIFUL ANAM', 'WIRASWASTA', 'HALIMMATUS SA\'DIYAH', '', '085235599469', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (46, 2023, '06', '', '202306003', 'MARCELLINO ABILLAS EKA SAPUTRA', '2023-06-30', 'LUMAJANG', '2008-03-15', 'KEDUNG PAKIS', 'GAPLEK', 'PASIRIAN', 'LUMAJANG', 'JAWA TIMUR', 11, 0, 'JAINUL ARIFIN', 'WIRASWASTA', 'HARTANTI AGUSTINI', '', '08', './assets/foto_santri/6754936463769.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (47, 2020, '07', '', '202007006', 'MUHAMMAD AFANDY', '2020-07-15', 'JEMBER', '2007-10-14', 'KRAJAN', 'KLOMPANGAN', 'AJUNG', 'JEMBER', 'JAWA TIMUR', 11, 0, 'GUFRON', 'ARSITEK', 'SUPIYANI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (48, 2019, '06', '', '201906001', 'TEGAR SATRIYO WIBOWO', '2019-06-24', 'JEMBER ', '2007-06-23', 'KRAJAN', 'GADINGREJO', 'UMBULSARI', 'JEMBER', 'JAWA TIMUR', 12, 0, 'WAHYUDI', 'PETANI', 'YETI', '', '0852256755613', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (49, 2020, '08', '', '202008006', 'ROFIQ AGUSTINO', '2020-08-03', 'BONDOWOSO', '2008-08-23', 'TEGAL AMPEL', 'CERMEH', 'CERMEH', 'BONDOWOSO', 'JAWA TIMUR', 11, 0, 'SADNADIYANTO', 'PENGUSAHA', 'NUR HAYATI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (50, 2022, '07', '', '202207007', 'MUHAMMAD AINUL YAQIN IRWANSYAH', '2022-07-13', 'JEMBER', '2007-07-03', 'KRAJAN', 'KIDUL PASAR', 'RAMBIPUJI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'ZAINAL ABIDIN', 'WIRASWASTA', 'ZAHROTUL', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (51, 2021, '07', '', '202107001', 'MUHAMMAD DAE BAHTIAR', '2021-07-10', 'JEMBER ', '2008-06-28', 'PEREBBALAN', 'KARANGHARJO', 'SILO', 'JEMBER', 'JAWA TIMUR', 11, 0, 'HOLILI', 'PETANI', 'AISYAH', '', '08523408284', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (52, 2021, '06', '', '202106002', 'MUHAMMAD ASROFI ANWAR', '2021-06-13', 'JEMBER', '2009-08-12', 'KRAJAN', 'UMBULSARI ', 'UMBULSARI', 'JEMBER', 'JAWA TIMUR', 12, 0, 'SAMSUL ARIFIN', 'WIRASUWASTA', 'NANI MASRUROH', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (53, 2021, '07', '', '202107002', 'FITRUL MUTTAQIN BILLAH', '2021-07-28', 'JEMBER ', '2008-07-12', 'LANGSATAN', 'SUKAMAKMUR AJUNG JEM', 'AJUNG', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MUKHLIS', 'PETANI', 'WIWIK', '', '082', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (54, 2020, '06', '', '202006007', 'ABRILLIAN ALFARIZI', '2020-06-03', 'JEMBER', '2008-07-26', 'BALUNG LOR', 'BALUNG LOR', 'BALUNG', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MUARIF', 'WIRASWASTA', 'SUMAIYAH', '', '082337173299', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (55, 2021, '07', '', '202107003', 'JANUAR ILHAM RIDHO', '2021-07-28', 'KUPANG', '2009-01-25', 'KUPANG', 'KUPANG', 'KELAPA LIMA', 'KUPANG', 'NUSA TENGGARA TIMUR', 12, 0, 'MIYOKO', 'WIRAUSAHA', 'YANTER', '', '08', './assets/foto_santri/67548d3b15836.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (56, 2024, '07', '', '202407003', 'AGAMULLAH ADY SISTIAN', '2024-07-01', 'JEMBER', '2009-08-27', 'KARANG SONO', 'GRENDEN', 'PUGER', 'JEMBER', 'JAWA TIMUR', 11, 0, 'DODIK ARISTYA', 'WIRASWASTA', 'AYUK SETIANINGSIH', '', '085829127172', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (57, 2023, '07', '', '202307003', 'MUHAMMAD DAVID', '2023-07-11', 'JEMBER ', '2008-08-03', 'MINCEK', 'KEMIRI', 'PANTI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MUHTAR', 'WIRASUASTA', 'FATIMAH', '', '085808741737', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (58, 2022, '08', '', '202208008', 'DAVID', '2022-08-05', 'JEMBER', '2006-08-19', 'KAMAL', 'GUMITIR', 'ARJASA', 'JEMBER', 'JAWA TIMUR', 11, 0, 'HARI', 'PETANI', 'LIN', '', '085', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (59, 2021, '06', '', '202106004', 'SUHERMAN', '2021-06-16', 'JEMBER', '2008-08-29', 'KRAJAN', 'TAMANSARI', 'MUMBULSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'NIRIN', 'WIRASWSATA', 'FATIMAH', '', '08', './assets/foto_santri/67548bf5d7723.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (60, 2023, '08', '', '202308003', 'FATHONI', '2023-08-08', 'SUMENEP', '2008-10-21', 'ARES', 'BANARESEP TIMUR', 'LENTENG', 'SUMENEP', 'JAWA TIMUR', 11, 0, 'ARIP', 'PETANI', 'SAHMI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (61, 2021, '07', '', '202107004', 'KEVIN GUNAWAN WIBISONO', '2021-07-11', 'JEMBER ', '2008-05-22', 'KRASAK', 'PANCAKARYA', 'AJUNG', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MOHAMMAD HOLIK', 'WIRASWASTA', 'IFA ILMIAH', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (62, 2019, '07', '', '201907002', 'REZA HARIYANTO', '2019-07-13', 'JEMBER', '2006-02-08', 'CURAH LEMBU', 'PLALANGAN', 'KALISAT', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MAHMUDI', 'WIRASWASTA', 'SAFIYATUR ROHMAH', '', '082273787651', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (63, 2021, '06', '', '202106005', 'MUHAMMAD YUSFI HABIBI', '2021-06-15', 'JEMBER', '2009-11-10', 'KRAJAN', 'PAKUSARI', 'PAKUSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SUDARMUJI', 'WIRASWASTA', 'SITI KHOLILAH', '', '085335679147', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (64, 2023, '08', '', '202308003', 'MOHAMAD ROSI', '2023-08-09', 'BANYUWANGI', '2007-06-06', 'TAMANBARU', 'TAMANBARU', 'BANYUWANGI', 'BANYUWANGI', 'JAWA TIMUR', 11, 0, 'ABDUL SALAM', 'BURUH', 'NURHAYATI', '', '083857097580', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (65, 2020, '06', '', '202006007', 'FIRMANDA MAULANA', '2020-06-28', 'LUMAJANG', '2008-06-08', 'KRAJAN', 'URANGGANTUNG ', 'SUKODONO', 'LUMAJANG', 'Jawa timur', 11, 0, 'NUR HASAN', 'PETANI', 'NUR KHOLIFA', '', '08', './assets/foto_santri/67548d89ceaf0.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (66, 2024, '06', '', '202406003', 'VIRDAN AHMAD ALFARABY', '2024-06-19', 'JEMBER', '2009-01-23', 'SUKOSARI', 'JATISARI', 'JENGGAWAH', 'JEMBER', 'JAWA TIMUR', 11, 0, 'EKO BUDI PRASETYO', 'PETANI', 'AFKARINA', '', '081230181346', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (67, 2019, '07', '', '201907003', 'MUHAMMMAD MAULANA ROSYID', '2019-07-13', 'JEMBER ', '2007-05-14', 'SALAKAN', 'SEMBORO LOR', 'SEMBORO', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MOCH MUALLIMIN', 'GURU', 'SUNAINI', '', '085259220402', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (68, 2024, '07', '', '202407003', 'BAHRUL AMINUL AMIN', '2024-07-20', 'JEMBER', '2008-11-11', 'KRAJAN', 'SELATENG', 'LEDOKOMBO', 'JEMBER', 'JAWA TIMUR', 11, 0, 'ABU BAKAR', 'PETANI', 'MISYANI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (69, 2019, '06', '', '201906004', 'MUHAMMAD ABDUL ROHIM', '2019-06-30', 'LUMAJANG', '2006-06-11', 'KEDUNG PAKIS', 'KEDUNG PAKIS', 'PASIRIAN', 'LUMAJANG', 'JAWA TIMUR', 11, 0, 'SUKARJO', 'Wiraswasta ', 'MUJIATI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (70, 2024, '07', '', '202407003', 'SEPTIYAWAN', '2024-07-12', 'BANYUWANGI', '2008-09-22', 'PADANG', 'RAMPAN', 'SINGOJURUH', 'BANYUWANGI', 'JAWA TIMUR', 11, 0, 'ROMDANI', 'PETANI', 'SUNARSIH', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (71, 2023, '07', '', '202307003', 'RAFEL JIHAN FAHMI', '2023-07-04', 'JEMBER', '2007-10-19', 'JALINAN', 'HARJOMULYO', 'SILO', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MUDASIR', 'WIRASWASTA ', 'ST KHALIFAH', '', '081228358584', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (72, 2024, '06', '', '202406003', 'MUHAMMAD IRFAN ALBI ANSYAH', '2024-06-10', 'JEMBER', '2008-10-19', 'KRAJAN', 'SADENGAN BARAT', 'SUMBERBARU', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SUYONO', 'PEDAGANG', 'ANIS HANDAYANI', '', '085230815560', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (73, 2024, '07', '', '202407003', 'MUHAMMAD IKBAL FAWAZI', '2024-07-26', 'Jember', '2008-08-22', 'Sukosari', 'Jatisari', 'Jenggawah', 'Jember', 'Jawa timur', 11, 0, 'NURHOLIS', 'Wirauswasta', 'SULEHATIN', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (74, 2020, '07', '', '202007007', 'FERDIKA PURNAMA DZIKKRILLAH', '2020-07-20', 'TANJUNG PANDAN', '2006-12-05', 'KOTA', 'KOTA', 'TANJUNG PANDAN ', 'BANGKA BELITUNG', 'BANGKA BELITUNG', 11, 0, 'FAKHRUL HIDAYAH', 'PEDAGANG', 'SITI NUR HASANAH', '', '08', './assets/foto_santri/6754971bc0aaf.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (75, 2018, '06', '', '201806001', 'DIMAS ANANDA PUTRA', '2018-06-07', 'JELBUK,JEMBER ', '2006-09-08', 'SUKOWIRYO', 'SUDUNG TIMUR', 'JELBUK', 'JEMBER', 'JAWA TIMUR', 15, 0, 'MOCH SHOLIHIN', 'TANI', 'SAKTIMA', '', '08220890614', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (78, 2022, '07', '', '202207009', 'ROBY ZASKY R', '2022-07-24', 'JEMBER ', '2006-09-23', 'PRAPEN', 'SUMBER KEJAYAN', 'MAYANG', 'JEMBER', 'JAWA TIMUR', 11, 0, 'ZAINI', 'PETANI', 'INADIRO', '', '085103707259', './assets/foto_santri/67548e20b2acd.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (77, 2024, '07', '', '202407003', 'IRVAN RAMDHANI', '2024-07-19', 'JEMBER', '2009-09-09', 'GAMBIRONO', 'GAMBIRONO', 'BANGSALSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MUHAMMAD MALIK', 'WIRASWASTA', 'DEWI KUSDIAWATI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (79, 2020, '07', '', '202007007', 'MUHAMMAD RIFKI', '2020-07-18', 'JEMBER ', '2006-05-09', 'CURAH DAMI', 'BOTANI', 'SUKORAMBI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'MUSTOFA', 'PETANI', 'WATIK', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (80, 2016, '07', '', '201607001', 'MOHAMMAD NUR HAFIDZ', '2016-07-18', 'JEMBER ', '2003-05-05', 'KRAJAN KIDUL', 'YOSORATI', 'SUMBERBARU', 'JEMBER', 'JAWA TIMUR', 16, 0, 'MOHAMMAD SYAHRI', 'BANGUNAN', 'SITI ROMLA', '', '085730834435', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (81, 2023, '07', '', '202307003', 'AHMAD BAIHAKI', '2023-07-10', 'BONDOWOSO', '2010-06-20', 'KRAJAN', 'TAPEN', 'TAPEN', 'BONDOWOSO', 'JAWA TIMUR', 9, 0, 'SU\'IB', 'PEDAGANG', 'SASMIYATI', '', '085232370912', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (82, 2022, '07', '', '202207009', 'M ABDURRAHMAN WAHID', '2022-07-12', 'JEMBER', '2010-01-02', 'KRAJAN A', 'CURAH KALONG', 'BANGSALSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'IMAM NAWAWI', 'PEDAGANG', 'NINING AMALIA', '', '085322619294', './assets/foto_santri/67548e2ae34bc.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (83, 2024, '06', '', '202406003', 'AHMAD AGIL NUH ALAMSYAH', '2024-06-05', 'JEMBER', '2011-08-10', 'SUMUR', 'AJUNG', 'AJUNG', 'JEMBER', 'JAWA TIMUR', 9, 0, 'SYAHRONI', 'PETANI', 'HILYATUL MILLAH', '', '081249723185', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (84, 2022, '06', '', '202206009', 'M.AIKON HASAN BILBAL', '2022-06-29', 'JEMBER', '2009-11-22', 'KEBON INDAH', 'TEGAL BESAR', 'SUMBERSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'NUR HAMIDI', 'PNS', 'YULIANA', '', '085105136822', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (85, 2023, '07', '', '202307003', 'DHOMIRUL ASHID AFFANDY', '2023-07-02', 'JEMBER', '2010-03-01', 'KRAJAN', 'SEMPOLAN', 'SILO', 'JEMBER', 'JAWA TIMUR', 9, 0, 'MAWARDI', 'PEDAGANG', 'YUSNIYAR', '', '081286899789', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (86, 2024, '07', '', '202407003', 'DIAS FERDIANSYAH', '2024-07-16', 'SUMENEP', '2012-05-16', 'PARSE', 'KOLO-KOLO', 'ARJASA', 'SUMENEP', 'JAWA TIMUR', 9, 0, 'MATRAPI', 'WIRASWASTA', 'SUMHARIRAH', '', '085924539324', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (87, 2024, '06', '', '202406003', 'AULIA KUKUH ANUGERAH', '2024-06-29', 'BANYUWANGI', '2011-04-30', 'KLONTANG', 'GENDOH', 'SEMPU', 'BANYUWANGI', 'JAWA TIMUR', 9, 0, 'SELAMET', 'PEDAGANG', 'PRAMUDINING RAHAYU', '', '081339211922', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (88, 2024, '02', '', '202402003', 'ALI WAFA BARANI AZHAR', '2024-02-23', 'JEMBER', '2011-11-26', 'JLN MERPATI NO 76', 'CANGKRING', 'PATRANG', 'JEMBER', 'JAWA TIMUR', 9, 0, 'AMSORI', 'HONORER', 'ULFATURROHMAH', '', '085234853951', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (89, 2021, '06', '', '202106005', 'MUHAMMAD ROFIQ ', '2021-06-29', 'JEMBER', '2009-02-04', 'JERENG TIMUR', 'GUGUT', 'RAMBIPUJI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'ABU SALI', 'WIRASWASTA', 'FATMAWATI', '', '082332912878', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (90, 2022, '06', '', '202206009', 'AHMED BASTIAN Q.A', '2022-06-29', 'JEMBER', '2010-08-25', 'TEGALAN', 'LANGKAP', 'BANGSALSARI', 'JEMBER', 'JAWA TIMUR', 14, 0, 'ADNAN FARUQ', 'PNS', 'QUROTUL A\'YUNI', '', '083114179017', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (91, 2024, '06', '', '202406003', 'ACHMAD IQBAL FAIZI', '2024-06-13', 'JEMBER', '2011-03-27', 'SUMBER KETANGI', 'WIROLEGI', 'SUMBERSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'EDI NAWAWI ', 'PETANI', 'IKA ZAMILATUL JANAH', '', '082264517459', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (92, 2021, '07', '', '202107005', 'RAYHAN GALIH NUGRAHA', '2021-07-12', 'JEMBER', '2009-03-06', 'TEGALWANGI', 'CURAH KUTUK', 'UMBULSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'SUTOMO', 'GURU', 'ISTIANA', '', '085232604334', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (93, 2021, '07', '', '202107006', 'DANIL PUTRA PRATAMA', '2021-07-04', 'SITUBONDO', '2008-12-19', 'MONCEL', 'JUGLANGAN', 'PANJI', 'SITUBONDO', 'JAWA TIMUR', 9, 0, 'DANANG INDRA SATRIYO', 'PEDAGANG', 'HALIMATUS SA\'DIYAH', '', '085604122134', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (94, 2024, '06', '', '202406003', 'WIDAD ALI MURTADHO', '2024-06-17', 'JEMBER', '2000-04-04', 'DARUNGAN', 'PANTI', 'PANTI', 'JEMBER', 'JAWA TIMUR', 12, 0, 'FARID', 'WIRASWASTA', 'MUTI\'AH', '', '081249441432', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (95, 2019, '05', '', '201905004', 'ALI ZAINUR RIDHO', '2019-05-06', 'JEMBER', '2006-06-06', 'KRAJAN', 'MOJOSARI', 'PUGER', 'JEMBER', 'JAWA TIMUR', 17, 0, 'SARUSO', 'NELAYAN', 'HAYATI', '', '082322085303', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (96, 2019, '06', '', '201906004', 'YAHYA SULTONI', '2019-06-19', 'JEMBER', '2006-11-19', 'SULING', 'BAGON', 'PUGER', 'JEMBER', 'JAWA TIMUR', 9, 0, 'SULIS', 'PETANI', 'MUZAIROH', '', '085935182301', './assets/foto_santri/67548f9a0d123.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (97, 2019, '06', '', '201906004', 'SYAIFULLAH YUSUF FACHRUDI', '2019-06-26', 'BONDOWOSO', '2007-03-05', 'KAMPUNG HAJI', 'BATAAN', 'TENGGARANG', 'BONDOWOSO', 'JAWA TIMUR', 10, 0, 'RUDI SUMINTO', 'WIRASWASTA', 'TRUFINIA', '', '085719485988', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (98, 2019, '07', '', '201907004', 'AHMAD FACHRI AL HUSENI', '2019-07-05', 'MAKASAR', '2007-02-26', 'KEPUH WETAN', 'KALIREJO', 'KABAT', 'BANYUWANGI', 'JAWA TIMUR', 10, 0, 'MURTONO', 'BURUH', 'SULAM ISTI', '', '081332034067', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (99, 2019, '07', '', '201907005', 'MOCH FAJRI HIDAYATULLOH', '2019-07-10', 'JEMBER', '2006-12-02', 'KLAYU', 'TEGAL WARU', 'MAYANG', 'JEMBER', 'JAWA TIMUR', 17, 0, 'USMAN', 'BANGUNAN', 'HALIMATUS SA\'DIYAH', '', '085100799235', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (100, 2022, '07', '', '202207009', 'IDHAM AKROMUL IBAD', '2022-07-01', 'KALIBARU WETAN', '2007-02-07', 'KRAJAN', 'KALIBARU WETAN', 'KALIBARU', 'BANYUWANGI', 'JAWA TIMUR', 10, 0, 'ABDUL HADI', 'WIRASWASTA ', 'PURYANI', '', '083140683713', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (101, 2020, '06', '', '202006007', 'M.WAHYU.BAGUS', '2020-06-08', 'AMBULU JEMBER', '2007-06-04', 'KRAJAN KARANGANYAR', 'KARANGANYAR', 'AMBULU', 'JEMBER', 'JAWATIMUR', 10, 0, 'RIDWAN', 'SOPER', 'siti maysaroh', '', '081232286757', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (105, 2020, '07', '', '202007007', 'MUHAMMAD FARIZ AL MAGHDISH', '2020-07-03', 'JEMBER', '2008-10-22', 'MANDIGU', 'SUCO', 'MUMBUL SARI', 'JEMBER', 'JAWA TIMUR', 10, 0, 'ROSIDI', 'WIRASWASTA', 'ELISETIAWATI', '', '081249737301', './assets/foto_santri/675ed27edd78e.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (103, 2019, '06', '', '201906006', 'MUHAMMAD SYAHIDZUL ANWAR', '2019-06-02', 'BONDOWOSO', '2007-05-04', 'KLABANG AGUNG', 'KLABANG AGUNG', 'TEGAL AMPEL', 'BONDOWOSO', 'JAWA TIMUR', 10, 0, 'M WAHYUDI MUZAMIL', 'WIRASWASTA', 'HALIMATUS SA\'DIYAH', '', '085737417620', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (104, 2019, '07', '', '201907006', 'MOH ALIF DESSTA', '2019-07-03', 'PAPUA', '2006-12-06', 'KAPURAN', 'KAPURAN', 'WONOSARI', 'BONDOWOSO ', 'JAWA TIMUR', 10, 0, 'SAMHADI', 'PNS', 'SITI AMIATUN', '', '081316380670', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (106, 2020, '06', '', '202006007', 'MOCH AIZUL RIDHO', '2020-06-10', 'JEMBER', '2007-08-02', 'Kauman', 'Tempurejo', 'Tempurejo', 'Jember', 'Jawa timur', 10, 0, 'Wasik', 'Wiraswasta', 'Ervia', '', '085236353963', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (107, 2023, '05', '', '202305003', 'M NIRWAN DARMAWAN', '2023-05-10', 'JEMBER', '2007-02-09', 'KRAJAN', 'MOJOSARI', 'PUGER', 'JEEMBER', 'JAWA TIMUR', 10, 0, 'M HALILA', 'WIRASWASTA ', 'NANIK', '', '083182687333', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (108, 2020, '07', '', '202007007', 'AHMAD AFRIYANSYAH', '2020-07-03', 'KOTABUMI', '2008-04-01', 'MARGO MULYO', 'ABUNG JAYO', 'ABUNG SELATAN', 'LAMPUNG UTARA', 'LAMPUNG', 10, 0, 'NGATIMIN', 'WIRASWASTA', 'SATINI', '', '082281050634', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (109, 2022, '06', '', '202206009', 'MUHAMMAD IHSANI', '2022-06-15', 'BONDOWOSO', '2009-05-17', 'BLAWAN', 'BLAWAN', 'IJEN', 'BONDOWOSO', 'JAWA TIMUR', 17, 0, 'ROHIM', 'PNS', 'SUNARTIK', '', '082332916277', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (110, 2022, '07', '', '202207009', 'AZMAN NABIL', '2022-07-01', 'BANYUWANGI ', '2007-06-26', 'KRAJAN', 'JELUN', 'LICIN', 'BANYUWANGI', 'JAWA TIMUR', 10, 0, 'NANANG KHOSIM', 'PNS', 'JUMROTUL FAWAIDA', '', '085257794353', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (111, 2020, '07', '', '202007007', 'REZA ADITYA WARDANA', '2020-07-03', 'JEMBER ', '2007-07-21', 'SUMBER JATI', 'SUMBER JATI', 'SILO', 'JEMBER', 'JAWA TIMUR', 10, 0, 'HENDRA', 'WIRASWASTA', 'ESTA DWI BUDIARSIH', '', '082276538756', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (112, 2020, '01', '', '202001007', 'SALMAN ALFARISI', '2020-01-01', 'JEMBER', '2010-02-05', 'SILO', 'SUMBERLANAS BARAT', 'SILO', 'JEMBER', 'JAWA TIMUR', 9, 0, 'SUBAIDI', 'SUPIR', 'MU\'ISAH', '', '082141162668', './assets/foto_santri/67549283492ce.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (113, 2020, '06', '', '202006007', 'SALMAN ALFARISY', '2020-06-05', 'BONDOWOSO ', '2007-10-17', 'KRAJAN ATAS', 'SUGER LOR', 'MAESAN', 'BONDOWOSO ', 'JAWA TIMUR', 10, 0, 'FATHOR ROHMAN', 'WIRASWASTA ', 'SUSTIN FADILA', '', '085233757925', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (114, 2022, '06', '', '202206009', 'MUHAMMAD FIKRI', '2022-06-15', 'JEMBER', '2007-01-24', 'DUKLENGKONG', 'SUMBER WRINGIN', 'SUKOWONO', 'JEMBER', 'JAWA TIMUR', 10, 0, 'YUSUF', 'PETANI', 'MARBUA', '', '083166235510', './assets/foto_santri/6754916489be1.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (115, 2022, '07', '', '202207009', 'FATHORROHMAN', '2022-07-13', 'SAMPANG', '2006-06-19', 'KRAJAN', 'TANGGUL KULON', 'TANGGUL', 'JEMBER', 'JAWA TIMUR', 10, 0, 'ABDUL MANAF', 'PEDAGANG', 'NOER FIAYATIN', '', '0882257436587', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (124, 2024, '06', '', '202406003', 'AFTONIL HAKIM', '2024-06-27', 'JEMBER ', '2009-06-23', 'SUKMOILANG', 'PACE', 'SILO', 'JEMBER', 'JAWA TIMUR', 10, 0, 'SAMA\'ON', 'PETANI', 'SIYATI', '', '085233804014', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (117, 2021, '06', '', '202106007', 'AHMAD RENDRA ARIFIN', '2021-06-02', 'JEMBER', '2008-09-09', 'GARAHAN', 'GARAHAN', 'SILO', 'JEMBER', 'JAWA TIMUR', 10, 0, 'ZAINUL ARIFIN', 'WIRASWASTA ', 'TUTUK PURWATI NOVITASARI', '', '0', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (118, 2021, '06', '', '202106007', 'ADITYA RAHMA DANI', '2021-06-27', 'JEMBER ', '2008-12-31', 'KRAJAN BARAT', 'TEGAL GEDE', 'SUMBER SARI', 'JEMBER', 'JAWA TIMUR', 10, 0, 'MUSLEHHUDIN SAIFUL BAHRI', 'WIRASWASTA', 'ENI ERVIANA ', '', '082331571966', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (119, 2019, '06', '', '201906007', 'MUHAMMAD IPNU FADIL', '2019-06-12', 'JEMBER', '2006-10-14', 'KRAJAN', 'ARJASA', 'ARJASA', 'JEMBER', 'JAWA TIMUR', 17, 0, 'ABDUL HAMID', 'PEDAGANG', 'NINGSIH', '', '085888553674', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (120, 2024, '06', '', '202406003', 'FAIRUZ ADITYA AHMAD HARYONO', '2024-06-30', 'JEMBER', '2008-07-06', 'GADUNGAN ', 'KLATAKAN', 'TANGGUL', 'JEMBER', 'JAWA TIMUR', 10, 0, 'HARYONO ', 'PEMDES', 'UYUN NUR ROHMAH', '', '081333795554', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (121, 2024, '07', '', '202407003', 'IBNU KHAIRIL FATTAH', '2024-07-02', 'JEMBER ', '2009-09-27', 'SUMBER LANAS BARAT', 'HARJOMULYO', 'SILO', 'JEMBER', 'JAWA TIMUR', 10, 0, 'SUKRIYONO', 'WIRASWASTA', 'RUSTININGSIH', '', '085334607971', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (122, 2023, '07', '', '202307003', 'AFIF FIRDAUS', '2023-07-02', 'INDRAMAYU', '2008-06-12', 'ADAN ADAN', 'TAMBI', 'SLIYEG', 'INDRAMAYU', 'JAWA BARAT', 10, 0, 'SYAMSUDIN', 'SUPIR', 'NINICARINI', '', '0', './assets/foto_santri/675492b18bad2.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (123, 2023, '07', '', '202307003', 'MUHAMMAD MAHFILUL ALBAB', '2023-07-02', 'BONDOWOSO ', '2007-09-20', 'KRAJAN ATAS', 'SUGER LOR', 'MAESAN', 'BONDOWOSO ', 'JAWA TIMUR', 10, 0, 'MOHAMMAD KHOIRUL ANAM', 'GURU', 'FARIDATUN HASANAH', '', '085258898400', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (125, 2021, '06', '', '202106007', 'MOCH RIO SEPTIAWAN', '2021-06-09', 'JEMBER', '2008-05-23', 'KLAYU', 'TEGALWARU', 'MAYANG', 'JEMBER', 'JAWA TIMUR', 10, 0, 'NAWAR RIYASTHA', 'PEDAGANG', 'MAISAROH', '', '085101694080', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (126, 2022, '06', '', '202206009', 'M HIMYAR HIZBULLAH', '2022-06-23', 'JEMBER', '2007-07-27', 'PATEMON', 'PATEMON', 'TANGGUL WETAN', 'JEMBER', 'JAWA TIMUR', 10, 0, 'HARYADI', 'WIRASWASTA ', 'HUSNUL KHOTIMAH', '', '081233274021', './assets/foto_santri/675492c1b7465.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (127, 2021, '06', '', '202106007', 'MUHAMMAD IRCHAMUL HUDA', '2021-06-30', 'MANOKWARI', '2008-05-13', 'AIMASI', 'PRAFI', 'PRAFI', 'MANOKWARI', 'PAPUA BARAT', 17, 0, 'MUSYARIFUL ANFI', 'WIRASWASTA', 'MISTIAH', '', '0822641805077', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (128, 2021, '06', '', '202106007', 'ARYA JAYA GEMAYEL PUTRA', '2021-06-25', 'MAGETAN', '2008-09-09', 'JIMBARAN', 'JIMBARAN', 'KUTA SELATAN', 'BALI', 'BALI', 10, 0, 'ZAINUL KARIM', 'WIRASWASTA', 'SRI HANDAYANI', '', '081239156445', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (129, 2022, '07', '', '202207009', 'M KHANAFI ALDI PRASETYO', '2022-07-13', 'PURBALINGGA', '2005-07-19', 'PAGEDONGAN TENGAH', 'PAGEDONGAN', 'PAGEDONGAN', 'BANJARNEGARA', 'JAWA TENGAH', 10, 0, 'EDI PURWANTO', 'PENGUSAHA', 'CHABIBAH', '', '081991582992', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (130, 2021, '07', '', '202107007', 'MOH ROFIQI', '2021-07-07', 'BANYUWANGI', '2006-04-14', 'KRAJAN', 'TEGALHARJO', 'GLENMORE', 'BANYUWANGI', 'JAWA TIMUR', 15, 0, 'HERYANTO', 'WIRASWASTA', 'RAUDA', '', '085236898800', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (131, 2018, '10', '', '201810002', 'MUHAMMAD NASICH FATAHILLAH', '2018-10-28', 'PROBOLINGGO', '2003-03-18', 'SUMBERKDAWUNG', 'SUMBERKEDAWUNG', 'LECES', 'PROBOLINGGO', 'JAWA TIMUR', 16, 0, 'AKHMAD KHOIRON', 'WIRASWASTA', 'ROHANI', '', '085784084090', './assets/foto_santri/675492cd5b84a.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (132, 2018, '10', '', '201810003', 'ARDHO YUWONO WISNUGATI', '2018-10-13', 'LUMAJANG', '1999-07-26', 'GLADAK SERANG', 'BANYUPUTIH LOR', 'RANDUAGUNG', 'LUMAJANG', 'JAWA TIMUR', 16, 0, 'TIMBUL HARIYANTO', 'PENSIUNAN', 'MULYATI SITI FATIMAH', '', '087886102960', './assets/foto_santri/201810003_WhatsApp_Image_2024-09-03_at_13_29_401.jpeg', 'AKTIF');
INSERT INTO `data_santri` VALUES (133, 2020, '06', '', '202006007', 'M HAMDANI IBRAHIM', '2020-06-12', 'JEMBER', '2007-12-12', 'MANGARAN ', 'LONCATAN', 'AJUNG', 'JEMBER', 'JAWA TIMUR', 11, 0, 'ALI RAHMATULLAH', 'WIRASWASTA', 'ENDANGSOFILIANTI', '', '085235529113', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (134, 2022, '06', '', '202206009', 'M FAIDUL AKBAR', '2022-06-22', 'JEMBER', '2010-05-29', 'SUMBER SALAK', 'SUMBERSALAK', 'LEDOKOMBO', 'JEMBER', 'JAWA TIMUR', 9, 0, 'M MAWARDI', 'PEDAGANG', 'AMALIA', '', '081391760456', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (135, 2022, '06', '', '202206009', 'HASBI ASSIDIQI', '2022-06-30', 'JEMBER', '2009-09-26', 'KRAJAN', 'WONOSARI', 'PUGER', 'JEMBER', 'JAWA TIMUR', 14, 0, 'SAMSUL ARIFIN', 'PETANI', 'SITI NUR HOLIFA', '', '081', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (136, 2019, '06', '', '201906007', 'MOHAMMAD HIDAYATULLAH', '2019-06-24', 'KALIMANTAN', '2010-03-26', 'SANGKOH ESTATE', 'SANGKOH ESTATE', 'SUNGAI DURIAN', 'KOTABARU', 'KALIMANTAN SELATAN', 9, 0, 'BUDI NAHTO', 'PETANI', 'NAWATI', '', '082352534320', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (137, 2022, '06', '', '202206009', 'ABDI CHAMRIE BILAWAL', '2022-06-13', 'TANGERANG', '2008-04-01', 'SARAKHAN', 'PISANGAN JAYA', 'SEPATAN', 'TENGERANG', 'BANTEN', 10, 0, 'ABDULLAH', 'PNS', 'WIWIK TAUFIQOH', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (138, 2023, '06', '', '202306003', 'ANDRE LORENZO', '2023-06-11', 'SURABAYA', '2007-01-05', 'BERINGKAH', 'BERINGKAH', 'MENGANTI', 'GRESIK', 'JAWA TIMUR', 10, 0, 'GIDEON BERNAD', 'WIRASWASTA', 'NUR FAIDAH', '', '081216668294', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (139, 2023, '07', '', '202307003', 'ATHALA RIFQI ADAM', '2023-07-01', 'JEMBER', '2009-02-25', 'PASAR ALAS', 'GARAHAN', 'SILO', 'JEMBER', 'JATIM', 12, 0, 'PURDIANTO', 'WIRASUASTA', 'EVA SOFIYANTI', '', '082', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (140, 2024, '06', '', '202406003', 'BAGAS YOVI ROMADHONI', '2024-06-26', 'JEMBER', '2009-09-16', 'CURAH LAOS', 'LAMPEJI', 'MUMBULSARI', 'JEMBER', 'JAWA TIMUR', 10, 0, 'DIDIK MULAYDI', 'SUPIR', 'RIKA RAHAYU', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (141, 2023, '06', '', '202306003', 'ANANDA NUR MAULANA', '2023-06-19', 'BANYUWANGI', '2007-06-05', 'GEPURO', 'WATUKEBO', 'BLIMBING SARI', 'BANYUWANGI', 'JATIM', 11, 0, 'MAHSUN RIEFAAN', 'WIRASUASTA', 'KUMALA', '', '082', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (142, 2019, '06', '', '201906007', 'MUHAMMAD FARISIL FIKRI', '2019-06-04', 'GROGOT', '2009-04-03', 'SANGKOH ESTATE', 'SANGKOH ESTATE', 'PAMUKAN UTAR', 'KOTA BARU', 'KALIMANTAN SELATAN', 9, 0, 'AGUS SUPRIYANTO', 'WIRASWASTA', 'JARWATI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (143, 2022, '06', '', '202206009', 'AHMAD SODIK', '2022-06-15', 'BONDOWOSO', '2009-02-27', 'SANGKOH ESTATE', 'SANGKOH ESTATE', 'PAMUKAN UTARA', 'KOTA BARU', 'KALIMANTAN SELATAN', 9, 0, 'JUNAEDI', 'WIRASWASTA', 'HAYATI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (144, 2023, '06', '', '202306003', 'MUHAMMAD FACHRI ASIDIKI', '2023-06-03', 'LUMAJANG', '2009-03-07', 'TEGAL BESAR ', 'TEGAL BESAR', 'KALIWATES', 'JEMBER', 'JATIM', 12, 0, 'MOH ROSI', 'WIRASUASTA', 'FITROHTUL MUNAWAROH', '', '082335723040', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (145, 2021, '06', '', '202106008', 'RENO RAMA SAPUTRA', '2021-06-16', 'JEMBER', '2009-04-15', 'KRAJAN UTARA', 'KERTONEGORO', 'JENGGAWAH', 'JEMBER', 'JAWA TIMUR', 12, 0, 'RAMA SUGIANTO', 'WIRASWASTA', 'SRI WAHYUNI', '', '085345478700', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (146, 2024, '07', '', '202407003', 'HAMIM ADISTYA NUR ROHIM', '2024-07-17', 'JEMBER', '2009-03-13', 'MULYOREJO', 'BABAN BARAT', 'SILO', 'JEMBER', 'JAWA TIMUR', 11, 0, 'JONO HARIYANTO', 'PETANI', 'MARHATI', '', '082332204211', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (147, 2021, '07', '', '202107008', 'MUHAMMAD HUSEIN FAKIH AL KHALWANI', '2021-07-06', 'JEMBER', '2008-10-09', 'KRAJAN KULON', 'UMBULSARI', 'UMBULSARI', 'JEMBER', 'JATIM', 14, 0, 'SYAKHUS ROHMAN', 'WIRASUASTA', 'ASFIYAH TRI ISMIYATI', '', '085234147171', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (148, 2024, '06', '', '202406003', 'MUHAMMAD ABU RIJAL', '2024-06-11', 'NGULING', '2009-04-12', 'REMBANG', 'WOTGALIH', 'NGULING', 'PASURUAN', 'JAWA TIMUR', 10, 0, 'SUWANDI', 'PETANI', 'SULIHA', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (149, 2020, '07', '', '202007007', 'TEGAR JULI WIJAKSONO', '2020-07-26', 'JEMBER ', '2007-07-26', 'GAYAM', 'RAMBI GUNDAM', 'RAMBI PUJI', 'JEMBER', 'JATIM', 10, 0, 'SUBIYANTORO', 'PEDAGANG', 'SUWARLIN', '', '085336499239', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (150, 2021, '02', '', '202102009', 'MUHAMMAD ADITYA', '2021-02-16', 'JEMBER', '2009-04-07', 'SUDUNG TIMUR', 'SUKOWIRYO', 'JELBUK', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SLAMET', 'PETANI', 'ISA KUSMINARTI', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (151, 2019, '07', '', '201907007', 'M.ARIL AINUR ROBIT', '2019-07-03', 'JEMBER', '2007-03-20', 'CURAH PINANG', 'TAMANSARI', 'MUMBULSARI', 'JEMBER', 'JAWA TIMUR', 10, 0, 'ASAD', 'PETANI', 'ILFIYATUL HASANAH', '', '085732325164', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (152, 2024, '01', '', '202401003', 'YAHYA ARIA MULIANA', '2024-01-21', 'JAKARTA', '2005-07-06', 'JLN LUMPANG', 'LUMPANG', 'KARANGANYAR', 'PURBALINGGA', 'JAWA TENGAH', 15, 0, 'SUSILO', 'PENGUSAHA', 'MUNIROH', '', '081390324278', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (179, 2019, '07', '', '201907011', 'MIFTAHUR RIZKI HIDAYATULLOH', '2019-07-11', 'JEMBER', '2007-07-09', 'KRAJAN', 'KLOMPANGAN', 'AJUNG', 'JEMBER', 'JAWA TIMUR', 17, 0, 'KUSDARIYANTO', 'PEDAGANG', 'MARIYATUL QIBTIYAH', '', '085104617420', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (154, 2021, '06', '', '202106009', 'AHMAD AULIA KAKA FIRANSYAH', '2021-06-23', 'LAMPUNG', '2008-07-11', 'BANJAR TEGES', 'BANJAR TEGES', 'GIANYAR', 'GIANYAR', 'BALI', 12, 0, 'AHMAD SAIDUN', 'WIRASWASTA', 'SRI ASTUTI', '', '081338333134', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (155, 2024, '07', '', '202407003', 'FANO ANDI JUNIO', '2024-07-01', 'JEMBER', '2009-06-21', 'CURAHNONGKO', 'CURAHNONGKO', 'TEMPUREJO', 'JEMBER', 'JAWA TIMUR', 11, 0, 'FARID', 'PETANI', 'APRILIA', '', '085718448700', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (156, 2019, '07', '', '201907009', 'NABIL PRATAMA', '2019-07-03', 'JEMBER', '2007-02-22', 'PAGUAN', 'PETUNG', 'BANGSALSARI', 'JEMBER', 'JAWA TIMUR', 10, 0, 'TOMIN', 'BURUH BANGUNAN', 'SUNARSIH', '', '081523684703', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (157, 2023, '07', '', '202307003', 'JOKO SETOYONO', '2023-07-20', 'SAMPIT', '2008-04-27', 'JLN CUT MUKTIYAH', 'SAWAHAN', 'MENTAWA  BARU KETAPA', 'SAMPIT', 'KALTENG', 10, 0, 'KATIYONO', 'PENGUSAHA', 'SAWATI', '', '081349006955', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (158, 2024, '08', '', '202408003', 'AHMAD FARHAN NURUL ULUM', '2024-08-09', 'GRESIK,', '2005-12-20', 'PETUNG', 'PETUNG', 'PANCENG', 'GRESIK', 'JAWA TIMUR', 15, 0, 'AHMAD FARHAN NURUL ULUM', 'GURU SWASTA', 'GURU SWASTA', '', '085785421797', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (159, 2024, '07', '', '202407004', 'IQBAL MAULANA', '2024-07-16', 'JEMBER', '2009-11-21', 'DARUNGAN', 'JATIROTO', 'SUMBERBARU', 'JEMBER', 'JAWA TIMUR', 11, 0, 'SAIFUL', 'WIRASWASTA', 'FIRDATUL KHOIRIYAH', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (160, 2023, '02', '', '002302001', 'TEGAR FEBRI HIDAYATUS SALAM', '0023-02-27', 'JEMBER', '2008-02-15', 'WONO ASRI', 'KRATON', 'TEMPUREJO', 'JEMBER', 'JAWA TIMUR', 10, 0, 'SLAMET', 'PETANI', 'JUMIATI', '', '082', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (161, 2023, '06', '', '202306003', 'FATHOR ROZI', '2023-06-14', 'SUMENEP', '2005-05-13', 'BUDDI', 'LAPA LAOK', 'DUNGKEK', 'SUMENEP', 'JAWA TIMUR', 15, 0, 'MOH HAMZAH', 'PETANI', 'MAS ADA', '', '081939051335', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (162, 2021, '07', '', '202107009', 'MUHAMMAD ZAINAL ABIDIN', '2021-07-30', 'JEMBER', '2008-08-26', 'KRAJAN TENGAH', 'BALUNG KULON', 'BALUNG', 'JEMBER', 'JAWA TIMUR', 12, 0, 'MISBAHUL HASAN', 'WIRASUASTA', 'KHOLIFAH', '', '082257526835', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (163, 2023, '07', '', '202307003', 'MUHAMMAD FAIRUZ YASHFI QOLBI', '2023-07-01', 'BONDOWOSO', '2008-04-10', 'SEKARPUTIH', 'TEGAL AMPEL', 'TEGAL AMPEL', 'BONDOWOSO', 'JAWA TIMUR', 12, 0, 'KHOIRIL ANWAR', 'PNS', 'KHUSNUL HAYATI', '', '082330429102', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (164, 2024, '06', '', '202406004', 'MUHAMMAD AFANDI CHOIRON', '2024-06-23', 'PASURUAN', '2009-08-17', 'KRAJAN', 'KMUNING SARI LOR', 'PANTI', 'JEMBER', 'JAWA TIMUR', 10, 0, 'ASMUNI', 'WIRASUASTA', 'SOLIKHAH', '', '085748924639', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (165, 2023, '06', '', '202306003', 'M RAVI RAMADHANI', '2023-06-07', 'SITUBONDO', '2010-09-04', 'BABATAN', 'BABATAN', 'SEMBORO', 'JEMBER', 'JAWA TIMUR', 9, 0, 'BUDI RAHARDI', 'PEDAGANG', 'ANA SOVIANA', '', '087857589725', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (166, 2021, '06', '', '202106010', 'AHMAD ALFAN ALMUZAMMIL', '2021-06-15', 'BONDOWOSO', '2008-07-15', 'GUNUNG SARI', 'GUNUNG SARI', 'MAESAN', 'BONDOWOSO', 'JAWA TIMUR', 10, 0, 'AHMAD RUDIANTO', 'PETANI', 'HASANAH', '', '082301707087', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (167, 2024, '08', '', '202408004', 'MUHAMMAD GHAZI MUBAROK', '2024-08-15', 'SUMENEP', '2005-09-09', 'PANGGULAN', 'BANARASEP TIMOR', 'LENTENG', 'SUMENEP', 'JAWA TIMUR', 15, 0, 'MUHAMMAD ANWAR', 'GURU', 'ROHANIYAH', '', '082', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (168, 2023, '06', '', '202306003', 'AHMAD NIDHOMIL FAHMI', '2023-06-23', 'BONDOWOSO', '2008-02-10', 'MASJID', 'KLABANG AGUNG', 'TEGAL AMPEL', 'BONDOWOSO', 'JAWA TIMUR', 10, 0, 'MUHAMAD', 'PETANI', 'SUPIANA', '', '085336059215', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (169, 2023, '07', '', '202307003', 'ALFIN NUR FIKI FAHRI', '2023-07-17', 'JEMBER', '0006-02-19', 'PRINGGOWIERAWAN', 'BATU URIP', 'SUMBERBARU', 'JEMBER', 'JAWA TIMUR', 11, 0, 'HERI SANTOSO', 'PEDAGANG', 'LATIFAH', '', '082317711269', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (170, 2024, '07', '', '202407005', 'RISKI FAJAR SHODIQ', '2024-07-25', 'JEMBER', '2011-03-28', 'JAMBISARI', 'JAMBISARI', 'MUMBULSARI', 'JEMBER', 'JAWA TIMUR', 9, 0, 'SHOLEH', 'PEDAGANG', 'SITI MUSTASIYAH', '', '08', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (171, 2022, '08', '', '202208009', 'WADUD ALI SABANA', '2022-08-09', 'JEMBER', '2006-12-28', 'DARUNGAN', 'PANTI', 'PANTI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'FARID', 'WIRASUASTA', 'MUTI\'AH', '', '085336533780', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (172, 2022, '06', '', '202206010', 'MUHAMMAD BIMA FIRMANSYAH', '2022-06-25', 'JEMBER', '2006-12-21', 'ROWO', 'PAKUSARI', 'PAKUSARI', 'JEMBER', 'JAWA TIMUR', 12, 0, 'MUHAMMAD FIRJON', 'WIRASWASTA', 'SITI CHOTIMAH', '', '085330804708', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (173, 2023, '07', '', '202307003', 'M.FAHRIL ILMAN HUDA', '2023-07-04', 'JEMBER', '2007-12-11', 'GAWOK', 'DUKUH DEMPOK', 'WULUHAN', 'JEMBER', 'JAWA TIMUR', 10, 0, 'SONI KHOLIQIN ROFIK', 'GURU', 'KASMIATUN', '', '082', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (174, 2022, '06', '', '202206010', 'PUTRA ARIZONA DANI ARTA', '2022-06-29', 'JEMBER', '2006-05-17', 'KRAJAN BARAT', 'ANTIROGO', 'SUMBERSARI', 'JEMBER', 'JAWA TIMUR', 11, 0, 'IMAM MUDIN', 'PENGUSAHA', 'SITI MAIMUNAH', '', '085707014463', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (175, 2019, '06', '', '201906010', 'MUHAMMAD FARHAN AHDANIL WAFI', '2019-06-05', 'JEMBER', '2006-09-04', 'KRAJAN KULON', 'TANJUNG REJO', 'WULUHAN', 'JEMBER', 'JAWA TIMUR', 12, 0, 'MUHAMAD TOHARI', 'PETANI', 'LILIS YULIANI', '', '08153567114', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (176, 2021, '12', '', '002112001', 'REZA VANDIKA JULIANDRA', '0021-12-05', 'JEMBER ', '2005-07-08', 'KRAJAN', 'LOJEJER', 'WULUHAN', 'JEMBER', 'JAWA TIMUR', 15, 0, 'ANDIK KURNIAWAN', 'WIRASUASTA', 'IVA SETYOWATI', '', '081358045988', './assets/foto_santri/675ced2c637f3.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (177, 2020, '07', '', '202007007', 'DAVIQ HIKMAL AKBAR', '2020-07-09', 'BONDOWOSO', '2007-07-09', 'JATIYAN', 'SUMBER ANYAR ', 'MAESAN', 'BONDOWOSO', 'JAWA TIMUR', 10, 0, 'UMARUL FARUQ', 'GURU', 'IMROKATUS SOLIKHAH', '', '085233678476', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (178, 2019, '07', '', '201907010', 'MUHAMMAD ZJAKY RAMADHANI', '2019-07-14', 'LUMAJANG', '2006-10-16', 'PONDOK ASRI', 'KEDUNGREJO', 'ROWOKANGKUNG', 'LUMAJANG', 'JAWA TIMUR', 17, 0, 'ZAINAL ABIDIN', 'WIRASWASTA', 'SITI NUR ASWATUL HASANAH', '', '082131188570', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (180, 2021, '07', '', '202107010', 'TITO CAESAR PRATAMA', '2021-07-17', 'LUMAJANG', '2008-10-22', 'KEDUNG PAKIS', 'PASIRIAN', 'PASIRIAN', 'LUMAJANG', 'JAWA TIMUR', 17, 0, 'TOTOK MASOBIRI', 'PEDAGANG', 'LILIK LESTARI', '', '085235303525', '', 'AKTIF');
INSERT INTO `data_santri` VALUES (181, 2024, '12', '', '202412005', 'testing santri', '2024-12-05', 'Jember', '2024-12-19', 'asdas', 'aaa', 'aa', 'aa', 'aaa', 10, 0, 'aaa', 'aaa', 'aa', '', '089287867123', './assets/foto_santri/202412005_asdasdasdasdasd.jpg', 'AKTIF');
INSERT INTO `data_santri` VALUES (182, 1970, '01', '', '197001002', 'Lonika', '2024-12-07', 'sadsad', '2024-12-05', 'asdasd', 'asdasd', 'asdasd', 'dfweqrwer', 'dsfdsfsd', 11, 0, 'Ancok Wijayasss', 'asdasdasd', 'asdasd', '', '089287867123', './assets/foto_santri/197001002_6c23fa12-48fa-46d2-b206-2c3c224d6b48.jpg', 'AKTIF');
INSERT INTO `data_santri` VALUES (183, 1970, '01', '', '202411007', 'sadasdasd', '2024-11-06', 'aasdasd', '2024-12-14', 'qweqwe', 'asda', 'asd', 'asd', 'asdas', 9, 0, 'asd', 'asdasdasd', 'Ancok Widodo', '', '089287867123', './assets/foto_santri/197001003_asdasdasdasdasd.jpg', 'AKTIF');
INSERT INTO `data_santri` VALUES (184, 2024, '05', '', '202405007', 'wrewrewrwerteryt', '2024-05-23', 'Bondowoso', '2024-12-21', 'asdas', 'asdfasg', 'asdasd', 'dfweqrwer', 'dsfdsfsd', 9, 0, 'Ancok Wijayasss', 'asdasdasd', 'asdasd', '', '123123', './assets/foto_santri/675ce65794cf3.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (185, 2025, '02', '', '202502001', '657658', '2025-02-05', 'jember', '2024-12-23', 'asdasd', 'sfggdf', 'asdas', 'asdas', 'asdasd', 9, 0, 'Ancok Wijayasss', 'rtyrt', 'Ancok Widodo', '', '123123', './assets/foto_santri/67645e0c4dda5.png', 'AKTIF');
INSERT INTO `data_santri` VALUES (191, 2024, '12', '', '202412006', 'Lonika', '2024-12-21', 'jember', '2025-01-01', 'asdas', 'asdasd', 'asdas', 'qweqwe', 'dsfdsfsd', 10, 0, 'Ancok Wijayasss', 'asdasdasd', 'Ancok Widodo', '', '089287867123', './assets/foto_santri/202412006_WhatsApp_Image_2024-07-19_at_19_51_13_55bb43a6.jpg', 'AKTIF');
INSERT INTO `data_santri` VALUES (187, 2026, '04', '', '202604001', 'qweqweqwe', '2026-04-10', 'jember', '2024-12-14', 'saddfghfdhjf', 'asdas', 'asdas', 'dfweqrwer', 'asdasd', 15, 0, 'qweqwe', 'qweqwe', 'qweqwe', '', '89789789789', './assets/foto_santri/202604001_WhatsApp_Image_2024-09-02_at_08_33_28_b5d87cc8.jpg', 'AKTIF');
INSERT INTO `data_santri` VALUES (190, 2025, '01', '', '202501003', 'Santri Bejad', '2025-01-01', 'Bondowoso', '2024-12-27', 'asda', 'asdasd', 'asdasd', 'asdasd', 'dfghdfgfdg', 20, 0, 'wqewqe', 'asdasdasd', 'Ancok Widodo', '', '089287867123', './assets/foto_santri/202501003_DeWatermark_ai_1734072477983.png', 'AKTIF');

-- ----------------------------
-- Table structure for data_santri_riyadhoh
-- ----------------------------
DROP TABLE IF EXISTS `data_santri_riyadhoh`;
CREATE TABLE `data_santri_riyadhoh`  (
  `id_santri_riyadhoh` int NOT NULL AUTO_INCREMENT,
  `nama_santri_riyadhoh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tempat_lahir` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_desa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_kecamatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_kabupaten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_provinsi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_nik` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_wali` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp_wali` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tahun_daftar` year NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `tanggal_tenggat` date NOT NULL,
  `status` enum('AKTIF','SELESAI','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_santri_riyadhoh`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_santri_riyadhoh
-- ----------------------------
INSERT INTO `data_santri_riyadhoh` VALUES (2, 'Mudjiatno ', 'Semarang', '1962-02-25', 'Dampala', 'Bahodopi', 'Morowali', 'Sulawesi Tengah', '5371042502620007', '085394781394', 'mispan', '1', 2024, '2024-08-29', '2024-10-05', 'AKTIF');

-- ----------------------------
-- Table structure for data_wilayah
-- ----------------------------
DROP TABLE IF EXISTS `data_wilayah`;
CREATE TABLE `data_wilayah`  (
  `id_wilayah` int NOT NULL AUTO_INCREMENT,
  `nama_wilayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `singkatan_wilayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_wilayah`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_wilayah
-- ----------------------------
INSERT INTO `data_wilayah` VALUES (10, 'WALISONGO', 'WS');
INSERT INTO `data_wilayah` VALUES (2, 'LEMBAGA PENDIDIKAN BAHASA ARAB', 'LPBA');
INSERT INTO `data_wilayah` VALUES (8, 'PENGURUS PESANTREN', 'AMIL');
INSERT INTO `data_wilayah` VALUES (9, 'RAUDHATUL ULUM', 'RU');
INSERT INTO `data_wilayah` VALUES (6, 'RUSUNAWA (UNGGULAN)', 'RSW');
INSERT INTO `data_wilayah` VALUES (7, 'SUNAN AMPEL', 'SA');
INSERT INTO `data_wilayah` VALUES (11, 'SUNAN GUNUNG JATI (SEKSI)', 'SEKSI');
INSERT INTO `data_wilayah` VALUES (12, 'Sunan Kalijaga', 'SK');

-- ----------------------------
-- Table structure for kiosk_setting
-- ----------------------------
DROP TABLE IF EXISTS `kiosk_setting`;
CREATE TABLE `kiosk_setting`  (
  `id_setting` int NOT NULL AUTO_INCREMENT,
  `nama_setting` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` enum('AKTIF','NONAKTIF','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_setting`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kiosk_setting
-- ----------------------------
INSERT INTO `kiosk_setting` VALUES (1, 'aktif', 'AKTIF');

-- ----------------------------
-- Table structure for set_kartu_santri
-- ----------------------------
DROP TABLE IF EXISTS `set_kartu_santri`;
CREATE TABLE `set_kartu_santri`  (
  `id_set` int NOT NULL AUTO_INCREMENT,
  `nama_set` varchar(100) CHARACTER SET utf16le COLLATE utf16le_general_ci NOT NULL,
  `image` longtext CHARACTER SET utf16le COLLATE utf16le_general_ci NOT NULL,
  PRIMARY KEY (`id_set`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf16le COLLATE = utf16le_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of set_kartu_santri
-- ----------------------------
INSERT INTO `set_kartu_santri` VALUES (1, 'kartu_depan', 'kartu_1734630797.jpg');
INSERT INTO `set_kartu_santri` VALUES (2, 'kartu_belakang', 'kartu_1734630813.png');

-- ----------------------------
-- Table structure for tahun_ajaran
-- ----------------------------
DROP TABLE IF EXISTS `tahun_ajaran`;
CREATE TABLE `tahun_ajaran`  (
  `id_tahun_ajaran` int NOT NULL AUTO_INCREMENT,
  `nama_tahun_ajaran` varchar(20) CHARACTER SET utf16le COLLATE utf16le_general_ci NOT NULL,
  PRIMARY KEY (`id_tahun_ajaran`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf16le COLLATE = utf16le_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tahun_ajaran
-- ----------------------------
INSERT INTO `tahun_ajaran` VALUES (1, '2024-20252');
INSERT INTO `tahun_ajaran` VALUES (4, '2027-2028');
INSERT INTO `tahun_ajaran` VALUES (5, '2029-2030');
INSERT INTO `tahun_ajaran` VALUES (6, '2030-2031');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `level` enum('ADMIN','PENGURUS') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` enum('AKTIF','NONAKTIF') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'administator@email.com', '0000000000', 'ADMIN', 'AKTIF');
INSERT INTO `user` VALUES (5, 'pengurus', '202cb962ac59075b964b07152d234b70', 'pengurus pondok', 'uzc47999@bcaoo.com', '089287867123', 'PENGURUS', 'AKTIF');

SET FOREIGN_KEY_CHECKS = 1;
