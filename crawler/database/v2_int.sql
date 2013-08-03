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
  `csv_upload_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Path of CSV keyword list',
  `csv_download_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Path of result CSV file',
  `google` int(10) DEFAULT NULL COMMENT 'Google JP?',
  `yahoo` int(10) DEFAULT NULL COMMENT 'Yahoo JP?',
  `pc` int(10) DEFAULT NULL COMMENT 'PC device?',
  `sp` int(10) DEFAULT NULL COMMENT 'Smartphone device?',
  `kind_sem` int(10) DEFAULT NULL COMMENT 'Search in SEM area',
  `kind_normal` int(10) DEFAULT NULL COMMENT 'Search in Normal area',
  `schedule_id` int(10) DEFAULT NULL COMMENT 'Schedule for auto run',
  `stop_auto` int(10) DEFAULT NULL COMMENT 'Stop Auto search?',
  `number_run` int(10) DEFAULT NULL COMMENT 'Run time per day',
  `mailto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Send mail to',
  `result_kind` int(10) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Created config date',
  `modified` timestamp NULL DEFAULT NULL COMMENT 'Modified config date',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `configs` */

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
  `firstname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`firstname`,`lastname`,`username`,`password`,`created`,`modified`,`is_active`,`role`) values (1,NULL,NULL,'admin','30d32f48f525dabb40c4e99c9fb34c6121ebd350','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'super_admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
