-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_event
CREATE DATABASE IF NOT EXISTS `db_event` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_event`;

-- Dumping structure for table db_event.tb_jns_lomba
CREATE TABLE IF NOT EXISTS `tb_jns_lomba` (
  `idLomba` int NOT NULL AUTO_INCREMENT,
  `namaLomba` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `penyelenggara` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`idLomba`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Data exporting was unselected.

-- Dumping structure for table db_event.tb_pendaftaran
CREATE TABLE IF NOT EXISTS `tb_pendaftaran` (
  `idPendaftaran` int NOT NULL AUTO_INCREMENT,
  `idLomba` int DEFAULT NULL,
  `namaPendaftar` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `kelas` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `noHp` varchar(13) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `tglDaftar` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPendaftaran`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Data exporting was unselected.

-- Dumping structure for table db_event.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `username` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `password` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
