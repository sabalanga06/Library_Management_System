-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2022 at 01:38 PM
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
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

DROP TABLE IF EXISTS `book_details`;
CREATE TABLE IF NOT EXISTS `book_details` (
  `title` varchar(100) NOT NULL,
  `publication` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `book_no` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `available_quantity` varchar(100) NOT NULL,
  PRIMARY KEY (`book_no`) USING BTREE,
  UNIQUE KEY `book_no` (`book_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`title`, `publication`, `author`, `book_no`, `sem`, `department`, `available_quantity`) VALUES
('mobile computing and application development', 'Gujarat technical publishers', 'ganshyam parmar', '2545', '6', 'computer', 'availabilty'),
('fundamental of digital electronics', 'atul prakashan', 'r.p ajwalia', '452', '1', 'computer', 'availabilty'),
('fundamental of digital electronics', 'atul prakashan', 'r.p ajwalia', '457', '1', 'computer', 'availabilty'),
('advance computer programming', 'Gujarat technical publishers', 'vaishali k mehta', '1755', '2', 'computer', 'availabilty'),
('advance database management system', 'Gujarat technical publisher', 'Rahul pancholi', '1609', '4', 'computer', 'availabilty'),
('advance database management system', 'Gujarat technical publishers', 'Rahul pancholi', '1426', '4', 'computer', 'availabilty'),
('programming in c++', 'atul prakashan', 'm.j desai', '879', '3', 'computer', 'availabilty'),
('computer programming', 'atul prakashan', 'm.j desai', '2016', '1', 'computer', 'availabilty'),
('construction technology', 'atul prakashan', 'dr. r.p rethaliya', '1699', '3', 'civil', 'availabilty'),
('construction technology', 'atul prakashan', 'dr. r.p rethaliya', '1529', '3', 'civil', 'availabilty'),
('estimating costing and valuation', 'atul prakashan', 'dr r.p rethaliya', '3288', '5', 'civil', 'availabilty'),
('estimating costing and valuation', 'atul prakashan', 'dr r.p rethaliya', '3287', '5', 'civil', 'availabilty'),
('basic transportation engineering', 'atul prakashan', 'dr r.p rethaliya', '2611', '4', 'civil', 'availabilty'),
('basic transportation engineering', 'atul prakashan', 'dr r.p rethaliya', '2620', '4', 'civil', 'availabilty'),
('trafic engineering', 'atul prakashan', 'dr r.p rethaliya', '2580', '6', 'civil', 'availabilty'),
('trafic engineering', 'atul prakashan', 'dr r.p rethaliya', '2588', '6', 'civil', 'availabilty'),
('building drawing', 'atul prakashan', 'b.h sukla', '1345', '2', 'civil', 'availabilty'),
('building drawing', 'atul prakashan', 'b.h sukla', '1347', '2', 'civil', 'availabilty'),
('design of steel structures', 'atul prakashan', 'dr r.p rethaliya', '3259', '5', 'civil', 'availabilty'),
('design of steel structures', 'atul prakashan', 'dr r.p rethaliya', '3256', '5', 'civil', 'availabilty'),
('fabrication technology', 'atul prakashan', 's.v gosai', '2664', '6', 'mechanical', 'availabilty'),
('fabrication technology', 'atul prakashan', 's.v gosai', '2662', '6', 'mechanical', 'availabilty'),
('theory of machine', 'atul prakashan', 's.b soni', '2701', '4', 'mechanical', 'availabilty'),
('theory of machine', 'atul prakashan', 's.b soni', '2702', '4', 'mechanical', 'availabilty'),
('design of machine element', 'atul prakashan', 's.b soni', '3170', '5', 'mechanical', 'availabilty'),
('design of machine element', 'atul prakashan', 's.b soni', '3169', '5', 'mechanical', 'availabilty'),
('applied mechanics', 'atul prakashan', 'dr r.p rethaliya', '1310', '2', 'mechanical', 'availabilty'),
('applied mechnaics', 'atul prakashan', 'dr r.p rethalya', '1309', '2', 'mechanical', 'availabilty'),
('metrology and instrumentation', 'atul prakashan', 'd.a desai', '2722', '4', 'mechanical', 'availabilty'),
('metrology and instrumentation', 'atul prakashan', 'd.a desai', '2721', '4', 'mechanical', 'availabilty'),
('thermal engineering', 'atul prakashan', 'k.k patel', '3057', '4', 'mechanical', 'availabilty'),
('thermal engineering', 'atul prakashan', 'k.k patel', '2975', '4', 'mechanical', 'availabilty'),
('d.c circuits', 'atul prakashan', 'r.p ajwalia', '1255', '2', 'electrical', 'availabilty'),
('d.c circuits', 'atul prakashan', 'r.p ajwalia', '1264', '2', 'electrical', 'availabilty'),
('electrical components and practice', 'atul prakashan', 'r.p ajwalia', '1215', '1', 'electrical', 'availabilty'),
('electrical components and practice', 'atul prakashan', 'r.p ajwalia', '1219', '1', 'electrical', 'availabilty'),
('energy conservation and audit', 'atul prakashan', 'r.p ajwalia', '3187', '5', 'electrical', 'availabilty'),
('energy conservation and audit', 'atul prakashan', 'r.p ajwalia', '3188', '5', 'electrical', 'availabilty'),
('power electronics', 'atul prakashan', 'r.p ajwalia', '2916', '5', 'electrical', 'availabilty'),
('power electronics', 'atul prakashan', 'r.p ajwalia', '3205', '5', 'electrical', 'availabilty'),
('basic of electrical engineering', 'atul prakashan', 'r.p ajwalia', '1179', '1', 'electrical', 'availabilty'),
('basic of electrical engineering', 'atul prakashan', 'r.p ajwalia', '1176', '1', 'electrical', 'availabilty'),
('switch gear and protection', 'atul prakashan', 'r.p ajwalia', '2963', '6', 'electrical', 'availabilty'),
('switch gear and protection', 'atul prakashan', 'r.p ajwalia', '2765', '6', 'electrical', 'availabilty'),
('basic electronics', 'atul prakashan', 'r.p ajwalia', '877', '2', 'computer', 'availabilty'),
('advance java programming', 'gujrat technical publishers', 'amit shah', '2508', '6', 'computer', 'availabilty'),
('computer programming ', 'atul prakashan ', 'm.j.desai', '200', '1', 'computer ', 'availabilty'),
('mcad', 'atul prakashan', 'amit shah', '2546', '6', 'computer', 'availabilty'),
('programming in c++', 'atul prakashan', 'm.j desai', '882', '3', 'computer', 'availabilty '),
('advance computer programming', 'Gujarat technical publishers', 'vaishali k mehta', '1748', '2', 'computer', 'availabilty '),
('data structure', 'atul prakashan', 'm.j desai', '899', '4', 'computer', 'not available');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

DROP TABLE IF EXISTS `issuebook`;
CREATE TABLE IF NOT EXISTS `issuebook` (
  `student_name` varchar(50) NOT NULL,
  `enrollment_number` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_no` varchar(50) NOT NULL,
  `issue_date` varchar(50) NOT NULL,
  `return_date` varchar(50) NOT NULL,
  PRIMARY KEY (`book_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`student_name`, `enrollment_number`, `department`, `book_name`, `book_no`, `issue_date`, `return_date`) VALUES
('saba langa', '33', 'computer', 'data structure', '899', '1/5/21', '1/6/21');

-- --------------------------------------------------------

--
-- Table structure for table `returnbook`
--

DROP TABLE IF EXISTS `returnbook`;
CREATE TABLE IF NOT EXISTS `returnbook` (
  `student_name` varchar(50) NOT NULL,
  `enrollment_number` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_no` varchar(50) NOT NULL,
  `Return_date` varchar(50) NOT NULL,
  PRIMARY KEY (`book_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnbook`
--

INSERT INTO `returnbook` (`student_name`, `enrollment_number`, `department`, `book_name`, `book_no`, `Return_date`) VALUES
('np', '41', 'computer', 'computer programming', '200', '21/5/20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
