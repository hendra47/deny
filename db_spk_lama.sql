/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : db_spk

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2018-02-16 17:33:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alternatifs
-- ----------------------------
DROP TABLE IF EXISTS `alternatifs`;
CREATE TABLE `alternatifs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of alternatifs
-- ----------------------------
INSERT INTO `alternatifs` VALUES ('1', 'A1', '1', null, '-', '2017-12-02 07:32:17', '2017-12-02 07:32:17');
INSERT INTO `alternatifs` VALUES ('2', 'A2', '2', null, '-', '2017-12-02 07:38:41', '2017-12-02 07:38:41');
INSERT INTO `alternatifs` VALUES ('3', 'A3', '3', null, '-', '2017-12-02 07:39:00', '2017-12-02 07:39:00');
INSERT INTO `alternatifs` VALUES ('4', 'A4', '4', null, '-', '2017-12-02 07:39:16', '2017-12-02 07:39:16');
INSERT INTO `alternatifs` VALUES ('5', 'A5', '5', null, '-', '2017-12-02 07:39:29', '2017-12-02 07:39:29');

-- ----------------------------
-- Table structure for crips
-- ----------------------------
DROP TABLE IF EXISTS `crips`;
CREATE TABLE `crips` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `rumus` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of crips
-- ----------------------------
INSERT INTO `crips` VALUES ('23', '1', 'cost', '0', '4', 'Sangat Bagus', '2017-12-09 10:31:45', '2017-12-09 17:31:45', 'persamaan');
INSERT INTO `crips` VALUES ('24', '1', 'cost', '1', '3', 'Baik', '2017-12-09 10:31:55', '2017-12-09 17:31:55', 'persamaan');
INSERT INTO `crips` VALUES ('25', '1', 'cost', '2,3,4', '2', 'cukup', '2017-12-09 10:32:09', '2017-12-09 17:32:09', 'array');
INSERT INTO `crips` VALUES ('26', '1', 'cost', '>= 5', '1', 'kurang', '2017-12-09 19:01:45', '2017-12-09 19:01:45', 'perbandingan');
INSERT INTO `crips` VALUES ('27', '2', 'benefit', 'A', '4', 'Sangat Bagus', '2017-12-09 10:32:42', '2017-12-09 10:32:42', 'grade');
INSERT INTO `crips` VALUES ('28', '2', 'benefit', 'B', '3', 'Baik', '2017-12-09 10:33:17', '2017-12-09 10:33:17', 'grade');
INSERT INTO `crips` VALUES ('29', '2', 'benefit', 'C', '2', 'Cukup', '2017-12-09 10:33:38', '2017-12-09 10:33:38', 'grade');
INSERT INTO `crips` VALUES ('30', '2', 'benefit', 'D', '1', 'Kurang', '2017-12-09 10:33:56', '2017-12-09 10:33:56', 'grade');
INSERT INTO `crips` VALUES ('31', '3', 'benefit', 'A', '4', 'Sangat Bagus', '2017-12-09 10:35:04', '2017-12-09 10:35:04', 'grade');
INSERT INTO `crips` VALUES ('32', '3', 'benefit', 'B', '3', 'Baik', '2017-12-09 10:35:19', '2017-12-09 10:35:19', 'grade');
INSERT INTO `crips` VALUES ('33', '3', 'benefit', 'C', '2', 'Cukup', '2017-12-09 10:35:38', '2017-12-09 10:35:38', 'grade');
INSERT INTO `crips` VALUES ('34', '3', 'benefit', 'D', '1', 'Kurang', '2017-12-09 10:36:02', '2017-12-09 10:36:02', 'grade');
INSERT INTO `crips` VALUES ('35', '4', 'benefit', '86-100', '4', 'Sangat Bagus', '2017-12-09 10:36:28', '2017-12-09 10:36:28', 'range');
INSERT INTO `crips` VALUES ('36', '4', 'benefit', '71-85', '3', 'Baik', '2017-12-09 10:37:05', '2017-12-09 10:37:05', 'range');
INSERT INTO `crips` VALUES ('37', '4', 'benefit', '56-70', '2', 'Cukup', '2017-12-09 10:37:23', '2017-12-09 10:37:23', 'range');
INSERT INTO `crips` VALUES ('38', '4', 'benefit', '0-55', '1', 'Kurang', '2017-12-09 10:37:43', '2017-12-09 10:37:43', 'range');

-- ----------------------------
-- Table structure for hak_akses
-- ----------------------------
DROP TABLE IF EXISTS `hak_akses`;
CREATE TABLE `hak_akses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of hak_akses
-- ----------------------------
INSERT INTO `hak_akses` VALUES ('1', 'admin', 'user,akses,siswa,alternatif,kriteria,crips,penilaian,laporan', 'admin full akses', '2017-11-18 10:20:03', '2017-12-03 12:56:12');
INSERT INTO `hak_akses` VALUES ('2', 'kesiswaan', 'penilaian', '-', '2017-12-03 11:45:45', '2017-12-09 14:28:59');
INSERT INTO `hak_akses` VALUES ('3', 'walikelas', 'penilaian', '-', '2017-12-03 11:45:57', '2017-12-03 12:14:28');
INSERT INTO `hak_akses` VALUES ('11', 'kepala_sekolah', 'laporan', '-', '2017-12-03 12:13:40', '2017-12-03 12:13:40');

-- ----------------------------
-- Table structure for kriterias
-- ----------------------------
DROP TABLE IF EXISTS `kriterias`;
CREATE TABLE `kriterias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kriterias
-- ----------------------------
INSERT INTO `kriterias` VALUES ('1', 'C1', 'Absensi', '10', 'cost', '-', '2017-12-02 03:48:31', '2017-12-02 03:48:31');
INSERT INTO `kriterias` VALUES ('2', 'C2', 'eskul', '20', 'benefit', '-', '2017-12-02 03:48:53', '2017-12-02 03:48:53');
INSERT INTO `kriterias` VALUES ('3', 'C3', 'Sikap', '30', 'benefit', '-', '2017-12-02 03:49:15', '2017-12-02 03:49:15');
INSERT INTO `kriterias` VALUES ('4', 'C4', 'Raport', '40', 'benefit', '-', '2017-12-02 09:16:23', '2017-12-02 16:16:23');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2017_08_19_102739_create_users_table', '1');
INSERT INTO `migrations` VALUES ('9', '2017_11_18_091937_create_siswas_table', '2');
INSERT INTO `migrations` VALUES ('11', '2017_11_18_100432_create_hak_akses_table', '4');
INSERT INTO `migrations` VALUES ('12', '2017_12_01_132638_create_kriterias_table', '5');
INSERT INTO `migrations` VALUES ('13', '2017_12_02_034250_create_kriterias_table', '6');
INSERT INTO `migrations` VALUES ('14', '2017_12_02_034551_create_kriterias_table', '7');
INSERT INTO `migrations` VALUES ('15', '2017_12_02_042254_create_crips_table', '8');
INSERT INTO `migrations` VALUES ('16', '2017_12_02_070929_create_alternatifs_table', '9');
INSERT INTO `migrations` VALUES ('17', '2017_12_02_075551_create_nilai_alternatifs_table', '10');

-- ----------------------------
-- Table structure for nilai_alternatifs
-- ----------------------------
DROP TABLE IF EXISTS `nilai_alternatifs`;
CREATE TABLE `nilai_alternatifs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_alternatif` int(11) NOT NULL,
  `id_crips` int(11) NOT NULL,
  `kode` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kriteria` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of nilai_alternatifs
-- ----------------------------
INSERT INTO `nilai_alternatifs` VALUES ('74', '4', '36', 'A1', '78', 'C4', '2018-02-16 09:36:05', '2018-02-16 09:36:05');
INSERT INTO `nilai_alternatifs` VALUES ('75', '1', '26', 'A2', '6', 'C1', '2018-02-16 09:36:22', '2018-02-16 09:36:22');
INSERT INTO `nilai_alternatifs` VALUES ('76', '4', '35', 'A2', '89', 'C4', '2018-02-16 09:36:31', '2018-02-16 09:36:31');
INSERT INTO `nilai_alternatifs` VALUES ('77', '1', '23', 'A3', '0', 'C1', '2018-02-16 09:36:43', '2018-02-16 09:36:43');
INSERT INTO `nilai_alternatifs` VALUES ('78', '4', '38', 'A3', '55', 'C4', '2018-02-16 09:36:54', '2018-02-16 09:36:54');
INSERT INTO `nilai_alternatifs` VALUES ('79', '1', '25', 'A4', '3', 'C1', '2018-02-16 09:37:03', '2018-02-16 09:37:03');
INSERT INTO `nilai_alternatifs` VALUES ('80', '4', '37', 'A4', '67', 'C4', '2018-02-16 09:37:12', '2018-02-16 09:37:12');
INSERT INTO `nilai_alternatifs` VALUES ('81', '1', '26', 'A5', '7', 'C1', '2018-02-16 09:37:21', '2018-02-16 09:37:21');
INSERT INTO `nilai_alternatifs` VALUES ('82', '4', '36', 'A5', '79', 'C4', '2018-02-16 09:37:29', '2018-02-16 09:37:29');
INSERT INTO `nilai_alternatifs` VALUES ('83', '2', '28', 'A1', 'B', 'C2', '2018-02-16 09:38:03', '2018-02-16 09:38:03');
INSERT INTO `nilai_alternatifs` VALUES ('84', '3', '31', 'A1', 'A', 'C3', '2018-02-16 09:38:15', '2018-02-16 09:38:15');
INSERT INTO `nilai_alternatifs` VALUES ('85', '2', '29', 'A2', 'C', 'C2', '2018-02-16 09:38:22', '2018-02-16 09:38:22');
INSERT INTO `nilai_alternatifs` VALUES ('86', '3', '34', 'A2', 'D', 'C3', '2018-02-16 09:38:29', '2018-02-16 09:38:29');
INSERT INTO `nilai_alternatifs` VALUES ('87', '2', '27', 'A3', 'A', 'C2', '2018-02-16 09:38:36', '2018-02-16 09:38:36');
INSERT INTO `nilai_alternatifs` VALUES ('88', '3', '33', 'A3', 'C', 'C3', '2018-02-16 09:38:45', '2018-02-16 09:38:45');
INSERT INTO `nilai_alternatifs` VALUES ('89', '2', '28', 'A4', 'B', 'C2', '2018-02-16 09:39:16', '2018-02-16 09:39:16');
INSERT INTO `nilai_alternatifs` VALUES ('90', '3', '33', 'A4', 'C', 'C3', '2018-02-16 09:39:24', '2018-02-16 09:39:24');
INSERT INTO `nilai_alternatifs` VALUES ('91', '2', '27', 'A5', 'A', 'C2', '2018-02-16 09:39:31', '2018-02-16 09:39:31');
INSERT INTO `nilai_alternatifs` VALUES ('92', '3', '34', 'A5', 'D', 'C3', '2018-02-16 09:39:41', '2018-02-16 09:39:41');
INSERT INTO `nilai_alternatifs` VALUES ('93', '1', '26', 'A1', '6', 'C1', '2018-02-16 10:32:02', '2018-02-16 10:32:02');

-- ----------------------------
-- Table structure for siswas
-- ----------------------------
DROP TABLE IF EXISTS `siswas`;
CREATE TABLE `siswas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of siswas
-- ----------------------------
INSERT INTO `siswas` VALUES ('1', 'wiwi', '2014', 'Perempuan', 'jarkom', '2017-11-18 13:35:25', '2017-11-18 13:35:25');
INSERT INTO `siswas` VALUES ('2', 'rama', '2013', 'Laki-laki', 'otomotif', '2017-12-02 07:37:07', '2017-12-02 07:37:07');
INSERT INTO `siswas` VALUES ('3', 'anita', '2013', 'Perempuan', 'otomotif', '2017-12-02 07:37:26', '2017-12-02 07:37:26');
INSERT INTO `siswas` VALUES ('4', 'desi', '2013', 'Perempuan', 'otomotif', '2017-12-02 07:37:42', '2017-12-02 07:37:42');
INSERT INTO `siswas` VALUES ('5', 'hendra', '2013', 'Laki-laki', 'otomotif', '2017-12-02 07:37:59', '2017-12-02 07:37:59');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nik_unique` (`nik`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '10102', 'Administrator', 'admin', '$2y$10$Gmkat619O8B3XqmkYUZ8he9N9fBCLq6jUczCHK/Pbppf04O2Vucbi', 'admin', '2017-08-19 16:32:29', '2017-08-19 16:32:29');
INSERT INTO `users` VALUES ('2', '002', 'kepala sekolah', 'kep_sek', '$2y$10$LnTihxSXu3yB9KQo2aN0n.E00OiZ1IOwfI0Nm77dG7jiBcWlgxnyK', 'kepala_sekolah', '2017-12-02 13:35:28', '2017-12-03 10:30:22');
INSERT INTO `users` VALUES ('3', '003', 'wiwi', 'kesiswaan', '$2y$10$H0Uo35jlWRJbkXs6RQSw..Nofvh.756hlkZRJ4Pzv6gyFdkumNgO2', 'kesiswaan', '2017-12-03 13:13:19', '2017-12-03 13:13:19');
INSERT INTO `users` VALUES ('4', '0004', 'ibu wali', 'wali_kelas', '$2y$10$seysk7q4e64188W9I/i6.eQFcQj9I9k8yRg9h5HybLbUKqOLG7k4S', 'walikelas', '2017-12-03 13:14:45', '2017-12-03 13:14:45');
