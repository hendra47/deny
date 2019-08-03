# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.25)
# Database: spk
# Generation Time: 2019-08-03 12:43:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table alternatifs
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `alternatifs` WRITE;
/*!40000 ALTER TABLE `alternatifs` DISABLE KEYS */;

INSERT INTO `alternatifs` (`id`, `kode`, `id_siswa`, `nama`, `keterangan`, `updated_at`, `created_at`)
VALUES
	(1,'A1',1,NULL,'-','2017-12-02 07:32:17','2017-12-02 07:32:17'),
	(2,'A2',2,NULL,'-','2017-12-02 07:38:41','2017-12-02 07:38:41'),
	(3,'A3',3,NULL,'-','2017-12-02 07:39:00','2017-12-02 07:39:00'),
	(4,'A4',4,NULL,'-','2017-12-02 07:39:16','2017-12-02 07:39:16'),
	(5,'A5',5,NULL,'-','2017-12-02 07:39:29','2017-12-02 07:39:29');

/*!40000 ALTER TABLE `alternatifs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table crips
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `crips` WRITE;
/*!40000 ALTER TABLE `crips` DISABLE KEYS */;

INSERT INTO `crips` (`id`, `id_kriteria`, `type`, `nama`, `nilai`, `keterangan`, `updated_at`, `created_at`, `rumus`)
VALUES
	(23,'1','cost','0',4,'Sangat Bagus','2017-12-09 10:31:45','2017-12-09 17:31:45','persamaan'),
	(24,'1','cost','1',3,'Baik','2017-12-09 10:31:55','2017-12-09 17:31:55','persamaan'),
	(25,'1','cost','2,3,4',2,'cukup','2017-12-09 10:32:09','2017-12-09 17:32:09','array'),
	(26,'1','cost','>= 5',1,'kurang','2017-12-09 19:01:45','2017-12-09 19:01:45','perbandingan'),
	(27,'2','benefit','A',4,'Sangat Bagus','2017-12-09 10:32:42','2017-12-09 10:32:42','grade'),
	(28,'2','benefit','B',3,'Baik','2017-12-09 10:33:17','2017-12-09 10:33:17','grade'),
	(29,'2','benefit','C',2,'Cukup','2017-12-09 10:33:38','2017-12-09 10:33:38','grade'),
	(30,'2','benefit','D',1,'Kurang','2017-12-09 10:33:56','2017-12-09 10:33:56','grade'),
	(31,'3','benefit','A',4,'Sangat Bagus','2017-12-09 10:35:04','2017-12-09 10:35:04','grade'),
	(32,'3','benefit','B',3,'Baik','2017-12-09 10:35:19','2017-12-09 10:35:19','grade'),
	(33,'3','benefit','C',2,'Cukup','2017-12-09 10:35:38','2017-12-09 10:35:38','grade'),
	(34,'3','benefit','D',1,'Kurang','2017-12-09 10:36:02','2017-12-09 10:36:02','grade'),
	(35,'4','benefit','86-100',4,'Sangat Bagus','2017-12-09 10:36:28','2017-12-09 10:36:28','range'),
	(36,'4','benefit','71-85',3,'Baik','2017-12-09 10:37:05','2017-12-09 10:37:05','range'),
	(37,'4','benefit','56-70',2,'Cukup','2017-12-09 10:37:23','2017-12-09 10:37:23','range'),
	(38,'4','benefit','0-55',1,'Kurang','2017-12-09 10:37:43','2017-12-09 10:37:43','range');

/*!40000 ALTER TABLE `crips` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hak_akses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hak_akses`;

CREATE TABLE `hak_akses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `hak_akses` WRITE;
/*!40000 ALTER TABLE `hak_akses` DISABLE KEYS */;

INSERT INTO `hak_akses` (`id`, `group`, `menu`, `keterangan`, `created_at`, `updated_at`)
VALUES
	(1,'admin','user,akses,siswa,alternatif,kriteria,crips,penilaian,laporan','admin full akses','2017-11-18 10:20:03','2017-12-03 12:56:12'),
	(2,'kesiswaan','penilaian','-','2017-12-03 11:45:45','2017-12-09 14:28:59'),
	(3,'walikelas','penilaian','-','2017-12-03 11:45:57','2017-12-03 12:14:28'),
	(11,'kepala_sekolah','laporan','-','2017-12-03 12:13:40','2017-12-03 12:13:40');

/*!40000 ALTER TABLE `hak_akses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jurusan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT '',
  `keterangan` varchar(255) DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;

INSERT INTO `jurusan` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`)
VALUES
	(1,'Otomotif','-','2019-08-03 10:21:01','2019-08-03 10:21:01'),
	(2,'Mesin','-','2019-08-03 10:21:19','2019-08-03 10:21:19'),
	(3,'Komputer','-','2019-08-03 10:21:31','2019-08-03 10:21:31');

/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kriterias
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `kriterias` WRITE;
/*!40000 ALTER TABLE `kriterias` DISABLE KEYS */;

INSERT INTO `kriterias` (`id`, `kode`, `kriteria`, `nilai`, `type`, `keterangan`, `updated_at`, `created_at`)
VALUES
	(1,'C1','Absensi',10,'cost','-','2017-12-02 03:48:31','2017-12-02 03:48:31'),
	(2,'C2','eskul',20,'benefit','-','2017-12-02 03:48:53','2017-12-02 03:48:53'),
	(3,'C3','Sikap',30,'benefit','-','2017-12-02 03:49:15','2017-12-02 03:49:15'),
	(4,'C4','Raport',40,'benefit','-','2017-12-02 09:16:23','2017-12-02 16:16:23');

/*!40000 ALTER TABLE `kriterias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2017_08_19_102739_create_users_table',1),
	(9,'2017_11_18_091937_create_siswas_table',2),
	(11,'2017_11_18_100432_create_hak_akses_table',4),
	(12,'2017_12_01_132638_create_kriterias_table',5),
	(13,'2017_12_02_034250_create_kriterias_table',6),
	(14,'2017_12_02_034551_create_kriterias_table',7),
	(15,'2017_12_02_042254_create_crips_table',8),
	(16,'2017_12_02_070929_create_alternatifs_table',9),
	(17,'2017_12_02_075551_create_nilai_alternatifs_table',10);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nilai_alternatifs
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `nilai_alternatifs` WRITE;
/*!40000 ALTER TABLE `nilai_alternatifs` DISABLE KEYS */;

INSERT INTO `nilai_alternatifs` (`id`, `id_alternatif`, `id_crips`, `kode`, `input`, `kriteria`, `created_at`, `updated_at`)
VALUES
	(74,4,36,'A1','78','C4','2018-02-16 09:36:05','2018-02-16 09:36:05'),
	(75,1,26,'A2','6','C1','2018-02-16 09:36:22','2018-02-16 09:36:22'),
	(76,4,35,'A2','89','C4','2018-02-16 09:36:31','2018-02-16 09:36:31'),
	(77,1,23,'A3','0','C1','2018-02-16 09:36:43','2018-02-16 09:36:43'),
	(78,4,38,'A3','55','C4','2018-02-16 09:36:54','2018-02-16 09:36:54'),
	(79,1,25,'A4','3','C1','2018-02-16 09:37:03','2018-02-16 09:37:03'),
	(80,4,37,'A4','67','C4','2018-02-16 09:37:12','2018-02-16 09:37:12'),
	(81,1,26,'A5','7','C1','2018-02-16 09:37:21','2018-02-16 09:37:21'),
	(82,4,36,'A5','79','C4','2018-02-16 09:37:29','2018-02-16 09:37:29'),
	(83,2,28,'A1','B','C2','2018-02-16 09:38:03','2018-02-16 09:38:03'),
	(84,3,31,'A1','A','C3','2018-02-16 09:38:15','2018-02-16 09:38:15'),
	(85,2,29,'A2','C','C2','2018-02-16 09:38:22','2018-02-16 09:38:22'),
	(86,3,34,'A2','D','C3','2018-02-16 09:38:29','2018-02-16 09:38:29'),
	(87,2,27,'A3','A','C2','2018-02-16 09:38:36','2018-02-16 09:38:36'),
	(88,3,33,'A3','C','C3','2018-02-16 09:38:45','2018-02-16 09:38:45'),
	(89,2,28,'A4','B','C2','2018-02-16 09:39:16','2018-02-16 09:39:16'),
	(90,3,33,'A4','C','C3','2018-02-16 09:39:24','2018-02-16 09:39:24'),
	(91,2,27,'A5','A','C2','2018-02-16 09:39:31','2018-02-16 09:39:31'),
	(92,3,34,'A5','D','C3','2018-02-16 09:39:41','2018-02-16 09:39:41'),
	(93,1,26,'A1','6','C1','2018-02-16 10:32:02','2018-02-16 10:32:02');

/*!40000 ALTER TABLE `nilai_alternatifs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table siswas
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `siswas` WRITE;
/*!40000 ALTER TABLE `siswas` DISABLE KEYS */;

INSERT INTO `siswas` (`id`, `nama_siswa`, `tahun_ajaran`, `jk`, `jurusan`, `updated_at`, `created_at`)
VALUES
	(1,'wiwi','2014','Perempuan','jarkom','2017-11-18 13:35:25','2017-11-18 13:35:25'),
	(2,'rama','2013','Laki-laki','Mesin','2019-08-03 10:29:27','2019-08-03 17:29:27'),
	(3,'deni','2013','Laki-laki','Mesin','2019-08-03 10:29:32','2019-08-03 17:29:32'),
	(4,'desi','2013','Perempuan','otomotif','2017-12-02 07:37:42','2017-12-02 07:37:42'),
	(5,'jamal','2013','Laki-laki','otomotif','2019-07-13 15:54:29','2019-07-13 22:54:29');

/*!40000 ALTER TABLE `siswas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `nik`, `name`, `username`, `password`, `group`, `created_at`, `updated_at`)
VALUES
	(1,'10102','Administrator','admin','$2y$10$Gmkat619O8B3XqmkYUZ8he9N9fBCLq6jUczCHK/Pbppf04O2Vucbi','admin','2017-08-19 16:32:29','2017-08-19 16:32:29'),
	(2,'002','kepala sekolah','kep_sek','$2y$10$LnTihxSXu3yB9KQo2aN0n.E00OiZ1IOwfI0Nm77dG7jiBcWlgxnyK','kepala_sekolah','2017-12-02 13:35:28','2017-12-03 10:30:22'),
	(3,'003','wiwi','kesiswaan','$2y$10$H0Uo35jlWRJbkXs6RQSw..Nofvh.756hlkZRJ4Pzv6gyFdkumNgO2','kesiswaan','2017-12-03 13:13:19','2017-12-03 13:13:19'),
	(4,'0004','ibu wali','wali_kelas','$2y$10$seysk7q4e64188W9I/i6.eQFcQj9I9k8yRg9h5HybLbUKqOLG7k4S','walikelas','2017-12-03 13:14:45','2017-12-03 13:14:45');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
