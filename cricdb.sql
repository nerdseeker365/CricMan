-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table cricdb.solo_fc
DROP TABLE IF EXISTS `solo_fc`;
CREATE TABLE IF NOT EXISTS `solo_fc` (
  `uid` int(11) NOT NULL,
  `play_id` int(11) unsigned zerofill NOT NULL,
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(10) unsigned zerofill NOT NULL,
  `mat` int(10) unsigned zerofill NOT NULL,
  `bat_inngs` int(10) unsigned zerofill NOT NULL,
  `nos` int(10) unsigned zerofill NOT NULL,
  `balls` int(10) unsigned zerofill NOT NULL,
  `runs` int(10) unsigned zerofill NOT NULL,
  `fifty` int(10) unsigned zerofill NOT NULL,
  `hundrd` int(10) unsigned zerofill NOT NULL,
  `hs` varchar(33) DEFAULT NULL,
  `bat_avg` double unsigned zerofill NOT NULL,
  `strate` double unsigned zerofill NOT NULL,
  `bow_inngs` int(10) unsigned zerofill NOT NULL,
  `overs` int(10) unsigned zerofill NOT NULL,
  `wik` int(10) unsigned zerofill NOT NULL,
  `3w` int(10) unsigned zerofill NOT NULL,
  `5w` int(10) unsigned zerofill NOT NULL,
  `best` varchar(50) NOT NULL,
  `bow_avg` double unsigned zerofill NOT NULL,
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cricdb.solo_fc: ~2 rows (approximately)
DELETE FROM `solo_fc`;
/*!40000 ALTER TABLE `solo_fc` DISABLE KEYS */;
INSERT INTO `solo_fc` (`uid`, `play_id`, `play_name`, `play_age`, `mat`, `bat_inngs`, `nos`, `balls`, `runs`, `fifty`, `hundrd`, `hs`, `bat_avg`, `strate`, `bow_inngs`, `overs`, `wik`, `3w`, `5w`, `best`, `bow_avg`) VALUES
	(1, 00000000001, 'Satya', 0000000027, 0000000023, 0000000020, 0000000002, 0000000335, 0000000305, 0000000002, 0000000000, '63*', 0000000000000000026.87, 0000000000000000000090, 0000000000, 0000000000, 0000000000, 0000000000, 0000000000, '', 0000000000000000000000),
	(1, 00000000002, 'Rahul', 0000000044, 0000000233, 0000000211, 0000000033, 0000043434, 0000005643, 0000000045, 0000000011, '143', 0000000000000000000000, 0000000000000000000000, 0000000000, 0000000000, 0000000000, 0000000000, 0000000000, '', 0000000000000000000000);
/*!40000 ALTER TABLE `solo_fc` ENABLE KEYS */;


-- Dumping structure for table cricdb.solo_odi
DROP TABLE IF EXISTS `solo_odi`;
CREATE TABLE IF NOT EXISTS `solo_odi` (
  `uid` int(11) NOT NULL,
  `play_id` int(11) unsigned zerofill NOT NULL,
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(10) unsigned zerofill NOT NULL,
  `mat` int(10) unsigned zerofill NOT NULL,
  `bat_inngs` int(10) unsigned zerofill NOT NULL,
  `nos` int(10) unsigned zerofill NOT NULL,
  `balls` int(10) unsigned zerofill NOT NULL,
  `runs` int(10) unsigned zerofill NOT NULL,
  `fifty` int(10) unsigned zerofill NOT NULL,
  `hundrd` int(10) unsigned zerofill NOT NULL,
  `hs` varchar(33) DEFAULT NULL,
  `bat_avg` double unsigned zerofill NOT NULL,
  `strate` double unsigned zerofill NOT NULL,
  `bow_inngs` int(10) unsigned zerofill NOT NULL,
  `overs` int(10) unsigned zerofill NOT NULL,
  `wik` int(10) unsigned zerofill NOT NULL,
  `3w` int(10) unsigned zerofill NOT NULL,
  `5w` int(10) unsigned zerofill NOT NULL,
  `best` varchar(50) NOT NULL,
  `bow_avg` double unsigned zerofill NOT NULL,
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cricdb.solo_odi: ~0 rows (approximately)
DELETE FROM `solo_odi`;
/*!40000 ALTER TABLE `solo_odi` DISABLE KEYS */;
/*!40000 ALTER TABLE `solo_odi` ENABLE KEYS */;


-- Dumping structure for table cricdb.solo_test
DROP TABLE IF EXISTS `solo_test`;
CREATE TABLE IF NOT EXISTS `solo_test` (
  `uid` int(11) DEFAULT NULL,
  `play_id` int(11) NOT NULL DEFAULT '0',
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(11) DEFAULT NULL,
  `mat` int(11) DEFAULT NULL,
  `bat_inngs` int(11) DEFAULT NULL,
  `nos` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `fifty` int(11) DEFAULT NULL,
  `hundrd` int(11) DEFAULT NULL,
  `hs` varchar(33) DEFAULT NULL,
  `bat_avg` double DEFAULT NULL,
  `strate` double DEFAULT NULL,
  `bow_inngs` int(11) DEFAULT NULL,
  `overs` int(11) DEFAULT NULL,
  `wik` int(11) DEFAULT NULL,
  `3w` int(11) DEFAULT NULL,
  `5w` int(11) DEFAULT NULL,
  `best` varchar(50) DEFAULT NULL,
  `bow_avg` double DEFAULT NULL,
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cricdb.solo_test: ~0 rows (approximately)
DELETE FROM `solo_test`;
/*!40000 ALTER TABLE `solo_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `solo_test` ENABLE KEYS */;


-- Dumping structure for table cricdb.solo_tt
DROP TABLE IF EXISTS `solo_tt`;
CREATE TABLE IF NOT EXISTS `solo_tt` (
  `uid` int(11) NOT NULL,
  `play_id` int(11) unsigned zerofill NOT NULL,
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(10) unsigned zerofill NOT NULL,
  `mat` int(10) unsigned zerofill NOT NULL,
  `bat_inngs` int(10) unsigned zerofill NOT NULL,
  `nos` int(10) unsigned zerofill NOT NULL,
  `balls` int(10) unsigned zerofill NOT NULL,
  `runs` int(10) unsigned zerofill NOT NULL,
  `fifty` int(10) unsigned zerofill NOT NULL,
  `hundrd` int(10) unsigned zerofill NOT NULL,
  `hs` varchar(33) DEFAULT NULL,
  `bat_avg` double unsigned zerofill NOT NULL,
  `strate` double unsigned zerofill NOT NULL,
  `bow_inngs` int(10) unsigned zerofill NOT NULL,
  `overs` int(10) unsigned zerofill NOT NULL,
  `wik` int(10) unsigned zerofill NOT NULL,
  `3w` int(10) unsigned zerofill NOT NULL,
  `5w` int(10) unsigned zerofill NOT NULL,
  `best` varchar(50) NOT NULL,
  `bow_avg` double unsigned zerofill NOT NULL,
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cricdb.solo_tt: ~0 rows (approximately)
DELETE FROM `solo_tt`;
/*!40000 ALTER TABLE `solo_tt` DISABLE KEYS */;
/*!40000 ALTER TABLE `solo_tt` ENABLE KEYS */;


-- Dumping structure for table cricdb.tolly_user
DROP TABLE IF EXISTS `tolly_user`;
CREATE TABLE IF NOT EXISTS `tolly_user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pic` varchar(50) NOT NULL DEFAULT 'pic/u1.jpg',
  `bal` double unsigned DEFAULT '50000000',
  `banner` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table cricdb.tolly_user: 1 rows
DELETE FROM `tolly_user`;
/*!40000 ALTER TABLE `tolly_user` DISABLE KEYS */;
INSERT INTO `tolly_user` (`uid`, `username`, `password`, `email`, `status`, `pic`, `bal`, `banner`) VALUES
	(1, 'satya', 'satya', 'satya', 'pending', 'pic/u1.jpg', 50000000, 'satya');
/*!40000 ALTER TABLE `tolly_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
