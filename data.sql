-- --------------------------------------------------------
-- Host:                         eu-cdbr-west-01.cleardb.com
-- Server Version:               5.5.40-log - MySQL Community Server (GPL)
-- Server Betriebssystem:        Linux
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Exportiere Datenbank Struktur für heroku_ab63a649bb00246
CREATE DATABASE IF NOT EXISTS `heroku_ab63a649bb00246` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `heroku_ab63a649bb00246`;


-- Exportiere Struktur von Tabelle heroku_ab63a649bb00246.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `specs` varchar(50) NOT NULL COMMENT 'specification',
  `pack_style` varchar(50) NOT NULL DEFAULT '0' COMMENT '(description)',
  `weight` int(10) DEFAULT NULL COMMENT 'gram  (description)',
  `volume` int(10) DEFAULT NULL COMMENT 'cubic centimeter  (description)',
  `price` int(10) NOT NULL COMMENT 'cent',
  `images` varchar(50) DEFAULT NULL COMMENT 'base64',
  `pack_type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100079 DEFAULT CHARSET=utf8;

-- Exportiere Daten aus Tabelle heroku_ab63a649bb00246.product: ~8 rows (ungefähr)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`id`, `category`, `brand`, `specs`, `pack_style`, `weight`, `volume`, `price`, `images`, `pack_type`) VALUES
	(100008, '奶粉', '爱他美', 'pre', '桶装', 800, NULL, 19000, NULL, 1),
	(100018, '奶粉', '爱他美', '1段', '桶装', 800, NULL, 19000, NULL, 1),
	(100028, '奶粉', '爱他美', '2段', '桶装', 800, NULL, 19000, NULL, 1),
	(100038, '奶粉', '爱他美', '3段', '桶装', 800, NULL, 19000, NULL, 1),
	(100048, '奶粉', '喜宝', 'pre Bio Combiotik', '盒装', 600, NULL, 14000, NULL, 1),
	(100058, '奶粉', '喜宝', '1段 Bio Combiotik', '盒装', 600, NULL, 14000, NULL, 1),
	(100068, '奶粉', '喜宝', '2段 Bio Combiotik', '盒装', 600, NULL, 14000, NULL, 1),
	(100078, '奶粉', '喜宝', '3段 Bio Combiotik', '盒装', 600, NULL, 14000, NULL, 1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
