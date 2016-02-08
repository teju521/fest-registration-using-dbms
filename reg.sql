-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2015 at 04:27 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vvit`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `clg` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph` varchar(15) NOT NULL,
  `vvitid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`vvitid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `id`, `clg`, `branch`, `email`, `ph`, `vvitid`) VALUES
('dileep', '27', 'vvit', 'it', 'abc', '123', 1),
('ss', 'sss', 'sss', 'sss', 'sss', '11', 2),
('', '', '', '', '', '', 3),
('f', '', '', '', '', '', 4);
