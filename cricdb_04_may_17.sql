-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table cricdb.cric_user
DROP TABLE IF EXISTS `cric_user`;
CREATE TABLE IF NOT EXISTS `cric_user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pic` varchar(50) NOT NULL DEFAULT 'pic/u1.jpg',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table cricdb.solo_fc
DROP TABLE IF EXISTS `solo_fc`;
CREATE TABLE IF NOT EXISTS `solo_fc` (
  `uid` int(11) DEFAULT NULL,
  `play_id` int(11) NOT NULL DEFAULT '0',
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(11) DEFAULT '16',
  `play_status` varchar(50) NOT NULL DEFAULT 'active',
  `mat` int(1) DEFAULT '0',
  `bat_inngs` int(1) DEFAULT '0',
  `nos` int(1) DEFAULT '0',
  `balls` int(1) DEFAULT '0',
  `runs` int(1) DEFAULT '0',
  `fifty` int(1) DEFAULT '0',
  `hundrd` int(1) DEFAULT '0',
  `hs` varchar(33) DEFAULT '0',
  `bat_avg` double DEFAULT '0',
  `strate` double DEFAULT '0',
  `bow_inngs` int(1) DEFAULT '0',
  `overs` int(1) DEFAULT '0',
  `wik` int(1) DEFAULT '0',
  `3w` int(1) DEFAULT '0',
  `5w` int(1) DEFAULT '0',
  `best` varchar(50) DEFAULT '0',
  `bow_avg` double DEFAULT '0',
  `bow_runs` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  `econ` double unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table cricdb.solo_odi
DROP TABLE IF EXISTS `solo_odi`;
CREATE TABLE IF NOT EXISTS `solo_odi` (
  `uid` int(11) DEFAULT NULL,
  `play_id` int(11) NOT NULL DEFAULT '0',
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(11) DEFAULT '16',
  `play_status` varchar(50) NOT NULL DEFAULT 'active',
  `mat` int(5) DEFAULT '0',
  `bat_inngs` int(5) DEFAULT '0',
  `nos` int(5) DEFAULT '0',
  `balls` int(5) DEFAULT '0',
  `runs` int(5) DEFAULT '0',
  `fifty` int(5) DEFAULT '0',
  `hundrd` int(5) DEFAULT '0',
  `hs` varchar(33) DEFAULT '0',
  `bat_avg` double DEFAULT '0',
  `strate` double DEFAULT '0',
  `bow_inngs` int(5) DEFAULT '0',
  `overs` int(5) DEFAULT '0',
  `wik` int(5) DEFAULT '0',
  `3w` int(5) DEFAULT '0',
  `5w` int(5) DEFAULT '0',
  `best` varchar(50) DEFAULT '0',
  `bow_avg` double DEFAULT '0',
  `bow_runs` int(5) unsigned zerofill NOT NULL DEFAULT '00000',
  `econ` double unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table cricdb.solo_test
DROP TABLE IF EXISTS `solo_test`;
CREATE TABLE IF NOT EXISTS `solo_test` (
  `uid` int(11) DEFAULT NULL,
  `play_id` int(11) NOT NULL DEFAULT '0',
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(11) DEFAULT '16',
  `play_status` varchar(50) NOT NULL DEFAULT 'active',
  `mat` int(1) DEFAULT '0',
  `bat_inngs` int(1) DEFAULT '0',
  `nos` int(1) DEFAULT '0',
  `balls` int(1) DEFAULT '0',
  `runs` int(1) DEFAULT '0',
  `fifty` int(1) DEFAULT '0',
  `hundrd` int(1) DEFAULT '0',
  `hs` varchar(33) DEFAULT '0',
  `bat_avg` double DEFAULT '0',
  `strate` double DEFAULT '0',
  `bow_inngs` int(1) DEFAULT '0',
  `overs` int(1) DEFAULT '0',
  `wik` int(1) DEFAULT '0',
  `3w` int(1) DEFAULT '0',
  `5w` int(1) DEFAULT '0',
  `best` varchar(50) DEFAULT '0',
  `bow_avg` double DEFAULT '0',
  `bow_runs` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  `econ` double unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table cricdb.solo_tt
DROP TABLE IF EXISTS `solo_tt`;
CREATE TABLE IF NOT EXISTS `solo_tt` (
  `uid` int(11) DEFAULT NULL,
  `play_id` int(11) NOT NULL DEFAULT '0',
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(11) DEFAULT '16',
  `play_status` varchar(50) NOT NULL DEFAULT 'active',
  `mat` int(1) DEFAULT '0',
  `bat_inngs` int(1) DEFAULT '0',
  `nos` int(1) DEFAULT '0',
  `balls` int(1) DEFAULT '0',
  `runs` int(1) DEFAULT '0',
  `fifty` int(1) DEFAULT '0',
  `hundrd` int(1) DEFAULT '0',
  `hs` varchar(33) DEFAULT '0',
  `bat_avg` double DEFAULT '0',
  `strate` double DEFAULT '0',
  `bow_inngs` int(1) DEFAULT '0',
  `overs` int(1) DEFAULT '0',
  `wik` int(1) DEFAULT '0',
  `3w` int(1) DEFAULT '0',
  `5w` int(1) DEFAULT '0',
  `best` varchar(50) DEFAULT '0',
  `bow_avg` double DEFAULT '0',
  `bow_runs` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  `econ` double unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table cricdb.vs_fc
DROP TABLE IF EXISTS `vs_fc`;
CREATE TABLE IF NOT EXISTS `vs_fc` (
  `uid` int(11) DEFAULT NULL,
  `play_id` int(11) NOT NULL DEFAULT '0',
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(11) DEFAULT '16',
  `play_status` varchar(50) NOT NULL DEFAULT 'active',
  `mat` int(1) DEFAULT '0',
  `bat_inngs` int(1) DEFAULT '0',
  `nos` int(1) DEFAULT '0',
  `balls` int(1) DEFAULT '0',
  `runs` int(1) DEFAULT '0',
  `fifty` int(1) DEFAULT '0',
  `hundrd` int(1) DEFAULT '0',
  `hs` varchar(33) DEFAULT '0',
  `bat_avg` double DEFAULT '0',
  `strate` double DEFAULT '0',
  `bow_inngs` int(1) DEFAULT '0',
  `overs` int(1) DEFAULT '0',
  `wik` int(1) DEFAULT '0',
  `3w` int(1) DEFAULT '0',
  `5w` int(1) DEFAULT '0',
  `best` varchar(50) DEFAULT '0',
  `bow_avg` double DEFAULT '0',
  `bow_runs` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  `econ` double unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table cricdb.vs_gully
DROP TABLE IF EXISTS `vs_gully`;
CREATE TABLE IF NOT EXISTS `vs_gully` (
  `uid` int(11) DEFAULT NULL,
  `play_id` int(11) NOT NULL DEFAULT '0',
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(11) DEFAULT '16',
  `play_status` varchar(50) NOT NULL DEFAULT 'active',
  `mat` int(1) DEFAULT '0',
  `bat_inngs` int(1) DEFAULT '0',
  `nos` int(1) DEFAULT '0',
  `balls` int(1) DEFAULT '0',
  `runs` int(1) DEFAULT '0',
  `fifty` int(1) DEFAULT '0',
  `hundrd` int(1) DEFAULT '0',
  `hs` varchar(33) DEFAULT '0',
  `bat_avg` double DEFAULT '0',
  `strate` double DEFAULT '0',
  `bow_inngs` int(1) DEFAULT '0',
  `overs` int(1) DEFAULT '0',
  `wik` int(1) DEFAULT '0',
  `3w` int(1) DEFAULT '0',
  `5w` int(1) DEFAULT '0',
  `best` varchar(50) DEFAULT '0',
  `bow_avg` double DEFAULT '0',
  `bow_runs` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  `econ` double unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table cricdb.vs_int
DROP TABLE IF EXISTS `vs_int`;
CREATE TABLE IF NOT EXISTS `vs_int` (
  `uid` int(11) DEFAULT NULL,
  `play_id` int(11) NOT NULL DEFAULT '0',
  `play_name` varchar(50) DEFAULT NULL,
  `play_age` int(11) DEFAULT '16',
  `play_status` varchar(50) NOT NULL DEFAULT 'active',
  `mat` int(1) DEFAULT '0',
  `bat_inngs` int(1) DEFAULT '0',
  `nos` int(1) DEFAULT '0',
  `balls` int(1) DEFAULT '0',
  `runs` int(1) DEFAULT '0',
  `fifty` int(1) DEFAULT '0',
  `hundrd` int(1) DEFAULT '0',
  `hs` varchar(33) DEFAULT '0',
  `bat_avg` double DEFAULT '0',
  `strate` double DEFAULT '0',
  `bow_inngs` int(1) DEFAULT '0',
  `overs` int(1) DEFAULT '0',
  `wik` int(1) DEFAULT '0',
  `3w` int(1) DEFAULT '0',
  `5w` int(1) DEFAULT '0',
  `best` varchar(50) DEFAULT '0',
  `bow_avg` double DEFAULT '0',
  `bow_runs` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  `econ` double unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`play_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
