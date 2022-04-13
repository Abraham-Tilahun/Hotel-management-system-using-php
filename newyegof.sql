-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2019 at 10:38 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newyegof`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `password`, `role`, `status`) VALUES
('ezu', 'ezu1234', 'index', 'offline'),
('hanna', 'kebede', 'receptionist', 'offline'),
('helawe', 'behailu', 'system_admin', 'offline'),
('hoho', '8ce87b8ec346ff4c80635f667d1592ae', 'index', 'offline'),
('jem', '223344', 'receptionist', 'offline'),
('kedir', 'kibret', 'receptionist', 'offline'),
('mameaa', '3354045a397621cd92406f1f98cde292', 'index', 'offline'),
('mamee', '1234', 'manager', 'free'),
('mamela', 'c2a5470552fd515d5756368ba09dee3c', 'system_admin', 'offline'),
('mayet', '180898c9dd7b3ae0fe8d0b081a99e674', 'index', 'offline'),
('shawl', '123123', 'manager', 'offline'),
('shumi', 'kebede', 'manager', 'offline'),
('temi', '12341234', 'system_admin', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `emp_id` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `salary` float NOT NULL,
  `start_date` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `username`, `fname`, `lname`, `salary`, `start_date`, `dob`, `age`, `sex`, `city`, `state`, `nationality`, `telephone`, `email`, `job_title`, `picture`) VALUES
('Gurd/13/15', 'mayet', 'mayet', 'gizachew', 4563, '19/06/2013', '5/12/1990', 23, 'Male', 'bahir dar', 'amhara', 'Ethiopian', 2147483647, 'mayet@yahoo.com', 'index', ''),
('Mngr/1980/08', 'shawl', 'shawl', 'edrise', 1000, '25/04/2019', '6/4/1985', 34, 'Male', 'mekdela', 'ethio', 'Ethiopian', 942424425, 'mamtegegn@gmail.com', 'manager', '../html/images/employees/333.jpg'),
('Rcpt/13/02', 'kedir', 'kedir', 'kibret', 5000, '19/06/2013', '12/02/1990', 23, 'Male', 'addis ababa', 'addis ababa', 'Ethiopian', 582268965, 'kedir@gmail.com', 'receptionist', '../html/images/employees/24.jpg'),
('Sysa/19/08', 'mamela', 'mohammed', 'tegegne', 8000, '24/04/2019', '12/4/1986', 33, 'Male', 'dessie', 'debrezeit', 'Ethiopian', 943235407, 'mamtegegn@gmail.com', 'system_admin', '../html/images/employees/11.jpg'),
('Sysa/19/09', 'temi', 'temesgen', 'abera', 1000, '24/04/2019', '6/4/1985', 34, 'Male', 'dessie', 'amhara', 'Ethiopian', 943235407, 'mamtegegn@gmail.com', 'system_admin', '../html/images/employees/333.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `telephone` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `share_with` varchar(30) NOT NULL,
  `arr_date` varchar(12) NOT NULL,
  `dep_date` varchar(12) NOT NULL,
  `preference` varchar(8) NOT NULL,
  `res_id` varchar(10) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`first_name`, `last_name`, `age`, `sex`, `city`, `state`, `country`, `telephone`, `email`, `share_with`, `arr_date`, `dep_date`, `preference`, `res_id`) VALUES
('mohammed', 'tegegne', 21, 'Male', 'dessie', 'debrezeit', 'Ethiopian', 943235407, 'mamtegegn@gmail.com', 'mame', '', '', 'Single', '1jpi3xgt'),
('shawl', 'endreise', 45, 'm', 'dessie', 'amhara', 'ethio', 93334433224, 'mam@gmail.com', 'mam', '12', '13', '1234e', '67w'),
('shawl', 'ezedin', 33, 'Male', 'dessie', 'ethio', 'Ethiopian', 943235407, 'mamtegegn@gmail.com', 'mame', '', '', 'Family', 'duzrxauy'),
('shawl', 'tegegne', 33, 'Male', 'dessie', 'ethio', 'Ethiopian', 943235407, 'mam@gmail.com', 'mame', '', '', 'Twin', 'memyb35r'),
('temesgen', 'tegegne', 21, 'Male', 'dessie', 'debrezeit', 'Ethiopian', 943235407, 'mamtegegn@gmail.com', 'temi', '', '', 'Single', 'morjm4wv'),
('Miky', 'Tsegaw', 22, 'Male', 'Jimma', 'Oromia', 'Ethiopia', 251910757121, 'miky@yahoo.com', 'baba', '08.06.2013', '22.06.2013', 'Double', 'zmu0st33');

-- --------------------------------------------------------

--
-- Table structure for table `reservation1`
--

CREATE TABLE IF NOT EXISTS `reservation1` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `province` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `adults` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `no_room` int(11) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reservation1`
--


-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `rate` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `max_adult` int(11) NOT NULL,
  `max_child` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `type`, `rate`, `description`, `image`, `qty`, `max_adult`, `max_child`) VALUES
(6, 'Superior', 15000, 'Fully air conditioned', 'photos/addemployee.png', 12, 1, 1),
(7, 'Deluxe', 1300, 'Fully air conditioned', 'photos/DeLuxe.jpg', 5, 1, 1),
(8, 'Standard Single', 950, 'Fully air conditioned', 'photos/Single.jpg', 3, 1, 1),
(9, 'Standard Double', 1100, 'Fully air conditioned', 'photos/images.jpg', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roominventory`
--

CREATE TABLE IF NOT EXISTS `roominventory` (
  `roominventory_id` int(11) NOT NULL AUTO_INCREMENT,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `qty_reserve` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `confirmation` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`roominventory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `roominventory`
--


-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(3) NOT NULL,
  `room_no` int(3) NOT NULL,
  `room_type` varchar(12) NOT NULL,
  `price` float NOT NULL,
  `floor_no` int(11) NOT NULL,
  `max_guest` double NOT NULL,
  `status` varchar(8) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `discount` float NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `room reference` varchar(20) NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_no`, `room_type`, `price`, `floor_no`, `max_guest`, `status`, `detail`, `discount`, `description`, `image`, `room reference`) VALUES
(3, 2, 'double', 250, 2, 2, 'offline', 'see', 3, 'Fully air conditioned', 'images/room.jpg', 'double'),
(23, 101, 'single', 350, 1, 0, 'free', 'The room has a 24 hr. wifi service and bathroom inside', 300, 'Fully air conditioned', 'images/room2.jpg', 'single'),
(32, 200, 'family', 500, 3, 3, 'free', 'backe of the building', 300, 'Fully air conditioned', 'images/room.jpg', 'family'),
(4, 201, 'twin', 550, 2, 0, 'free', 'The room has a 24 hr. wifi service and bathroom inside and also has a terrace.', 490, 'Fully air conditioned', 'images/roo1.jpg', 'twin'),
(22, 202, 'twin', 550, 2, 0, 'free', 'This room is infront of the lake tana, and has a beautiful lake view terrace, also a Dstv service wi', 490, 'Fully air conditioned', 'images/room.jpg', 'twin');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `name` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `job` varchar(30) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `feedback` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`name`, `sex`, `age`, `job`, `picture`, `feedback`, `status`, `ip`) VALUES
('sasi ali', 'Female', 72, 'student', '../html/images/comments/picture.jpg', 'i love your hotel', 'Choosen', 213),
('Behailu', 'Male', 21, 'student', '../html/images/comments/behalu.jpg', 'nice hotel', 'Choosen', 12),
('Haile', 'Male', 51, 'Teacher', '../html/images/comments/DSC01527.jpg', 'not good that much', '', 213),
('Belen', 'Female', 29, 'doctor', '../html/images/comments/view comment.jpg', 'not good that much', 'Choosen', 127),
('Maru', 'Male', 21, 'Student', '../html/images/comments/gg.jpg', 'you are an asshole', '', 127),
('Kedir Kibret', 'Male', 22, 'Student', '../html/images/comments/24.jpg', 'u have a good service but its not that much nice', '', 127),
('mohammed', 'm', 23, 'student', '10.jpg', '\0', '', 0),
('mohammed', 'm', 23, 'student', '10.jpg', '\0', '', 0),
('ezedin', 'Male', 2, 'receptionist', '../html/images/comments/11.jpg', 'wrevsdfvsdafsavxcsfdfxzczjfjhfvadsxxjhgk', '', 0),
('shawl', 'Male', 55, 'system admin', '../html/images/comments/333.jpg', 'we are comment that your hotel best of best.', '', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`username`) REFERENCES `accounts` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
