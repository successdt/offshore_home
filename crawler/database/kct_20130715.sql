-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2013 at 09:01 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kct`
--

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Config ID',
  `user_id` int(10) DEFAULT NULL COMMENT 'User Admin ID',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Path of CSV keyword list',
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Path of result CSV file',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=309 ;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `user_id`, `name`, `value`) VALUES
(127, 1, 'google', '0'),
(128, 1, 'yahoo', '0'),
(129, 1, 'pg', '0'),
(130, 1, 'smartphone', '0'),
(131, 1, 'adwords', '0'),
(132, 1, 'normal', '0'),
(133, 1, 'stop_auto', '0'),
(134, 1, 'running_time', '1'),
(135, 1, 'email', ''),
(136, 1, 'schedule', 'yearly'),
(137, 1, 'week_day', 'sunday'),
(138, 1, 'date', '1'),
(139, 1, 'month', '1'),
(140, 1, 'attached_type', '1'),
(295, 4, 'google', '0'),
(296, 4, 'yahoo', '0'),
(297, 4, 'pc', '0'),
(298, 4, 'smartphone', '0'),
(299, 4, 'adwords', '0'),
(300, 4, 'normal', '0'),
(301, 4, 'stop_auto', '0'),
(302, 4, 'running_time', '1'),
(303, 4, 'email', ''),
(304, 4, 'schedule', 'daily'),
(305, 4, 'week_day', 'sunday'),
(306, 4, 'date', '7'),
(307, 4, 'month', '1'),
(308, 4, 'attached_type', 'csv');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `total_search` int(10) DEFAULT NULL,
  `last_search` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created`, `modified`, `is_active`, `role`) VALUES
(1, NULL, 'admin', '30d32f48f525dabb40c4e99c9fb34c6121ebd350', '2013-07-10 11:04:04', '2013-07-10 11:04:04', 1, 'super_admin'),
(3, 'test test', 'adminx', 'f6d211af32e216edab7e538dfb3cd81d77ec5f33', '2013-07-10 11:04:04', '2013-07-10 11:01:02', 1, 'user'),
(4, 'new admin', 'admins', '790ddd2c91513d29e519e161545b3c71234c4563', '2013-07-10 11:04:04', '2013-07-10 11:04:35', 1, 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
