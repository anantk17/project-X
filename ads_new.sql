-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2014 at 04:17 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nitc_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `title` varchar(25) DEFAULT NULL,
  `item_no` varchar(10) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `pic_url` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) NOT NULL DEFAULT '0.00',
  `posted` date NOT NULL DEFAULT '0000-00-00',
  `descrip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`title`, `item_no`, `user`, `category`, `pic_url`, `price`, `posted`, `descrip`) VALUES
('naruto', '112', 'Mahesh', 'games', '1040.jpg', '123.00', '2014-02-03', 'awesome game'),
('naruto', '113', 'Mahesh', 'games', '234.jpg', '143.00', '2014-02-03', 'cool game');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
