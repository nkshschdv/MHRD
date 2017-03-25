-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2017 at 08:31 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` int(5) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`) VALUES
(1, 'cse'),
(2, 'ece'),
(3, 'mec'),
(4, 'civil');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `d_id` int(5) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(40) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`d_id`, `d_name`) VALUES
(1, 'HOD'),
(2, 'CODER'),
(3, 'designer'),
(4, 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `emp_id` int(5) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(60) NOT NULL,
  `emp_gender` varchar(6) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_address` varchar(50) NOT NULL,
  `emp_dept_id` int(5) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_contact_no` int(10) NOT NULL,
  `emp_designation_id` int(5) NOT NULL,
  `emp_join_date` date NOT NULL,
  `emp_photograph` varchar(50) DEFAULT NULL,
  `emp_status` bit(5) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_gender`, `emp_dob`, `emp_address`, `emp_dept_id`, `emp_email`, `emp_contact_no`, `emp_designation_id`, `emp_join_date`, `emp_photograph`, `emp_status`) VALUES
(1, 'deepak', 'male', '2017-03-01', 'kitam namchi ', 3, 'dpaksarma10@gmail.com', 987463210, 87, '2017-03-15', 'deepak.jpg', b'10110');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `date_of_apply` date NOT NULL,
  `dol_from` date NOT NULL,
  `dol_till` date DEFAULT NULL,
  `reason` varchar(200) NOT NULL,
  `attachment` varchar(100) DEFAULT NULL,
  `leave_type_id` int(5) NOT NULL,
  `status` bit(10) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `leave_cancel_status` bit(2) DEFAULT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`leave_id`, `emp_id`, `date_of_apply`, `dol_from`, `dol_till`, `reason`, `attachment`, `leave_type_id`, `status`, `remarks`, `leave_cancel_status`) VALUES
(1, 5, '2017-03-01', '2017-03-03', '2017-03-17', 'hgdj gndbjg sdgjsdhfj', 'images/frint.pdf', 8, b'0000000000', 'nothing', b'00');

-- --------------------------------------------------------

--
-- Table structure for table `leave_cancel`
--

CREATE TABLE IF NOT EXISTS `leave_cancel` (
  `lc_id` int(5) NOT NULL AUTO_INCREMENT,
  `leave_id` int(5) NOT NULL,
  `cancel_date` date NOT NULL,
  `join_date` date NOT NULL,
  `status` bit(5) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  PRIMARY KEY (`lc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE IF NOT EXISTS `leave_type` (
  `lt_id` int(11) NOT NULL AUTO_INCREMENT,
  `lt_type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`lt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`lt_id`, `lt_type_name`) VALUES
(5, 'db vaccation'),
(6, 'db medical'),
(7, 'db duty leave'),
(8, 'db Emergency');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE IF NOT EXISTS `try` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `joindate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`id`, `joindate`) VALUES
(1, '2017-03-04'),
(2, '2017-03-04'),
(3, '2017-03-04'),
(4, '2017-03-04'),
(5, '2017-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_type_id` int(5) NOT NULL,
  `emp_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_type` int(11) NOT NULL,
  `privilege` bit(10) DEFAULT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
