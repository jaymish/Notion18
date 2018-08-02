-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2018 at 05:43 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2940592_notion`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_1`
--

DROP TABLE IF EXISTS `event_1`;
CREATE TABLE IF NOT EXISTS `event_1` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_1` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_2`
--

DROP TABLE IF EXISTS `event_2`;
CREATE TABLE IF NOT EXISTS `event_2` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_2` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_3`
--

DROP TABLE IF EXISTS `event_3`;
CREATE TABLE IF NOT EXISTS `event_3` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_3` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_4`
--

DROP TABLE IF EXISTS `event_4`;
CREATE TABLE IF NOT EXISTS `event_4` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_4` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_5`
--

DROP TABLE IF EXISTS `event_5`;
CREATE TABLE IF NOT EXISTS `event_5` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_5` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_6`
--

DROP TABLE IF EXISTS `event_6`;
CREATE TABLE IF NOT EXISTS `event_6` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_6` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_7`
--

DROP TABLE IF EXISTS `event_7`;
CREATE TABLE IF NOT EXISTS `event_7` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_7` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_8`
--

DROP TABLE IF EXISTS `event_8`;
CREATE TABLE IF NOT EXISTS `event_8` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_8` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_9`
--

DROP TABLE IF EXISTS `event_9`;
CREATE TABLE IF NOT EXISTS `event_9` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_9` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_10`
--

DROP TABLE IF EXISTS `event_10`;
CREATE TABLE IF NOT EXISTS `event_10` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_10` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_11`
--

DROP TABLE IF EXISTS `event_11`;
CREATE TABLE IF NOT EXISTS `event_11` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_11` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_12`
--

DROP TABLE IF EXISTS `event_12`;
CREATE TABLE IF NOT EXISTS `event_12` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_12` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_13`
--

DROP TABLE IF EXISTS `event_13`;
CREATE TABLE IF NOT EXISTS `event_13` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_13` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_14`
--

DROP TABLE IF EXISTS `event_14`;
CREATE TABLE IF NOT EXISTS `event_14` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_14` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_15`
--

DROP TABLE IF EXISTS `event_15`;
CREATE TABLE IF NOT EXISTS `event_15` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_15` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_16`
--

DROP TABLE IF EXISTS `event_16`;
CREATE TABLE IF NOT EXISTS `event_16` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_16` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_17`
--

DROP TABLE IF EXISTS `event_17`;
CREATE TABLE IF NOT EXISTS `event_17` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_17` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_18`
--

DROP TABLE IF EXISTS `event_18`;
CREATE TABLE IF NOT EXISTS `event_18` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_18` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_19`
--

DROP TABLE IF EXISTS `event_19`;
CREATE TABLE IF NOT EXISTS `event_19` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_19` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_20`
--

DROP TABLE IF EXISTS `event_20`;
CREATE TABLE IF NOT EXISTS `event_20` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_20` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notion`
--

DROP TABLE IF EXISTS `notion`;
CREATE TABLE IF NOT EXISTS `notion` (
  `temp_no` varchar(100) NOT NULL,
  `unique_qr` varchar(100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `event_1` varchar(100) NOT NULL,
  `event_2` varchar(100) NOT NULL,
  `event_3` varchar(100) NOT NULL,
  `event_4` varchar(100) NOT NULL,
  `event_5` varchar(100) NOT NULL,
  `event_6` varchar(100) NOT NULL,
  `event_7` varchar(50) NOT NULL,
  `event_8` varchar(50) NOT NULL,
  `event_9` varchar(50) NOT NULL,
  `event_10` varchar(50) NOT NULL,
  `event_11` varchar(50) NOT NULL,
  `event_12` varchar(50) NOT NULL,
  `event_13` varchar(50) NOT NULL,
  `event_14` varchar(50) NOT NULL,
  `event_15` varchar(50) NOT NULL,
  `event_16` varchar(50) NOT NULL,
  `event_17` varchar(50) NOT NULL,
  `event_18` varchar(50) NOT NULL,
  `event_19` varchar(50) NOT NULL,
  `event_20` varchar(50) NOT NULL,
  `nt_event_1` varchar(100) NOT NULL,
  `nt_event_2` varchar(100) NOT NULL,
  `nt_event_3` varchar(100) NOT NULL,
  `nt_event_4` varchar(100) NOT NULL,
  `nt_event_5` varchar(100) NOT NULL,
  `nt_event_6` varchar(100) NOT NULL,
  `nt_event_7` varchar(50) NOT NULL,
  `total_money` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nt_event_1`
--

DROP TABLE IF EXISTS `nt_event_1`;
CREATE TABLE IF NOT EXISTS `nt_event_1` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `nt_event_1` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nt_event_2`
--

DROP TABLE IF EXISTS `nt_event_2`;
CREATE TABLE IF NOT EXISTS `nt_event_2` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `nt_event_2` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nt_event_3`
--

DROP TABLE IF EXISTS `nt_event_3`;
CREATE TABLE IF NOT EXISTS `nt_event_3` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `nt_event_3` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nt_event_4`
--

DROP TABLE IF EXISTS `nt_event_4`;
CREATE TABLE IF NOT EXISTS `nt_event_4` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `nt_event_4` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nt_event_5`
--

DROP TABLE IF EXISTS `nt_event_5`;
CREATE TABLE IF NOT EXISTS `nt_event_5` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `nt_event_5` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nt_event_7`
--

DROP TABLE IF EXISTS `nt_event_7`;
CREATE TABLE IF NOT EXISTS `nt_event_7` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `nt_event_6` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nt_event_7`
--

DROP TABLE IF EXISTS `nt_event_7`;
CREATE TABLE IF NOT EXISTS `nt_event_7` (
  `unique_qr` varchar(1100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `course` varchar(100) NOT NULL,
  `nt_event_7` varchar(100) NOT NULL,
  `qr_code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `temp_no` varchar(100) NOT NULL,
  `unique_qr` varchar(100) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `reciever` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_event`
--

DROP TABLE IF EXISTS `team_event`;
CREATE TABLE IF NOT EXISTS `team_event` (
  `Event_team` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `event_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

DROP TABLE IF EXISTS `temp_users`;
CREATE TABLE IF NOT EXISTS `temp_users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` varchar(100) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `enum` varchar(100) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `enum`, `userEmail`, `userPass`, `date`, `time`) VALUES
('1', 'Bhavya Doshi', '150320107023', 'bdoshi97@gmail.com', '71cb9c95f4671716eb34f9aee50cbb1ae4e8b6311d0c5cd159d72686a5662483', '11/09/2017', '09:30:18 pm'),
('2', 'Jaymish Patel', '1503201.7036', 'jaymishrpatel@gmail.com', 'cddadbf9ee653b7972eb754b33d75dfabe1dc4e48e87a907a9d5b1cc0b04529b', '03/08/2018', '12:02:01 am');

-- --------------------------------------------------------

--
-- Table structure for table `users_co`
--

DROP TABLE IF EXISTS `users_co`;
CREATE TABLE IF NOT EXISTS `users_co` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_co`
--

INSERT INTO `users_co` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'Jay', 'jaymishrpatel@gmail.com', '2a54b03c527f38439a22f3a0095fadfbc5994be0ff3541b9f448f8106e957cb8'),
(2, 'Bhavya Doshi', 'bdoshi97@gmail.com', '71cb9c95f4671716eb34f9aee50cbb1ae4e8b6311d0c5cd159d72686a5662483');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
