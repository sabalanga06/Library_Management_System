-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2022 at 01:34 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library project`
--

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

DROP TABLE IF EXISTS `issuebook`;
CREATE TABLE IF NOT EXISTS `issuebook` (
  `student name` varchar(100) NOT NULL,
  `enrollment number` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `book name` varchar(100) NOT NULL,
  `issue date` date NOT NULL,
  `return date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`student name`, `enrollment number`, `department`, `book name`, `issue date`, `return date`) VALUES
('saba langa', '123456789', 'comp', 'java', '2021-03-20', '2021-04-20'),
('nandaniya priyanshi', '41', 'computer', 'fosd', '2021-04-20', '2021-05-20'),
('seema', '10', 'computer', 'echm', '2012-06-20', '2012-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Admin', '987654');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
