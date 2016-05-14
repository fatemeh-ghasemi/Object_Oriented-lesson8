-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2016 at 10:06 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `grouptype` int(10) NOT NULL,
  `mobilephone` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`fname`,`lname`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `fname`, `lname`, `phone`, `email`, `grouptype`, `mobilephone`) VALUES
(14, 'dd', 'jafari', '5453535', 'dorna@gmail.com', 2, '012671254'),
(11, 'mahsa', 'yousefi', '8796754', 'mahsa@yahoo.com', 1, '0128855'),
(13, 'maral', 'mahdavi', '975864653', 'maral@gmail.com', 3, '083294254'),
(3, 'maryam', 'nabavi', '1478946', 'maryam@gmail.com', 3, '018462345'),
(4, 'nader', 'zamani', '7531552', 'nader@gmail.com', 0, '0658641'),
(9, 'sanaz', 'davodi', '1234567', 'sanaz@gmail.com', 3, '012647154'),
(8, 'sara', 'niko', '10298776', 'sara@gmail.com', 1, '087534'),
(5, 'sima', 'chabok', '7894562', 'sima@gmail.com', 0, '01725681'),
(6, 'zahra', 'jokar', '1548975', 'zahra@gmail.com', 0, '012312334');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
