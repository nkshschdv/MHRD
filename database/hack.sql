-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2017 at 03:34 PM
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
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `emp_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(50) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_gender` text NOT NULL,
  `emp_address` varchar(50) NOT NULL,
  `emp_designation` varchar(30) NOT NULL,
  `emp_contact` int(10) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_dob`, `emp_gender`, `emp_address`, `emp_designation`, `emp_contact`) VALUES
(3, 'Deepak Sharma', '0000-00-00', 'male', 'namchi', 'po', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
