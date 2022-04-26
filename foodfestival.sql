-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2022 at 07:52 AM
-- Server version: 5.7.18-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodfestival`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_config`
--

DROP TABLE IF EXISTS `admin_config`;
CREATE TABLE IF NOT EXISTS `admin_config` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `config_key` varchar(40) NOT NULL,
  `config_value` varchar(200) NOT NULL,
  `value_unit` varchar(20) NOT NULL,
  `scope` enum('All','Student','Author','Admin','Teacher') NOT NULL DEFAULT 'All' COMMENT 'this will define value is applicable for which scope.',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_testdata` varchar(3) NOT NULL DEFAULT 'yes' COMMENT 'dev means non garbaged dummy data',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `is_testdata` varchar(3) NOT NULL DEFAULT 'yes',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=No, 1=yes',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `full_name`, `email_id`, `contact_no`, `message`, `is_testdata`, `is_delete`, `created_date`, `modified_date`) VALUES
(1, 'test', 'test1@gmail.com', '098764322', 'sjhdsh ifjdesik', 'yes', 0, '2022-04-26 06:55:20', '0000-00-00 00:00:00'),
(2, 'test', 'test1@gmail.com', '0987654321', 'jkgjdfk', 'yes', 0, '2022-04-26 07:00:39', '0000-00-00 00:00:00'),
(3, 'Akshiiii', 'abo@narola.email', '0954321223', 'dfghjkfghjfg', 'yes', 0, '2022-04-26 07:01:25', '0000-00-00 00:00:00'),
(4, 'test', 'akshi@gmail.com', '0987654321', 'gfttutyu', 'yes', 0, '2022-04-26 07:02:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_testdata` varchar(3) NOT NULL DEFAULT 'yes' COMMENT 'dev means non garbaged dummy data',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`, `created_date`, `modified_date`, `is_delete`, `is_testdata`) VALUES
(1, 'Dotnet', '2022-04-19 12:48:07', '0000-00-00 00:00:00', 0, 'dev'),
(2, 'Mobile', '2022-04-19 12:52:20', '0000-00-00 00:00:00', 0, 'dev'),
(3, 'PHP', '2022-04-19 13:04:38', '0000-00-00 00:00:00', 0, 'dev'),
(4, 'ROR', '2022-04-19 13:07:44', '0000-00-00 00:00:00', 0, 'dev'),
(5, 'Python', '2022-04-19 13:07:45', '0000-00-00 00:00:00', 0, 'dev'),
(6, 'Java', '2022-04-19 13:07:45', '0000-00-00 00:00:00', 0, 'dev'),
(7, 'HR', '2022-04-19 13:07:45', '0000-00-00 00:00:00', 0, 'dev'),
(8, 'Finance', '2022-04-19 13:07:45', '0000-00-00 00:00:00', 0, 'dev'),
(9, 'Support', '2022-04-19 13:07:45', '0000-00-00 00:00:00', 0, 'dev'),
(10, 'MDM', '2022-04-19 13:07:46', '0000-00-00 00:00:00', 0, 'dev'),
(11, 'QA', '2022-04-19 13:07:46', '0000-00-00 00:00:00', 0, 'dev'),
(12, 'Sales and Marketting', '2022-04-19 13:07:46', '0000-00-00 00:00:00', 0, 'dev'),
(13, 'Digital Marketing', '2022-04-19 13:07:46', '0000-00-00 00:00:00', 0, 'dev'),
(14, 'Others', '2022-04-19 13:07:46', '0000-00-00 00:00:00', 0, 'dev'),
(15, 'Design', '2022-04-20 11:27:05', '0000-00-00 00:00:00', 0, 'dev'),
(16, 'Devops', '2022-04-20 11:27:28', '0000-00-00 00:00:00', 0, 'dev'),
(17, 'JS', '2022-04-20 11:28:38', '0000-00-00 00:00:00', 0, 'dev'),
(18, 'Management', '2022-04-20 11:29:55', '0000-00-00 00:00:00', 0, 'dev');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `stall_id` int(11) NOT NULL,
  `stall_number` int(11) UNSIGNED DEFAULT NULL,
  `item_name` varchar(256) DEFAULT '0',
  `item_price` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_testdata` varchar(3) NOT NULL DEFAULT 'yes' COMMENT 'dev means non garbaged dummy data',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `stall_id` (`stall_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `user_id`, `stall_id`, `stall_number`, `item_name`, `item_price`, `created_date`, `modified_date`, `is_testdata`, `is_delete`) VALUES
(1, 16, 1, 1, 'Khichu', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(2, 41, 2, 2, 'Water Bottle', '10', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(3, 41, 2, 2, 'Cold drinks', '10', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(4, 18, 3, 3, 'Corn Chaat', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(5, 18, 3, 3, 'Cold Chinese Bhel', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(6, 18, 3, 3, 'Collegian bhel', '15', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(7, 18, 3, 3, 'Mamra bhel', '25', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(8, 19, 4, 4, 'Peanut Salad', '30', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(9, 19, 4, 4, 'Paneer Salad', '30', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(10, 19, 4, 4, 'Chole Salad', '30', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(11, 19, 4, 4, 'Vanilla Salad', '40', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(12, 20, 5, 5, 'Dahi Bhalla', '30', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(13, 20, 5, 5, 'Coco', '40', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(14, 21, 6, 6, 'Cupcakes', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(15, 21, 6, 6, 'Cheese Cake', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(16, 21, 6, 6, 'Cake Pops', '50', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(17, 21, 6, 6, 'Cakesicles', '40', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(18, 22, 7, 7, 'Khichu', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(19, 23, 8, 8, 'Pazham Pori', '40', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(20, 23, 8, 8, 'Putt', '30', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(21, 23, 8, 8, 'Mendu Vada', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(22, 23, 8, 8, 'Idli Sambhar', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(23, 24, 9, 9, 'Basket Chaat', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(24, 24, 9, 9, 'Cone Chaat', '30', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(25, 25, 10, 10, 'Rotwich', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(26, 26, 11, 11, 'Basket Chaat', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(27, 26, 11, 11, 'Cone Chaat', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(28, 27, 12, 12, 'Open Toast', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(29, 28, 13, 13, 'Cold Coco', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(30, 29, 14, 14, 'Frankie', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(31, 29, 14, 14, 'Cold Kulfi', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(32, 30, 15, 15, 'Jamnagar\'s Special Tikha Ghughra', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(33, 31, 16, 16, 'Corn items', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(34, 32, 17, 17, 'SP. COLD COCO', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(35, 32, 17, 17, 'Badam shake', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(36, 33, 18, 18, 'Monaco chaat', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(37, 33, 18, 18, 'Monaco Pizza', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(38, 35, 19, 19, 'Veg Sandwich', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(39, 36, 20, 20, 'Sindhi Dal Pakwan', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(40, 37, 21, 21, 'Affogato - Desert', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(41, 37, 21, 21, 'Dadam Dana with Sting Energy Drink', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(42, 37, 21, 21, 'Safarjan Tukda with B Fizz', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(43, 38, 22, 22, 'Sandwich', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(44, 38, 22, 22, 'Dessert', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(45, 38, 22, 22, 'Potato Twister', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(46, 39, 23, 23, 'PAAN', '0', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(47, 5, 24, 24, 'Mexican Rice', '20', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(48, 40, 24, 24, 'Mocktail', '30', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(49, 2, 25, 25, 'Sweet corn Bhel ', '', '2022-04-21 12:11:17', '0000-00-00 00:00:00', 'dev', 0),
(50, 2, 25, 25, 'Corn Chat', '012', '2022-04-21 12:11:17', '0000-00-00 00:00:00', 'dev', 0),
(51, 45, 27, 27, 'Sandwich', '30', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'yes', 0),
(52, 45, 27, 27, 'Veg Sandwich', '40', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'yes', 0),
(53, 44, 27, NULL, 'Test Sandwich', '20', '2022-04-25 09:53:37', '0000-00-00 00:00:00', 'yes', 1),
(54, 44, 27, NULL, 'Test Sandwich', '20', '2022-04-25 10:05:52', '0000-00-00 00:00:00', 'yes', 1),
(55, 44, 27, NULL, 'Sandwich', '30', '2022-04-25 10:11:47', '0000-00-00 00:00:00', 'yes', 1),
(56, 44, 27, NULL, 'Veg Sandwich', '40', '2022-04-25 10:15:51', '0000-00-00 00:00:00', 'yes', 1),
(57, 44, 27, NULL, 'Vadapau', '40', '2022-04-25 10:31:03', '0000-00-00 00:00:00', 'yes', 0),
(58, 44, 27, NULL, 'Vadapau', '40', '2022-04-25 10:32:43', '0000-00-00 00:00:00', 'yes', 1),
(59, 44, 27, NULL, 'Vadapau', '40', '2022-04-25 11:57:59', '0000-00-00 00:00:00', 'yes', 0),
(60, 44, 27, NULL, 'Vadapau', '40', '2022-04-25 12:14:56', '0000-00-00 00:00:00', 'yes', 0),
(61, 44, 27, NULL, 'Vadapau', '40', '2022-04-25 12:29:18', '0000-00-00 00:00:00', 'yes', 0),
(62, 44, 27, NULL, 'Vadapau', '40', '2022-04-25 12:32:24', '0000-00-00 00:00:00', 'yes', 0),
(63, 44, 27, NULL, 'Vadapau', '40', '2022-04-25 12:32:35', '0000-00-00 00:00:00', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_unique_id` varchar(50) DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `stall_id` int(11) NOT NULL,
  `stall_number` int(11) DEFAULT NULL,
  `item_id` int(11) UNSIGNED NOT NULL,
  `qty` int(11) DEFAULT '0',
  `order_price` int(11) DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_testdata` varchar(3) NOT NULL DEFAULT 'yes' COMMENT 'dev means non garbaged dummy data',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_unique_id`, `user_id`, `stall_id`, `stall_number`, `item_id`, `qty`, `order_price`, `created_date`, `modified_date`, `is_testdata`, `is_delete`) VALUES
(1, '#000001', 4, 25, 25, 1, 2, 40, '2022-04-22 06:19:28', '0000-00-00 00:00:00', 'yes', 0),
(2, '#000002', 10, 2, 2, 6, 3, 45, '2022-04-22 06:20:46', '0000-00-00 00:00:00', 'yes', 0),
(3, '#000003', 4, 4, 4, 8, 2, 50, '2022-04-22 06:21:36', '0000-00-00 00:00:00', 'yes', 0),
(4, '#000004', 4, 3, 3, 8, 2, 50, '2022-04-22 06:22:11', '0000-00-00 00:00:00', 'yes', 0),
(5, '#000005', 10, 7, 7, 8, 2, 50, '2022-04-22 06:22:40', '0000-00-00 00:00:00', 'yes', 0),
(6, '#000006', 4, 2, 2, 6, 3, 45, '2022-04-22 06:20:46', '0000-00-00 00:00:00', 'yes', 0),
(7, '#000007', 4, 2, 2, 2, 3, 45, '2022-04-22 06:20:46', '0000-00-00 00:00:00', 'yes', 0),
(8, '#000007', 44, 27, NULL, 51, 2, 60, '2022-04-25 04:32:17', '0000-00-00 00:00:00', 'yes', 0),
(9, '#000008', 44, 27, NULL, 51, 3, 90, '2022-04-25 04:37:03', '0000-00-00 00:00:00', 'yes', 0),
(10, '#000010', 44, 27, NULL, 51, 2, 60, '2022-04-25 07:19:12', '0000-00-00 00:00:00', 'yes', 0),
(11, '#000011', 44, 27, NULL, 52, 2, 20, '2022-04-25 07:19:12', '0000-00-00 00:00:00', 'yes', 0),
(12, '#000012', 44, 27, NULL, 51, 4, 120, '2022-04-25 07:20:39', '0000-00-00 00:00:00', 'yes', 0),
(13, '#000013', 44, 27, NULL, 52, 3, 30, '2022-04-25 07:20:39', '0000-00-00 00:00:00', 'yes', 0),
(14, '#000014', 44, 27, NULL, 51, 6, 180, '2022-04-25 07:21:29', '0000-00-00 00:00:00', 'yes', 0),
(15, '#000015', 44, 27, NULL, 52, 3, 30, '2022-04-25 07:21:29', '0000-00-00 00:00:00', 'yes', 0),
(16, '#000016', 44, 27, NULL, 51, 1, 30, '2022-04-25 07:23:14', '0000-00-00 00:00:00', 'yes', 0),
(17, '#000017', 44, 27, NULL, 52, 1, 10, '2022-04-25 07:23:14', '0000-00-00 00:00:00', 'yes', 0),
(18, '#16459472', 44, 27, NULL, 51, 3, 90, '2022-04-25 07:25:21', '0000-00-00 00:00:00', 'yes', 0),
(19, '#47714178', 44, 27, NULL, 51, 3, 90, '2022-04-25 07:33:42', '0000-00-00 00:00:00', 'yes', 0),
(20, '#46341123', 44, 27, NULL, 51, 3, 90, '2022-04-25 07:36:02', '0000-00-00 00:00:00', 'yes', 0),
(21, '#46341123', 44, 27, NULL, 52, 2, 20, '2022-04-25 07:36:02', '0000-00-00 00:00:00', 'yes', 0),
(22, '#38923579', 44, 27, NULL, 51, 3, 90, '2022-04-25 08:41:11', '0000-00-00 00:00:00', 'yes', 0),
(23, '#38923579', 44, 27, NULL, 52, 4, 40, '2022-04-25 08:41:11', '0000-00-00 00:00:00', 'yes', 0),
(24, '#67563815', 53, 27, NULL, 51, 1, 30, '2022-04-25 08:59:34', '0000-00-00 00:00:00', 'yes', 0),
(25, '#67563815', 53, 27, NULL, 52, 1, 10, '2022-04-25 08:59:34', '0000-00-00 00:00:00', 'yes', 0),
(26, '#40829378', 53, 3, NULL, 4, 1, 20, '2022-04-26 07:19:21', '0000-00-00 00:00:00', 'dev', 0),
(27, '#40829378', 53, 3, NULL, 5, 1, 20, '2022-04-26 07:19:21', '0000-00-00 00:00:00', 'dev', 0),
(28, '#40829378', 53, 3, NULL, 6, 1, 15, '2022-04-26 07:19:21', '0000-00-00 00:00:00', 'dev', 0),
(29, '#40829378', 53, 3, NULL, 7, 2, 50, '2022-04-26 07:19:21', '0000-00-00 00:00:00', 'dev', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stall_owner`
--

DROP TABLE IF EXISTS `stall_owner`;
CREATE TABLE IF NOT EXISTS `stall_owner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `stall_number` int(11) DEFAULT '0',
  `stall_qr_code` varchar(100) DEFAULT NULL,
  `stall_name` varchar(255) NOT NULL,
  `total_orders` int(11) DEFAULT '0',
  `total_earned` int(11) DEFAULT '0',
  `total_members` int(11) DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_testdata` varchar(3) NOT NULL DEFAULT 'yes' COMMENT 'dev means non garbaged dummy data',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `stall_number` (`stall_number`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stall_owner`
--

INSERT INTO `stall_owner` (`id`, `user_id`, `stall_number`, `stall_qr_code`, `stall_name`, `total_orders`, `total_earned`, `total_members`, `created_date`, `modified_date`, `is_testdata`, `is_delete`) VALUES
(1, 16, 1, NULL, 'Nitesh-Khichu', 0, 0, 0, '2022-04-22 07:02:40', '2022-04-22 07:02:40', 'yes', 0),
(2, 41, 2, 'stall-2-PratikShah-psh.png', 'Pratik-Coldrinks', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(3, 18, 3, 'stall-3-VishvaGonawala-vka.png', 'Vishva-bhel', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(4, 19, 4, 'stall-4-PrernaGupta-pg.png', 'Prerna-Salads', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(5, 20, 5, 'stall-5-SonalNarola-sn.png', 'Sonal-DahiBhalla', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(6, 21, 6, 'stall-6-NishiParmar-nip.png', 'Nishi-cupcakes', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(7, 22, 7, 'stall-7-NidhiPatel-nsp.png', 'Nidhi-Khichu', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(8, 23, 8, 'stall-8-WinsunMichael-wm.png', 'Winsun-S.Indian', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(9, 24, 9, 'stall-9-DharatiAjudiya-dka.png', 'Dharati-Chaat', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(10, 25, 10, 'stall-10-KrishnaPatel-kpa.png', 'Krishna-Rotwich', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(11, 26, 11, 'stall-11-ShwetaMehta-sme.png', 'Shweta-Chaat', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(12, 27, 12, 'stall-12-ArpitBhayawala-ab.png', 'Arpit-Open Toast', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(13, 28, 13, 'stall-13-DarshanDakoria-dda.png', 'Darshan-ColdCoco', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(14, 29, 14, 'stall-14-KrunalKantharia-krk.png', 'Krunal-frankie', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(15, 30, 15, 'stall-15-ChandreshVekariya-cv.png', 'Chandresh-Tikha ghughra', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(16, 31, 16, 'stall-16-PriyalBhavsar-pbh.png', 'Priyal-CornCorner', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(17, 32, 17, 'stall-17-DivyeshKashiyani-djk.png', 'Divyesh-Shakes', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(18, 33, 18, 'stall-18-PalakNaik-pkn.png', 'Palak-MonacoMains', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(19, 35, 19, 'stall-19-AnkitaChaudhari-aac.png', 'Ankita-Sandwich', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(20, 36, 20, 'stall-20-KaranChandwani-knc.png', 'Karan-SindhiDalPakwan', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(21, 37, 21, 'stall-21-ViralPatel-vpt.png', 'Viral-Desserts', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(22, 38, 22, 'stall-22-RajChauhan-rnc.png', 'Raj-Sandwich', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(23, 39, 23, 'stall-23-VishalPatel-vhp.png', 'Vishal-Pan', 0, 0, 0, '2020-04-22 12:33:00', '0000-00-00 00:00:00', 'dev', 0),
(24, 40, 24, NULL, 'Hezal-Mexicanmain', 0, 0, 0, '2022-04-22 07:04:19', '2022-04-22 07:04:19', 'yes', 0),
(27, 45, 27, 'stall-27-Jay-Sandwich-jp', 'Jay-Sandwich', 0, 1090, 0, '2022-04-22 07:02:40', '2022-04-22 07:02:40', 'yes', 0),
(28, 44, 0, 'stall-2-arp-khichu.png', 'demo stall', 0, 0, 0, '2022-04-26 04:00:29', '2022-04-26 04:00:29', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `spark_id` varchar(256) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `wallet_balance` int(11) NOT NULL DEFAULT '0',
  `wallet_remaining` int(11) NOT NULL DEFAULT '0',
  `member_visited` int(11) DEFAULT '0' COMMENT '0 means did not visit',
  `role_id` int(10) UNSIGNED DEFAULT '1' COMMENT '0-Admin,1=stallOwner,2=visitor',
  `dept_id` int(11) UNSIGNED DEFAULT NULL,
  `qr_code` varchar(100) DEFAULT NULL,
  `user_status` enum('active','blocked','inactive') DEFAULT 'active',
  `device_type` varchar(10) DEFAULT NULL,
  `device_token` varchar(80) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_testdata` varchar(3) NOT NULL DEFAULT 'yes' COMMENT 'dev means non garbaged dummy data',
  PRIMARY KEY (`id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email_id`, `spark_id`, `password`, `contact_number`, `wallet_balance`, `wallet_remaining`, `member_visited`, `role_id`, `dept_id`, `qr_code`, `user_status`, `device_type`, `device_token`, `created_date`, `modified_date`, `is_delete`, `is_testdata`) VALUES
(2, 'Abhay', 'Patel', 'abp@narola.email', 'abp', 'password', '8460533082', 0, 0, 0, 2, 1, '2-AbhayPatel-abp.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(3, 'Akshay', 'Sontakke', 'aso@narola.email', 'aso', 'password', '8087642002', 0, 0, 0, 2, 1, '3-AkshaySontakke-aso.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(4, 'Aman', 'Lodha', 'aml@narola.email', 'aml', 'password', '8866396519', 0, 0, 0, 2, 1, '4-AmanLodha-aml.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(5, 'Aman', 'Sharma', 'ams@narola.email', 'ams', 'password', '8306846936', 0, 0, 0, 2, 1, '5-AmanSharma-ams.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(6, 'Amee', 'Padsala', 'app@narola.email', 'app', 'password', '7069228806', 0, 0, 0, 2, 1, '6-AmeePadsala-app.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(7, 'Ankita', 'Parekh', 'anp@narola.email', 'anp', 'password', '9023924858', 0, 0, 0, 2, 1, '7-AnkitaParekh-anp.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(8, 'Atul', 'Singh', 'aks@narola.email', 'aks', 'password', '', 0, 0, 0, 2, 1, '8-AtulSingh-aks.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(9, 'Bhupendra', 'Rai', 'bcr@narola.email', 'bcr', 'password', '8866770646', 0, 0, 0, 2, 1, '9-BhupendraRai-bcr.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(10, 'Chirag', 'Limbachiya', 'cpl@narola.email', 'cpl', 'password', '9099035240', 0, 0, 0, 2, 1, '10-ChiragLimbachiya-cpl.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(11, 'Erik', 'Khanpara', 'ejk@narola.email', 'ejk', 'password', '', 0, 0, 0, 2, 1, '11-ErikKhanpara-ejk.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(12, 'Grishma', 'Doshi', 'gd@narola.email', 'gd', 'password', '8758444954', 0, 0, 0, 2, 1, '12-GrishmaDoshi-gd.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(13, 'Himani', 'Patel', 'hip@narola.email', 'hip', 'password', '9426409591', 0, 0, 0, 2, 1, '13-HimaniPatel-hip.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(14, 'Jigar', 'Khanpara', 'jkh@narola.email', 'jkh', 'password', '7874785533', 0, 0, 0, 2, 1, '14-JigarKhanpara-jkh.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(15, 'Jignesh', 'Jadav', 'jj@narola.email', 'jj', 'password', '9586140191', 0, 0, 0, 2, 1, '15-JigneshJadav-jj.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(16, 'Nitesh', 'Gujar', 'ngu@narola.email', 'ngu', 'password', '8866924934', 0, 0, 0, 1, 2, '16-NiteshGujar-ngu.png', 'active', '1', 'testPostman', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(18, 'Vishva', 'Gonawala', 'vkapadia960@gmail.com', 'vka', 'password', '7984509514', 0, 0, 0, 1, 2, '18-VishvaGonawala-vka.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(19, 'Prerna', 'Gupta', 'pg@narola.email', 'pg', 'password', '8128998643', 500, 0, 0, 1, 2, '19-PrernaGupta-pg.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(20, 'Sonal', 'Narola', 'sn@narola.email', 'sn', 'password', '8905897201', 0, 0, 0, 1, 13, '20-SonalNarola-sn.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(21, 'Nishi', 'Parmar', 'nip@narola.email', 'nip', 'password', '9106321198', 0, 0, 0, 1, 17, '21-NishiParmar-nip.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(22, 'Nidhi', 'Patel', 'nsp@Narola.email', 'nsp', 'password', '8758874664', 0, 0, 0, 1, 12, '22-NidhiPatel-nsp.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(23, 'Winsun', 'Michael', 'winsun@narola.email', 'wm', 'password', '9769674083', 0, 0, 0, 1, 7, '23-WinsunMichael-wm.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(24, 'Dharati', 'Ajudiya', 'dka@narola.emial', 'dka', 'password', '9638495515', 0, 0, 0, 1, 6, '24-DharatiAjudiya-dka.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(25, 'Krishna', 'Patel', 'kpa@narola.email', 'kpa', 'password', '7405504470', 0, 0, 0, 1, 2, '25-KrishnaPatel-kpa.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(26, 'Shweta', 'Mehta', 'sme@narola.email', 'sme', 'password', '9429555257', 0, 0, 0, 1, 6, '26-ShwetaMehta-sme.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(27, 'Arpit', 'Bhayawala', 'ab@narola.email', 'ab', 'password', '8460776742', 0, 0, 1, 1, 17, '27-ArpitBhayawala-ab.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(28, 'Darshan', 'Dakoria', 'dda@narola.email', 'dda', 'password', '7984344565', 0, 0, 0, 1, 12, '28-DarshanDakoria-dda.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(29, 'Krunal', 'Kantharia', 'krk.narola@gmail.com', 'krk', 'password', '7405504508', 0, 0, 0, 1, 12, '29-KrunalKantharia-krk.png', 'active', '', '', '2019-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(30, 'Chandresh', 'Vekariya', 'cv@narola.email', 'cv', 'password', '9537690701', 0, 0, 1, 1, 12, NULL, 'active', '', '', '2020-04-22 12:33:00', '0000-00-00 00:00:00', 1, 'dev'),
(31, 'Priyal', 'Bhavsar', 'pbh@narola.email', 'pbh', 'password', '7600536753', 0, 0, 2, 1, 17, NULL, 'active', '', '', '2021-04-22 12:33:00', '0000-00-00 00:00:00', 2, 'dev'),
(32, 'Divyesh', 'Kashiyani', 'djk@narola.email', 'djk', 'password', '9978193270', 0, 0, 3, 1, 11, NULL, 'active', '', '', '2022-04-22 12:33:00', '0000-00-00 00:00:00', 3, 'dev'),
(33, 'Palak', 'Naik', 'pkn@narola.email', 'pkn', 'password', '7046470805', 0, 0, 4, 1, 11, NULL, 'active', '', '', '2023-04-22 12:33:00', '0000-00-00 00:00:00', 4, 'dev'),
(35, 'Ankita', 'Chaudhari', 'aac@narola.email', 'aac', 'password', '9167537605', 0, 0, 6, 1, 11, NULL, 'active', '', '', '2025-04-22 12:33:00', '0000-00-00 00:00:00', 6, 'dev'),
(36, 'Karan', 'Chandwani', 'acct2.narola@gmail.com', 'knc', 'password', '7405295878', 0, 0, 7, 1, 8, NULL, 'active', '', '', '2026-04-22 12:33:00', '0000-00-00 00:00:00', 7, 'dev'),
(37, 'Viral', 'Patel', 'vpt@narola.email', 'vpt', 'password', '9824819294', 0, 0, 8, 1, 3, NULL, 'active', '', '', '2027-04-22 12:33:00', '0000-00-00 00:00:00', 8, 'dev'),
(38, 'Raj', 'Chauhan', 'rnc@narola.email', 'rnc', 'password', '9099723335', 0, 0, 9, 1, 12, NULL, 'active', '', '', '2028-04-22 12:33:00', '0000-00-00 00:00:00', 9, 'dev'),
(39, 'Vishal', 'Patel', 'vhp@narola.email', 'vhp', 'password', '8511587607', 0, 0, 10, 1, 12, NULL, 'active', '', '', '2029-04-22 12:33:00', '0000-00-00 00:00:00', 10, 'dev'),
(40, 'Hezal', 'Tank', 'hta@narola.email', 'hta', 'password', '9409198184', 0, 0, 11, 1, 12, '40-HezalTank-hta.png', 'active', '', '', '2030-04-22 12:33:00', '0000-00-00 00:00:00', 0, 'dev'),
(41, 'Pratik', 'Shah', 'psh@narola.email', 'psh', 'password', '9033687769', 510, 0, 0, 1, 17, '41-PratikShah-psh.png', 'active', '1', 'testPostman', '2022-04-20 12:50:07', '0000-00-00 00:00:00', 0, 'dev'),
(42, 'Admin', 'Narola', 'admin@narola.email', 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, 0, 0, 0, 18, '42-AdminNarola-admin.png', 'active', NULL, NULL, '2022-04-20 13:26:49', '0000-00-00 00:00:00', 0, 'dev'),
(43, 'Shivani', 'Test', 'sna@narola.email', 'sna', NULL, NULL, 985, 0, 0, 1, 2, '43-ShivaniTest-sna.png', 'active', 'IOS', '', '2022-04-21 13:00:13', '0000-00-00 00:00:00', 0, 'dev'),
(44, 'Arti', 'Patelowner', 'arp@narola.email', 'arp', 'password', '8980320408', 0, 0, 5, 1, 2, '44-ArtiPatel-at.png', 'active', '1', '123456', '2022-04-22 06:46:51', '0000-00-00 00:00:00', 0, 'yes'),
(45, 'Jay', 'Patel', 'jap@narola.email', 'jp', 'password', NULL, 0, 0, 5, 1, 2, NULL, 'active', '1', '123456', '2022-04-22 09:43:25', '0000-00-00 00:00:00', 0, 'yes'),
(46, 'Arti', 'Patel', 'test@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '46-ArtiPatel-at', 'active', '1', 'testPostman', '2022-04-25 06:14:49', '0000-00-00 00:00:00', 0, 'yes'),
(47, 'Twinkle', 'Mali', 'tma@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '47-JayPatel-at', 'active', '1', 'testPostman', '2022-04-25 06:21:59', '0000-00-00 00:00:00', 0, 'yes'),
(48, 'Paneri', 'Shah', 'pds@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '48-PaneriShah-at', 'active', '1', 'testPostman', '2022-04-25 06:24:40', '0000-00-00 00:00:00', 0, 'yes'),
(49, 'hpv', 'test', 'hpv@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '49-hpvtest-at', 'active', '0', '83604db7-e2bf-4d85-a540-0c97d57374b5', '2022-04-25 06:38:40', '0000-00-00 00:00:00', 0, 'yes'),
(50, 'hpv', 'test', 'hpv@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '50-hpvtest-at', 'active', '0', '63177b1c-1de3-4d3b-9a96-5aec6ed40113', '2022-04-25 06:38:40', '0000-00-00 00:00:00', 0, 'yes'),
(51, 'yma', 'narola', 'yma@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '51-ymanarola-at', 'active', '0', 'a6432f58-e8a4-49d3-bcc5-90131ec9388a', '2022-04-25 06:57:28', '0000-00-00 00:00:00', 0, 'yes'),
(52, 'yma', 'narola', 'yma@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '52-ymanarola-at', 'active', '0', '5ebd2040-4ab7-4bf2-850b-33b48425347c', '2022-04-25 06:57:28', '0000-00-00 00:00:00', 0, 'yes'),
(53, 'jsp', 'narola', 'jsp@narola.email', 'jsp', 'password', '7069527920', 400, 0, 0, 2, 2, '53-jspnarola-at', 'active', '1', '123456', '2022-04-25 07:00:28', '0000-00-00 00:00:00', 0, 'yes'),
(54, 'jsp', 'narola', 'jsp@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '54-jspnarola-at', 'inactive', '0', 'a24d6ee1-4621-4ac1-913b-b32cfcf780d4', '2022-04-25 07:00:28', '0000-00-00 00:00:00', 0, 'yes'),
(55, 'Arti', 'Patel', 'test22@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '55-ArtiPatel-at', 'active', '1', 'testPostman', '2022-04-25 07:02:44', '0000-00-00 00:00:00', 0, 'yes'),
(56, 'dpp', 'narola', 'dpp@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '56-dppnarola-at', 'active', '0', '29bee538-4ea8-4d32-8cf2-c1357e3d7adb', '2022-04-25 07:03:32', '0000-00-00 00:00:00', 0, 'yes'),
(57, 'dpp', 'narola', 'dpp@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '57-dppnarola-at', 'active', '0', '1f7ee837-b56e-4dad-a98f-92469c8fb98e', '2022-04-25 07:03:32', '0000-00-00 00:00:00', 0, 'yes'),
(58, 'test', 'sas', 'test21@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '58-testsas-at', 'active', '0', 'cbc2e801-4cc5-4506-8d87-3445823bc286', '2022-04-25 07:15:36', '0000-00-00 00:00:00', 0, 'yes'),
(59, 'test', 'sas', 'test21@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '59-testsas-at', 'active', '0', '0c00c1c3-39ea-46fe-9ef2-2209469fbfc4', '2022-04-25 07:15:36', '0000-00-00 00:00:00', 0, 'yes'),
(60, 'test', '12', 'test44@gmail.com', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '60-test12-at', 'active', '0', 'c0cb0504-fe04-4bff-9c58-80b639218d8e', '2022-04-25 08:58:00', '0000-00-00 00:00:00', 0, 'yes'),
(61, 'test', '12', 'test44@gmail.com', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '61-test12-at', 'active', '0', 'd09f4ca7-97a9-4095-ace9-057b7c940bf3', '2022-04-25 08:58:00', '0000-00-00 00:00:00', 0, 'yes'),
(62, 'jsp', 'test', 'jsp12@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '62-jsptest-at', 'active', '0', '2bc397dd-3e0c-4917-8b17-87b3441fdb6a', '2022-04-25 09:14:18', '0000-00-00 00:00:00', 0, 'yes'),
(63, 'jsp', 'test', 'jsp12@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '63-jsptest-at', 'active', '0', 'abdbf7a4-4503-451d-a40f-2f459e8a3682', '2022-04-25 09:14:18', '0000-00-00 00:00:00', 0, 'yes'),
(64, 'test', 'test', 'test111@narola.email', 'hpv', 'password', NULL, 0, 0, 0, 2, 2, '64-testtest-at', 'active', '0', '86b64188-d44f-4355-91e9-c3c141e87bda', '2022-04-25 09:17:18', '0000-00-00 00:00:00', 0, 'yes'),
(65, 'test', 'test', 'test111@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '65-testtest-at', 'active', '0', '2079342a-04cf-418d-a2bb-ca3f65d5cc22', '2022-04-25 09:17:18', '0000-00-00 00:00:00', 0, 'yes'),
(66, 'Vasu', 'P.', 'vp@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '66-VasuP.-at', 'active', '1', 'testPostman', '2022-04-25 11:12:19', '0000-00-00 00:00:00', 0, 'yes'),
(67, 'test', 'owner', 'test55@narola.email', 'hpv', 'password', '8980320408', 0, 0, 0, 2, 2, '67-testowner-at', 'active', '0', '93fbdc95-042c-42d4-bea0-74a54ab0119e', '2022-04-26 05:17:41', '0000-00-00 00:00:00', 0, 'yes'),
(68, 'test', 'owner', 'test55@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '68-testowner-at', 'active', '0', '3ed06913-9b26-486e-a8f6-9927ec3c38de', '2022-04-26 05:17:41', '0000-00-00 00:00:00', 0, 'yes'),
(69, 'test', '88', 'test88@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '69-test88-at', 'active', '0', 'd256c19b-66fd-4590-acb0-7e316ce4c99c', '2022-04-26 05:23:07', '0000-00-00 00:00:00', 0, 'yes'),
(70, 'test', '88', 'test88@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '70-test88-at', 'active', '0', '6b99bf06-f9a9-41ff-9296-eb8c6e717e59', '2022-04-26 05:23:07', '0000-00-00 00:00:00', 0, 'yes'),
(71, 'test', '12', 'test12@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '71-test12-at', 'active', '0', '123456', '2022-04-26 05:26:35', '0000-00-00 00:00:00', 0, 'yes'),
(72, 'test', '12', 'test12@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '72-test12-at', 'active', '0', '123456', '2022-04-26 05:26:35', '0000-00-00 00:00:00', 0, 'yes'),
(73, 'test', '00', 'test00@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '73-test00-at', 'active', '0', '123456', '2022-04-26 05:28:38', '0000-00-00 00:00:00', 0, 'yes'),
(74, 'test', '00', 'test00@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '74-test00-at', 'active', '0', '123456', '2022-04-26 05:28:39', '0000-00-00 00:00:00', 0, 'yes'),
(75, 'test', '11', 'test554@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '75-test11-at', 'active', '0', '123456', '2022-04-26 05:43:44', '0000-00-00 00:00:00', 0, 'yes'),
(76, 'test', '11', 'test554@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '76-test11-at', 'active', '0', '123456', '2022-04-26 05:43:44', '0000-00-00 00:00:00', 0, 'yes'),
(77, 'ngu', 'narola', 'ngu12@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '77-ngunarola-at', 'active', '0', '123456', '2022-04-26 05:47:21', '0000-00-00 00:00:00', 0, 'yes'),
(78, 'ngu', 'narola', 'ngu12@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '78-ngunarola-at', 'active', '0', '123456', '2022-04-26 05:47:21', '0000-00-00 00:00:00', 0, 'yes'),
(79, 'test', '23', 'testtest@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '79-test23-at', 'active', '0', '123456', '2022-04-26 05:48:16', '0000-00-00 00:00:00', 0, 'yes'),
(80, 'test', '23', 'testtest@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '80-test23-at', 'active', '0', '123456', '2022-04-26 05:48:16', '0000-00-00 00:00:00', 0, 'yes'),
(81, 'test', 'test', 'test65@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '81-testtest-at', 'active', '0', '123456', '2022-04-26 05:51:50', '0000-00-00 00:00:00', 0, 'yes'),
(82, 'test', 'test', 'test65@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '82-testtest-at', 'active', '0', '123456', '2022-04-26 05:51:50', '0000-00-00 00:00:00', 0, 'yes'),
(83, 'test', '34', 'test32@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '83-test34-at', 'active', '0', '123456', '2022-04-26 05:55:10', '0000-00-00 00:00:00', 0, 'yes'),
(84, 'test', '34', 'test32@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '84-test34-at', 'active', '0', '123456', '2022-04-26 05:55:10', '0000-00-00 00:00:00', 0, 'yes'),
(85, 'test', 'test', 'test89@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '85-testtest-at', 'active', '0', '123456', '2022-04-26 05:59:11', '0000-00-00 00:00:00', 0, 'yes'),
(86, 'test', 'test', 'test89@narola.email', NULL, 'password', NULL, 0, 0, 0, 2, NULL, '86-testtest-at', 'active', '0', '123456', '2022-04-26 05:59:11', '0000-00-00 00:00:00', 0, 'yes'),
(87, 'test', 'ets', 'test455@narola.email', 'hpv', 'password', '8980320408', 0, 0, 0, 2, 2, '87-testets-at', 'active', '0', '123456', '2022-04-26 06:01:24', '0000-00-00 00:00:00', 0, 'yes'),
(88, 'Ashish', 'Narola', 'ashish@narola.email', 'an', 'password', '852336594', 400, 0, 0, 2, 18, '88-AshishNarola-at', 'active', '1', '123456', '2022-04-26 06:33:34', '0000-00-00 00:00:00', 0, 'dev');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stall_owner`
--
ALTER TABLE `stall_owner`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_dept` FOREIGN KEY (`dept_id`) REFERENCES `department` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
