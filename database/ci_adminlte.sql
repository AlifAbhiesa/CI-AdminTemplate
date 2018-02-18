-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.29-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ci_adminlte.ci_users
CREATE TABLE IF NOT EXISTS `ci_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_adminlte.ci_users: ~7 rows (approximately)
/*!40000 ALTER TABLE `ci_users` DISABLE KEYS */;
INSERT INTO `ci_users` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `is_admin`, `last_ip`, `created_at`, `updated_at`, `jabatan`) VALUES
	(3, 'demo', 'admin', 'admin', 'admin@admin.com', '12345', '$2y$10$tFY/JX/rEKR8ODW2ktjYtOWf3zTkvOtynrXOvrcZ2Qm9h72r9TaPW', 1, '', '2017-09-29 10:09:44', '2017-09-30 08:09:29', ''),
	(5, 'wwe champion', 'wwe', 'champion', 'naumanahmedcs@gmail.com', '12345', '$2y$10$KB0NxzAOWtbnVj.7OJujRe7G5K1lb6UG5ra3PnAAt/Oc96Wfl5tea', 0, '', '2017-09-29 11:09:02', '2017-10-03 06:10:51', ''),
	(6, 'Ali Raza', 'Ali', 'Raza', 'ali@admin.com', '123456', '$2y$10$RoUcgnJ1AaK125c/hFmkWexGRvEhvQKXm21YRYlNrEHuvQcH2zMMG', 0, '', '2017-10-03 06:10:31', '2017-10-03 05:10:25', ''),
	(7, 'Test1', 'test', 'champion', 'test@gmail.com', '12345', '$2y$10$J317ib3JnglmhO.IbaADHOyr4j2xSbWZZtO8pHDWW65GUZLZEu63u', 0, '', '2017-09-29 11:09:02', '2017-09-30 08:09:51', ''),
	(8, 'John Smith', 'John', 'Smith', 'johnsmith@gmail.com', '12345', '$2y$10$J317ib3JnglmhO.IbaADHOyr4j2xSbWZZtO8pHDWW65GUZLZEu63u', 0, '', '2017-09-29 11:09:02', '2017-09-30 08:09:51', ''),
	(9, 'Herry Jhone', 'Herry', 'Jhone', 'herrypro@gmail.com', '449548545624', '$2y$10$.P.vz6NaSbLPq.BvOY0umulTKBj9Ovds2jaQBdGbyKzlfjOV0O4RW', 0, '', '2017-10-03 07:10:26', '2017-10-03 07:10:26', ''),
	(11, 'Alif Abhiesa', 'Alif', 'Abhiesa', 'abhiesa24@gmail.com', '98130', '$2y$10$EiAgxhMncfPhGnYNc6QHQumajynYMPGV7ooPFT5pXer5f98.bpjke', 0, '', '2018-02-17 00:00:00', '2018-02-17 00:00:00', 'Web Developer');
/*!40000 ALTER TABLE `ci_users` ENABLE KEYS */;

-- Dumping structure for table ci_adminlte.tbl_about
CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11),
  `skill` longtext,
  `notes` longtext,
  `instagram` longtext,
  PRIMARY KEY (`id_about`),
  UNIQUE KEY `id_anggota` (`id_anggota`),
  CONSTRAINT `FK_tbl_about_tbl_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `tbl_anggota` (`id_anggota`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ci_adminlte.tbl_about: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_about` DISABLE KEYS */;
INSERT INTO `tbl_about` (`id_about`, `id_anggota`, `skill`, `notes`, `instagram`) VALUES
	(1, 1, 'Php, Html, Java, Node Js, Python', 'Apa saja yang penting baik !', 'https://www.instagram.com/xcode___/'),
	(2, 2, 'nyeduh kopi', 'anucek', 'https://www.instagram.com/lordreza__/');
/*!40000 ALTER TABLE `tbl_about` ENABLE KEYS */;

-- Dumping structure for table ci_adminlte.tbl_anggota
CREATE TABLE IF NOT EXISTS `tbl_anggota` (
  `id_anggota` int(25) NOT NULL AUTO_INCREMENT,
  `nrp_anggota` int(25) NOT NULL,
  `password_anggota` varchar(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `alamat_anggota` varchar(100) DEFAULT NULL,
  `email_anggota` varchar(50) DEFAULT NULL,
  `no_hp_anggota` varchar(50) DEFAULT NULL,
  `jabatan_anggota` varchar(50) DEFAULT NULL,
  `angkatan_anggota` varchar(5) DEFAULT NULL,
  `keterangan_anggota` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  PRIMARY KEY (`id_anggota`),
  UNIQUE KEY `nrp_anggota` (`nrp_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ci_adminlte.tbl_anggota: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_anggota` DISABLE KEYS */;
INSERT INTO `tbl_anggota` (`id_anggota`, `nrp_anggota`, `password_anggota`, `nama_anggota`, `alamat_anggota`, `email_anggota`, `no_hp_anggota`, `jabatan_anggota`, `angkatan_anggota`, `keterangan_anggota`) VALUES
	(1, 152015077, 'a63803002366dd761244102e062b5971', 'M. Alif Abhiesa Al Kautsar', 'Jl. Pangeran Sutajaya No. 26 Kec. Pabuaran Kab. Cirebon', 'abhiesa24@gmail.com', '085224952201', 'Web Developer', '2015', 'Aktif'),
	(2, 152015097, 'a63803002366dd761244102e062b5971', 'Reza Fadilah', 'Jl. Pelosok Nomor eweuhan', 'reza@gmail.com', '09121298', 'Kang Seduh Kopi', '2014', 'Aktif');
/*!40000 ALTER TABLE `tbl_anggota` ENABLE KEYS */;

-- Dumping structure for table ci_adminlte.tbl_aspirasi
CREATE TABLE IF NOT EXISTS `tbl_aspirasi` (
  `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(12) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `aspirasi` longtext,
  `privasi` enum('Public','Private') DEFAULT NULL,
  PRIMARY KEY (`id_aspirasi`),
  KEY `FK_tbl_aspirasi_tbl_anggota` (`id_anggota`),
  CONSTRAINT `FK_tbl_aspirasi_tbl_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `tbl_anggota` (`id_anggota`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table ci_adminlte.tbl_aspirasi: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_aspirasi` DISABLE KEYS */;
INSERT INTO `tbl_aspirasi` (`id_aspirasi`, `id_anggota`, `date`, `judul`, `aspirasi`, `privasi`) VALUES
	(1, 1, '2018-02-17 21:21:32', 'Judul Aspirasi 1', 'Lorem ipsum represents a long-held tradition for designers,mtypographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome  tools to help create filler text for everyone from bacon lovers to Charlie Sheen fans.', 'Public'),
	(2, 1, '2018-02-17 21:33:43', 'Judul Aspirasi 2', 'Lorem ipsum represents a long-held tradition for designers,mtypographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome  tools to help create filler text for everyone from bacon lovers to Charlie Sheen fans.', 'Private'),
	(3, 2, '2018-02-17 21:39:26', 'Judul Aspirasi 3', 'Lorem ipsum represents a long-held tradition for designers,mtypographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome  tools to help create filler text for everyone from bacon lovers to Charlie Sheen fans.', 'Public');
/*!40000 ALTER TABLE `tbl_aspirasi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
