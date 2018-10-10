# Host: localhost  (Version: 5.5.53)
# Date: 2018-10-10 19:09:07
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "oo_country"
#

DROP TABLE IF EXISTS `oo_country`;
CREATE TABLE `oo_country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "oo_country"
#

INSERT INTO `oo_country` VALUES ('AU','Australia',18886000),('BR','Brazil',170115000),('CA','Canada',1147000),('CN','China',1277558000),('DE','Germany',82164700),('FR','France',59225700),('GB','United Kingdom',59623400),('IN','India',1013662000),('RU','Russia',146934000),('US','United States',278357000);

#
# Structure for table "oo_news"
#

DROP TABLE IF EXISTS `oo_news`;
CREATE TABLE `oo_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `content` text,
  `status` tinyint(3) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "oo_news"
#

/*!40000 ALTER TABLE `oo_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `oo_news` ENABLE KEYS */;

#
# Structure for table "oo_test"
#

DROP TABLE IF EXISTS `oo_test`;
CREATE TABLE `oo_test` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "oo_test"
#

/*!40000 ALTER TABLE `oo_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `oo_test` ENABLE KEYS */;

#
# Structure for table "oo_user"
#

DROP TABLE IF EXISTS `oo_user`;
CREATE TABLE `oo_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `phone` varbinary(11) DEFAULT NULL,
  `sex` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1:男2:女',
  `note` varchar(255) DEFAULT NULL COMMENT '备注',
  `reg_ip` varchar(20) DEFAULT NULL,
  `reg_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "oo_user"
#

/*!40000 ALTER TABLE `oo_user` DISABLE KEYS */;
INSERT INTO `oo_user` VALUES (4,'刘晓雨','7ca59860a4140d022ac44af429b41cf0',X'3135393530353331303335',1,'你好我是刘晓雨','127.0.0.1',1539160756);
/*!40000 ALTER TABLE `oo_user` ENABLE KEYS */;
