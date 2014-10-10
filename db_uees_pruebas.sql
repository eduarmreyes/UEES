-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             8.3.0.4832
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for db_uees_pruebas
CREATE DATABASE IF NOT EXISTS `db_uees_pruebas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_uees_pruebas`;


-- Dumping structure for table db_uees_pruebas.uees_votos
CREATE TABLE IF NOT EXISTS `uees_votos` (
  `vot_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID del voto',
  `vot_votos1` int(50) DEFAULT NULL,
  `vot_votos2` int(50) DEFAULT NULL,
  PRIMARY KEY (`vot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Tabla para guardar votos';

-- Dumping data for table db_uees_pruebas.uees_votos: ~0 rows (approximately)
/*!40000 ALTER TABLE `uees_votos` DISABLE KEYS */;
INSERT INTO `uees_votos` (`vot_id`, `vot_votos1`, `vot_votos2`) VALUES
	(1, 11, 4);
/*!40000 ALTER TABLE `uees_votos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
