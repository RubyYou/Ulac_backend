# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.12)
# Database: ulacbackend
# Generation Time: 2014-09-01 07:04:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tbl_customer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_customer`;

CREATE TABLE `tbl_customer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `city` varchar(40) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(30) NOT NULL DEFAULT '',
  `Lock_modal` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table tbl_key
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_key`;

CREATE TABLE `tbl_key` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `city` varchar(40) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(30) NOT NULL DEFAULT '',
  `lockModal` varchar(50) NOT NULL DEFAULT '',
  `key_combination` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_key` WRITE;
/*!40000 ALTER TABLE `tbl_key` DISABLE KEYS */;

INSERT INTO `tbl_key` (`id`, `name`, `phone`, `email`, `city`, `address`, `password`, `lockModal`, `key_combination`)
VALUES
	(1,'adg','we','adf','sdf','wer','gad','',''),
	(2,'ruby','07427391884','shih@svisualjoint.co.uk','London','101 Huddleston Road','abc','Berlin','12345678'),
	(3,'ABC','IWEUROI','KDJGLSK','LDKGJA','LSKDJ','WIEOR','SKDFL','JFKWEL'),
	(4,'ABC','IWEUROI','KDJGLSK','LDKGJA','LSKDJ','WIEOR','SKDFL','JFKWEL'),
	(5,'ABC','IWEUROI','KDJGLSK','LDKGJA','LSKDJ','WIEOR','SKDFL','JFKWEL'),
	(6,'ajgoaewi','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(7,'ajgoaewi','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(8,'ajgoaewi','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(9,'ajgoaewi','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(10,'ajgoaewi','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(11,'ajgoaewi','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(12,'ajgoaewi','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(13,'ajgoaewi','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(14,'abcer','wejgiwo','jvkel','adg','agd','ewr','sg','weg'),
	(15,'ajdg','weg','adsg','as','ew','sdg','geq','sdgqwe'),
	(16,'love','weg','adsg','as','ew','sdg','geq','sdgqwe'),
	(17,'love','weg','adsg','as','ew','sdg','geq','sdgqwe'),
	(18,'adfsd','sd','wer','','','adf','sdfwe','qegqwe'),
	(19,'sadf','07427391884','asdg@auto','','','1111','aewe','12345678'),
	(20,'lulutesting','07427391884','sdfj@adkfj','','','','sdfwe','83275092'),
	(21,'ede','07427391884','luluvirus@20000','tuffnel park','lugi house','','berlin','83275092'),
	(22,'ç‰›gigi','07427391884','luluvirus@20000','tuffnel park','lugi house','','berlin','83275092'),
	(23,'ç‰›gigi','07427391884','luluvirus@20000','tuffnel park','lugi house','','berlin','83275092'),
	(24,'aldkfj','12335234','222@luluvir','sfd','','','dfg','32523');

/*!40000 ALTER TABLE `tbl_key` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_model
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_model`;

CREATE TABLE `tbl_model` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lockModal` int(11) DEFAULT NULL,
  `keyCombination` int(11) DEFAULT NULL,
  `receipt` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table tbl_product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productName` varchar(200) DEFAULT '',
  `description` varchar(500) DEFAULT '',
  `productCode` varchar(20) DEFAULT '',
  `Specs` varchar(50) DEFAULT NULL,
  `Weight` varchar(30) DEFAULT NULL,
  `security` int(11) DEFAULT NULL,
  `thumbImgUrl` varchar(200) DEFAULT NULL,
  `Intro` varchar(100) DEFAULT NULL,
  `BigImgUrl` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;

INSERT INTO `tbl_product` (`id`, `productName`, `description`, `productCode`, `Specs`, `Weight`, `security`, `thumbImgUrl`, `Intro`, `BigImgUrl`)
VALUES
	(1,'BULLDOG / 110 dB Alarm Cable Lock / Key','This high security alarm cable lock is ideal for commuters who will park their bikes for a long time. Bulldog is equipped with a 110dB alarm, which will be activated if the cutting / moving sensor is triggered.','AL3P','10mm x 120cm / Coil Steel Cable','500g',5,'http://www.ulaclock.com/images/lock/AL3P/AL3P_icon.png','110dB alarm\nCut sensor\nDimple key\n','http://www.ulaclock.com/images/lock/AL3P/AL3P_1.jpg'),
	(2,'BOXER / Hexagonal Cable Lock / Combo','We proudly introduce the newly developed Hexagonal Cable to some of ULAC’s collections. Unlike conventional round cables, the super thick hexagonal shape cable not only brings extra security, but is also visually appealing.','A600S','18mm x 70cm / Steel Cable','335g',4,'http://www.ulaclock.com/images/lock/A600S/A600S_icon.png','Hexagonal cable\nThicker steel\nCombination','http://www.ulaclock.com/images/lock/A600S/A600S_4.jpg'),
	(3,'KINGS CROSS / Karabiner Lock / Combo','Not the strongest lock out there, but the Karabiner lock is definitely one of the most fashionable and user-friendly cycle locks. We are one of the pioneers in developing karabiner style locks, so you know you can trust its functionality and design aesthetics.','K8S','4mm x 120cm / Coil Steel Cable','160g',2,'http://www.ulaclock.com/images/lock/K8S/K8S_icon.png','Karabiner design\nAluminum body\nCombination','http://www.ulaclock.com/images/lock/K8S/K8S_1.jpg'),
	(4,'JUBILEE / Karabiner Lock / Combo','Not the strongest lock out there, but the Karabiner lock is definitely one of the most fashionable and user-friendly cycle locks. We are one of the pioneers in developing karabiner style locks, so you know you can trust its functionality and design aesthetics.','K6','5mm x 120cm / Coil Steel Cable','130g',2,'http://www.ulaclock.com/images/lock/K6/K6_icon.png','Karabiner design\nZinc lock housing\nCombination','http://www.ulaclock.com/images/lock/K6/K6_1.jpg'),
	(5,'SIDEKICK / 360 Turnable Cylinder Cable Lock / Key','One of the ULAC’s iconic cylinder designs. We engineered the lock head to be turnable to create a better user experience for bikers. The Sidekick is prefect for city riders.','SD600R','15mm x 35cm / Steel Cable','365g',4,'http://www.ulaclock.com/images/lock/SD600R/SD600R_icon.png','360 turnable lock head\nUser-friendly\nDimple key','http://www.ulaclock.com/images/lock/SD600R/SD600R_1.jpg');

/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
