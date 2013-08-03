/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.24-log : Database - kct2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `configs` */

DROP TABLE IF EXISTS `configs`;

CREATE TABLE `configs` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Config ID',
  `user_id` int(10) DEFAULT NULL COMMENT 'User Admin ID',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Path of CSV keyword list',
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Path of result CSV file',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `configs` */

insert  into `configs`(`id`,`user_id`,`name`,`value`) values (127,1,'google','0'),(128,1,'yahoo','0'),(129,1,'pg','0'),(130,1,'smartphone','0'),(131,1,'adwords','0'),(132,1,'normal','0'),(133,1,'stop_auto','0'),(134,1,'running_time','1'),(135,1,'email',''),(136,1,'schedule','yearly'),(137,1,'week_day','sunday'),(138,1,'date','1'),(139,1,'month','1'),(140,1,'attached_type','1'),(295,4,'google','0'),(296,4,'yahoo','0'),(297,4,'pc','0'),(298,4,'smartphone','0'),(299,4,'adwords','0'),(300,4,'normal','0'),(301,4,'stop_auto','0'),(302,4,'running_time','1'),(303,4,'email',''),(304,4,'schedule','daily'),(305,4,'week_day','sunday'),(306,4,'date','7'),(307,4,'month','1'),(308,4,'attached_type','csv'),(309,5,'google','1'),(310,5,'yahoo','1'),(311,5,'pc','1'),(312,5,'smartphone','1'),(313,5,'adwords','1'),(314,5,'normal','1'),(315,5,'stop_auto','1'),(316,5,'running_time','2'),(317,5,'email',''),(318,5,'schedule','weekly'),(319,5,'week_day','monday'),(320,5,'date','5'),(321,5,'month','1'),(322,5,'attached_type','csv');

/*Table structure for table `reports` */

DROP TABLE IF EXISTS `reports`;

CREATE TABLE `reports` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `total_search` int(10) DEFAULT NULL,
  `last_search` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `reports` */

/*Table structure for table `results` */

DROP TABLE IF EXISTS `results`;

CREATE TABLE `results` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `desc` text COLLATE utf8_unicode_ci,
  `is_adword` int(10) DEFAULT NULL,
  `engine_name` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `results` */

/*Table structure for table `schedules` */

DROP TABLE IF EXISTS `schedules`;

CREATE TABLE `schedules` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `month` date DEFAULT NULL,
  `day` date DEFAULT NULL,
  `hours` datetime DEFAULT NULL,
  `week` datetime DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `schedules` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`username`,`password`,`created`,`modified`,`is_active`,`role`) values (1,NULL,'admin','30d32f48f525dabb40c4e99c9fb34c6121ebd350','2013-07-10 11:04:04','2013-07-10 11:04:04',1,'super_admin'),(3,'test test','adminx','f6d211af32e216edab7e538dfb3cd81d77ec5f33','2013-07-10 11:04:04','2013-07-10 11:01:02',1,'user'),(4,'new admin','admins','f6d211af32e216edab7e538dfb3cd81d77ec5f33','2013-07-10 11:04:04','2013-07-15 07:16:15',1,'user'),(5,'Test','test','f6d211af32e216edab7e538dfb3cd81d77ec5f33','2013-07-15 07:16:33','2013-07-15 07:16:33',1,'user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
