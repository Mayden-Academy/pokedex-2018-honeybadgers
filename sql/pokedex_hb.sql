# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.41)
# Database: pokedex_hb
# Generation Time: 2018-11-15 14:47:44 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `user_id` int(11) unsigned NOT NULL,
  `pokemon_id` tinyint(4) unsigned NOT NULL,
  `seen_caught` tinyint(1) DEFAULT NULL COMMENT 'NULL unseen, 0 seen, 1 caught',
  UNIQUE KEY `user_pokemon` (`user_id`,`pokemon_id`) USING BTREE,
  KEY `pokemon_id` (`pokemon_id`),
  CONSTRAINT `status_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `status_ibfk_5` FOREIGN KEY (`pokemon_id`) REFERENCES `pokemon` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;

INSERT INTO `status` (`user_id`, `pokemon_id`, `seen_caught`)
VALUES
	(1,1,NULL),
	(1,2,0),
	(1,3,1),
	(1,4,1),
	(1,5,1),
	(1,6,1),
	(1,7,NULL),
	(1,8,1),
	(1,9,0),
	(1,10,1),
	(2,1,NULL),
	(2,2,1),
	(2,3,1),
	(2,47,1),
	(2,48,1),
	(2,49,1),
	(2,50,1),
	(2,51,0),
	(2,53,1),
	(2,54,1),
	(2,56,1),
	(2,57,1),
	(2,63,1),
	(2,64,1),
	(2,65,1),
	(2,129,1),
	(2,130,0),
	(3,1,NULL),
	(3,2,NULL),
	(3,3,NULL),
	(3,112,1),
	(3,113,1),
	(3,114,1),
	(3,115,1),
	(3,117,1),
	(3,118,1);

/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
