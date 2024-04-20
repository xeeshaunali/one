-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2023 at 05:40 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ctccc`
--

DROP TABLE IF EXISTS `ctccc`;
CREATE TABLE IF NOT EXISTS `ctccc` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nameappln` varchar(100) DEFAULT NULL,
  `courtname` varchar(100) DEFAULT NULL,
  `casecateg` varchar(100) DEFAULT NULL,
  `caseno` int(50) DEFAULT NULL,
  `year` varchar(15) DEFAULT NULL,
  `partyone` varchar(150) DEFAULT NULL,
  `partytwo` varchar(150) DEFAULT NULL,
  `crimeno` int(15) DEFAULT NULL,
  `crimeyear` int(15) DEFAULT NULL,
  `cell` int(100) DEFAULT NULL,
  `datedisposal` date DEFAULT NULL,
  `datehearing` date DEFAULT NULL,
  `datedelev` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `cost` int(50) DEFAULT NULL,
  `ps` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctccc`
--

INSERT INTO `ctccc` (`id`, `nameappln`, `courtname`, `casecateg`, `caseno`, `year`, `partyone`, `partytwo`, `crimeno`, `crimeyear`, `cell`, `datedisposal`, `datehearing`, `datedelev`, `status`, `cost`, `ps`) VALUES
(1, 'SearchID01PenDJ', 'DJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL),
(2, 'asass', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'saas', 'AJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'asas', 'AJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'adfsdfdfdsfdsfdsffsf', 'ADJ-I', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'zeeshan', 'ADJ-S', 'family', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Zeeshan', 'ADJ-II', 'civil', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Zeeshan', 'ADJ-I', 'criminal', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Xee', 'ADJ-I', 'criminal', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Xeeshaun', 'AJ', 'criminal', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'saad', 'ADJ-I', 'criminal', 2, '2007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'a', 'ADJ-I', 'criminal', 1, '2022', 'dfdsaf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'sadsd', 'AJ', 'criminal', 1, '2023', 'asdasd', 'sadasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'asdasd', 'ADJ-I', 'criminal', 1, '2023', 'sadds', 'dsadas', 1, 2023, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Me', 'ADJ-I', 'civil', 1, '2023', 'asdsd', 'sadasd', 1, 2023, 35656565, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'adsasd', 'AJ', 'criminal', 1, '2023', 'asdd', 'sadasd', 1, 303, 22323232, '2023-02-02', NULL, NULL, NULL, NULL, NULL),
(18, 'sdsad', 'AJ', 'criminal', 1, '20323', 'sadds', 'sadsd', 1, 2023, 2323232, '2023-02-02', '2023-02-20', NULL, NULL, NULL, NULL),
(19, 'adsasd', 'SENIOR-S', 'family', 1, '2023', '1', '1', 1, 2023, 2323232, '2023-02-02', '2023-02-02', '2023-02-20', NULL, NULL, NULL),
(20, '23232', 'ADJ-I', 'civil', 1, '2023', 'sdsdsd', 'sdsdds', 1, 2023, 2323232, '2023-02-02', '2023-02-02', '2023-02-02', 'Deleivered', NULL, NULL),
(21, 'dsasad', 'AJ', 'criminal', 1, '2023', 'asdd', 'asas', 1, 2023, 2323232, '2023-02-22', '2023-02-02', '2023-02-02', 'Deleivered', NULL, NULL),
(22, 'sasad', 'AJ', 'criminal', 1, '2023', 'sadasd', 'sadds', 1, 2023, 223232, '2023-02-22', '2222-02-02', '2023-02-02', 'Pending', NULL, NULL),
(23, 'asdasd', 'AJ', 'criminal', 1, '2023', 'sadad', 'asdas', 1, 2023, 2323232, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(24, 'Zeeshaun', 'ADJ-I', 'criminal', 1, '2023', 'asdds', 'sadsad', 1, 2023, 23235686, '0002-02-02', '0002-02-02', '0002-02-02', 'Pending', NULL, NULL),
(25, 'ali', 'AJ', 'criminal', 1, '2023', 'as', 'as', 1, 2023, 2323, '2023-02-02', '2023-02-02', '2023-02-02', 'Deleivered', NULL, NULL),
(26, 'dsdsd', 'AJ', 'criminal', 1, '2023', 'gfhgf', 'hgfhg', 1, 2023, 545454, '2023-02-02', '2023-02-02', '2023-02-02', 'Deleivered', NULL, NULL),
(27, 'asdsd', 'AJ', 'criminal', 1, '2023', 'sad', 'dsaa', 1, 3202, 23232, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(28, 'Xee', 'AJ', 'criminal', 1, '2023', 'sdsd', 'sadsad', 1, 2023, 22222, '2023-02-02', '2023-02-02', '2023-02-02', 'Deleivered', NULL, NULL),
(29, 'sdd', 'ADJ-I', 'criminal', 1, '2023', 'sdsd', '23232', 1, 2023, 23232, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(30, '1', 'AJ', 'criminal', 1, '2023', 'sdsd', 'sdsd', 1, 2023, 3232323, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(31, 'sdsd', 'AJ', 'criminal', 1, '2023', 'sdsd', 'sadsad', 1, 2023, 232323, '2023-02-02', '2023-02-20', '2023-02-02', 'Pending', NULL, NULL),
(32, 'dssd', 'AJ', 'criminal', 1, '2023', 'sdasad', 'sdsd', 1, 2023, 2323232, '2023-02-02', '2023-02-02', '2023-02-02', '', NULL, NULL),
(33, 'dsad', 'AJ', 'criminal', 1, '2023', 'saddsa', 'sd', 1, 2023, 2323232, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(34, 'sadsd', 'AJ', 'criminal', 1, '2023', 'sdsd', 'sdds', 1, 2023, 232323, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(35, 'dfdfd', 'AJ', 'criminal', 1, '2023', 'dsds', 'dsda', 1, 2023, 232323, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(36, 'zeeshan', 'DJ', 'criminal', 1, '2023', '2323', '2323', 2, 2, 2, '2023-02-22', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(37, 'sdsdds', 'ADJ-S', 'family', 1, '1', '2', '2', 2, 2, 2, '2023-02-22', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(38, 'xeeshuan', 'ADJ-I', 'civil', 1, '2023', 'asas', 'asas', 1, 2023, 12111, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(39, 'xee', 'ADJ-I', 'criminal', 1, '2023', 'sdsd', 'sdsd', 1, 2023, 3223232, '2023-02-22', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(40, 'Xee', 'ADJ-I', 'civil', 1, '2023', '2asda', 'sadsad', 1, 2023, 23232, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(41, 'sdsd', 'DJ', 'criminal', 1, '2023', 'dsdsd', 'sdsd', 1, 2023, 22222, '2023-02-22', '2023-02-02', '2023-02-02', 'Pending', NULL, NULL),
(42, 'Xeeshaun', 'DJ', 'criminal', 1, '2023', 'sdfd', 'dssd', 1, 2023, 232323, '2023-02-22', '2023-02-02', '2023-02-02', 'Pending', 110, NULL),
(43, 'Sami', 'CJJM-MANJHAND', 'criminal', 1, '2023', 'sdsadad', 'asasa', 1, 2023, 23232, '0202-02-02', '2023-02-02', '2023-02-02', 'Delivered', 110, NULL),
(44, 'sdsd', 'ADJ-I', 'civil', 1, '2023', 'sdsd', 'sdsd', 1, 2023, 23232, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', 100, NULL),
(45, 'Xeeshan', 'DJ', 'criminal', 1, '2023', 'sdsd', 'sdd', 1, 2023, 2332, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', 110, NULL),
(46, 'sdsds', 'DJ', 'criminal', 1, '2023', 'dsfs', 'sdsd', 1, 2023, 2323, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', 200, NULL),
(47, 'sdsdsd', 'DJ', 'criminal', 1, '2023', 'sdsd', 'sdsd', 1, 2023, 1, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', 10, 'ps'),
(48, 'XeeshaunDEL-DJ', 'CJJM-MANJHAND', 'criminal', 1, '2023', 'dsdsdsdsd', 'sdsdsd', 1, 2023, 300, '2023-02-02', '2023-02-02', '2023-02-02', 'Delivered', 100, 'ps'),
(49, 'Xeeshuan', 'DJ', 'criminal', 1, '2023', '1', '2023', 1, 2023, 300, '2023-02-02', '2023-02-02', '2023-02-02', 'inactive', 100, 'ps'),
(50, 'Xeeshaun', 'DJ', 'criminal', 1, '2023', 'sdsdsd', 'sdsd', 1, 2023, 3000, '2022-02-02', '2023-02-20', '2023-02-02', 'Pending', 100, 'ps'),
(51, 'Xeeshaun', 'all', 'criminal', 1, '2023', 'dsafdsfds', 'sdsd', 1, 2023, 1, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', 100, 'ps'),
(52, 'Xee', 'active', 'criminal', 1, '2023', 'dfdf', 'sdsd', 1, 2023, 23232, '2023-02-02', '2023-02-02', '2023-02-02', 'Pending', 100, 'ps');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
