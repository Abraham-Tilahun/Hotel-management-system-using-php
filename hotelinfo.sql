-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 03:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ethiostar`
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
('behailu', 'bcd5040a6f9e8a93b9cafaffec5e38e7', 'index', 'offline'),
('hanna', 'kebede', 'receptionist', 'offline'),
('helawe', 'behailu', 'system_admin', 'offline'),
('kedir', 'kibret', 'receptionist', 'offline'),
('mayet', '180898c9dd7b3ae0fe8d0b081a99e674', 'index', 'offline'),
('miky', 'f135938960c84a5', 'index', 'offline'),
('shumi', 'kebede', 'manager', 'offline'),
('yodit', 'terefe', 'casher', 'offline');

-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 03:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ethiostar`
--

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
('Rcpt/13/02', 'kedir', 'kedir', 'kibret', 5000, '19/06/2013', '12/02/1990', 23, 'Male', 'addis ababa', 'addis ababa', 'Ethiopian', 582268965, 'kedir@gmail.com', 'receptionist', '../html/images/employees/24.jpg'),
('wait/13/02', 'behailu', 'behailu', 'kibret', 4563, '20/06/2013', '5/12/1991', 22, 'Female', 'addis ababa', 'addis ababa', 'Ethiopian', 2147483647, 'hbehailu@yahoo.com', 'index', '../html/images/employees/24 001.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`username`) REFERENCES `accounts` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 03:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ethiostar`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `telephone` double NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`username`, `first_name`, `last_name`, `age`, `sex`, `city`, `state`, `country`, `telephone`, `email`) VALUES
('miky', 'Michael', 'Tsegaw', 21, 'Male', 'Alem ketema', 'Amhara', 'Ethiopia', 251910757121, 'miky@yahoo.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`username`) REFERENCES `accounts` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 03:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ethiostar`
--

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
('Miky', 'Tsegaw', 22, 'Male', 'Jimma', 'Oromia', 'Ethiopia', 251910757121, 'miky@yahoo.com', 'baba', '08.06.2013', '22.06.2013', 'Double', 'zmu0st33');

-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 03:48 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ethiostar`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_no` int(3) NOT NULL,
  `room_type` varchar(12) NOT NULL,
  `price` float NOT NULL,
  `floor_no` int(11) NOT NULL,
  `max_guest` double NOT NULL,
  `status` varchar(8) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `discount` float NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `room_type`, `price`, `floor_no`, `max_guest`, `status`, `detail`, `discount`) VALUES
(1, 'family', 800, 0, 0, 'free', 'This room is infront of the lake tana, and has a beautiful lake view terrace.', 715),
(101, 'single', 350, 1, 0, 'free', 'The room has a 24 hr. wifi service and bathroom inside', 300),
(201, 'twin', 550, 2, 0, 'free', 'The room has a 24 hr. wifi service and bathroom inside and also has a terrace.', 490),
(202, 'twin', 550, 2, 0, 'free', 'This room is infront of the lake tana, and has a beautiful lake view terrace, also a Dstv service wi', 490);

-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 03:48 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ethiostar`
--

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
('Helawe Behailu', 'Male', 22, 'Student', '../html/images/comments/hb.gif', 'Im a university student in Bahir Dar, when everytime my families come to the city their  first choise is Ethio-Star. They always say We feel like home...!', 'Choosen', 127),
('Maru', 'Male', 21, 'Student', '../html/images/comments/gg.jpg', 'you are an asshole', '', 127),
('Kedir Kibret', 'Male', 22, 'Student', '../html/images/comments/24.jpg', 'u have a good service but its not that much nice', '', 127);

