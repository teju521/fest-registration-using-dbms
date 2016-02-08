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
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `vvitid` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  `cr` int(11) NOT NULL,
  `wap` int(11) NOT NULL,
  `gd` int(11) NOT NULL,
  `cf` int(11) NOT NULL,
  `shn` int(11) NOT NULL,
  `mrvvit` int(11) NOT NULL,
  `pt` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `tsp` int(11) NOT NULL,
  `face` int(11) NOT NULL,
  `theme` int(11) NOT NULL,
  `phexb` int(11) NOT NULL,
  `sha` int(11) NOT NULL,
  `spa` int(11) NOT NULL,
  `sf` int(11) NOT NULL,
  `vocal` int(11) NOT NULL,
  `intr` int(11) NOT NULL,
  `skit` int(11) NOT NULL,
  `mim` int(11) NOT NULL,
  `omv` int(11) NOT NULL,
  `quiz` int(11) NOT NULL,
  `elocution` int(11) NOT NULL,
  `cse` int(11) NOT NULL,
  `ece` int(11) NOT NULL,
  `eee` int(11) NOT NULL,
  `it` int(11) NOT NULL,
  `civil` int(11) NOT NULL,
  `mech` int(11) NOT NULL,
  `cse1` int(11) NOT NULL,
  `ece1` int(11) NOT NULL,
  `eee1` int(11) NOT NULL,
  `it1` int(11) NOT NULL,
  `civil1` int(11) NOT NULL,
  `mech1` int(11) NOT NULL,
  `s100` int(11) NOT NULL,
  `s400` int(11) NOT NULL,
  `lg` int(11) NOT NULL,
  `sp` int(11) NOT NULL,
  `ches` int(11) NOT NULL,
  `carroms` int(11) NOT NULL,
  `tt` int(11) NOT NULL,
  `dt` int(11) NOT NULL,
  `vb` int(11) NOT NULL,
  `kk` int(11) NOT NULL,
  `tb` int(11) NOT NULL,
  `tenni` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `folk` int(11) NOT NULL,
  `solo` int(11) NOT NULL,
  `nt` int(11) NOT NULL,
  `wes` int(11) NOT NULL,
  PRIMARY KEY (`vvitid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`vvitid`, `st`, `cr`, `wap`, `gd`, `cf`, `shn`, `mrvvit`, `pt`, `ap`, `tsp`, `face`, `theme`, `phexb`, `sha`, `spa`, `sf`, `vocal`, `intr`, `skit`, `mim`, `omv`, `quiz`, `elocution`, `cse`, `ece`, `eee`, `it`, `civil`, `mech`, `cse1`, `ece1`, `eee1`, `it1`, `civil1`, `mech1`, `s100`, `s400`, `lg`, `sp`, `ches`, `carroms`, `tt`, `dt`, `vb`, `kk`, `tb`, `tenni`, `class`, `folk`, `solo`, `nt`, `wes`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`vvitid`) REFERENCES `reg` (`vvitid`);
