-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2022 at 06:37 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL COMMENT 'email2',
  `email2` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `pw2` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`ID`, `email`, `email2`, `pw`, `pw2`) VALUES
(1, 'ruthcuasay28@gmail.com', 'ruthcuasay28@gmail.com', 'ruthcuasay11', 'ruthcuasay11'),
(3, 'erlindavial@gmail.com', 'erlindavial@gmail.com', 'erlindavial11', 'erlindavial11'),
(4, 'arzhia@gmail.com', 'arzhia@gmail.com', 'arzhia27', 'arzhia27'),
(5, 'marielarevilla@gmail.com', 'marielarevilla@gmail.com', 'marielarevilla21', 'marielarevilla21'),
(6, 'rowen@gmail.com', 'rowen@gmail.com', 'rowenvialescartin', 'rowenvialescartin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
