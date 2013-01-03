-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2013 at 04:59 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jlee_pset7`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `message`, `name`) VALUES
(10, 'wefwe', 'josh'),
(10, 'wefwefw', 'josh'),
(10, 'lol', 'josh'),
(10, '123', 'josh'),
(10, 'ewfwefewf', 'josh'),
(10, 'ggegergre', 'josh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cash` decimal(65,4) unsigned NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `cash`) VALUES
(1, 'guest', 'guest', 1195.2100),
(2, 'jcaesar', '13', 10000.0000),
(3, 'cpisonis', '13', 10000.0000),
(4, 'pskroob', '12345', 10000.0000),
(5, 'mscott', 'password', 10000.0000),
(6, 'gcostanza', 'Bosco', 10000.0000),
(7, 'bvigenere', 'FOOBAR', 10000.0000),
(8, 'jlee', '12345', 7070.3200),
(9, 'test', 'test', 10000.0000),
(10, 'josh', '12', 8513.0000),
(11, 'joshlee', 'j', 10000.0000),
(12, 'sal', '1', 10000.0000),
(13, 'j', 'c4ca4238a0b923820dcc509a6f75849b', 10000.0000),
(14, '2', '2', 10000.0000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
