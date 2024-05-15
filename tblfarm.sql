-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2024 at 02:23 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tblfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblladmin`
--

DROP TABLE IF EXISTS `tblladmin`;
CREATE TABLE IF NOT EXISTS `tblladmin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Admin ID',
  `fname` varchar(50) NOT NULL COMMENT 'Full Name',
  `uname` varchar(50) NOT NULL COMMENT 'User Name',
  `email` varchar(50) NOT NULL COMMENT 'Email',
  `pass` varchar(15) NOT NULL COMMENT 'password',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblowner`
--

DROP TABLE IF EXISTS `tblowner`;
CREATE TABLE IF NOT EXISTS `tblowner` (
  `fid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Farm Owner ID',
  `fname` varchar(50) NOT NULL COMMENT 'Full Name',
  `uname` varchar(50) NOT NULL COMMENT 'User Name',
  `fsize` int(10) NOT NULL COMMENT 'Farm size',
  `pass` varchar(15) NOT NULL COMMENT 'password',
  `Email` varchar(50) NOT NULL COMMENT 'Email',
  `sq` varchar(50) NOT NULL COMMENT 'Security Question',
  `sa` varchar(50) NOT NULL COMMENT 'Security Answer',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest`
--

DROP TABLE IF EXISTS `tblrequest`;
CREATE TABLE IF NOT EXISTS `tblrequest` (
  `rid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Request ID',
  `status` varchar(20) NOT NULL COMMENT 'Status ',
  `rdate` date NOT NULL COMMENT 'Request date',
  `fid` int(10) NOT NULL COMMENT 'Farm Owner ID',
  `sid` int(10) NOT NULL COMMENT 'services ID',
  `wid` int(10) NOT NULL COMMENT 'worker ID',
  PRIMARY KEY (`rid`),
  KEY `tblrequest_fid_fk` (`fid`),
  KEY `tblrequest_sid_fk` (`sid`),
  KEY `tblrequest_wid_fk` (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

DROP TABLE IF EXISTS `tblservices`;
CREATE TABLE IF NOT EXISTS `tblservices` (
  `sid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'services ID',
  `sname` varchar(50) NOT NULL COMMENT 'services Name',
  `description` varchar(100) NOT NULL COMMENT 'description',
  `cost` int(10) NOT NULL COMMENT 'cost',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblworker`
--

DROP TABLE IF EXISTS `tblworker`;
CREATE TABLE IF NOT EXISTS `tblworker` (
  `wid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Worker ID',
  `fname` varchar(50) NOT NULL COMMENT 'Full Name',
  `phone` int(8) NOT NULL COMMENT 'Phone Number',
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblrequest`
--
ALTER TABLE `tblrequest`
  ADD CONSTRAINT `tblrequest_fid_fk` FOREIGN KEY (`fid`) REFERENCES `tblowner` (`fid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblrequest_sid_fk` FOREIGN KEY (`sid`) REFERENCES `tblservices` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblrequest_wid_fk` FOREIGN KEY (`wid`) REFERENCES `tblworker` (`wid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
