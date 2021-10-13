-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 02:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_result`
--

CREATE TABLE `add_result` (
  `sid` int(11) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `gpa1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `gpa2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `gpa3` varchar(255) NOT NULL,
  `p4` varchar(255) NOT NULL,
  `gpa4` varchar(255) NOT NULL,
  `p5` varchar(255) NOT NULL,
  `gpa5` varchar(255) NOT NULL,
  `p6` varchar(255) NOT NULL,
  `gpa6` varchar(255) NOT NULL,
  `p7` varchar(255) NOT NULL,
  `gpa7` varchar(255) NOT NULL,
  `p8` varchar(255) NOT NULL,
  `gpa8` varchar(255) NOT NULL,
  `p9` varchar(255) NOT NULL,
  `gpa9` varchar(255) NOT NULL,
  `p10` varchar(255) NOT NULL,
  `gpa10` varchar(255) NOT NULL,
  `p11` varchar(255) NOT NULL,
  `gpa11` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_result`
--

INSERT INTO `add_result` (`sid`, `roll`, `u_name`, `semester`, `branch`, `p1`, `gpa1`, `p2`, `gpa2`, `p3`, `gpa3`, `p4`, `gpa4`, `p5`, `gpa5`, `p6`, `gpa6`, `p7`, `gpa7`, `p8`, `gpa8`, `p9`, `gpa9`, `p10`, `gpa10`, `p11`, `gpa11`) VALUES
(1, 'b119001', 'Adarsh', '5th', 'CSE', 'IWT-1', '8', 'OS', '7.8', 'DCCN', '8.2', 'ICE', '7.9', 'TOC', '8.5', 'ROBO', '7.4', 'WSM', '8.0', 'DCCN LAB', '9', '', '', '', '', '', ''),
(0, 'b119002', 'Anusha', '5th', 'CSE', 'IWT-1', '8', 'OS', '7.8', 'TOC', '8.0', 'WSM', '7.8', 'ROBO', '7.3', 'ICE', '8.4', 'DCCN', '8.3', 'DCCN LAB', '9.2', '', '', '', '', '', ''),
(0, 'b119001', 'Adarsh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(0, 'b119003', 'Pulipaka Nimeshika', '5th', 'CE', 'IWT-1', '8', 'OS', '7.8', 'TOC', '8.0', 'WSM', '8', 'ROBO', '7.3', 'ICE', '8.4', 'DCCN', '8.5', 'DCCN LAB', '9.2', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(10) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_password`) VALUES
(1, 'admin', 'admin@123'),
(2, 'admin2', 'admin2@123'),
(3, 'admin2', 'admin2@123'),
(4, 'admin4', 'admin2@123');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `sid` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`sid`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '1st', 'CSE/CE/IT', 'Physics', 3),
(2, '1st', 'CSE/CE/IT', 'programming-1', 4),
(3, '1st', 'CSE/CE/IT', 'Math-I', 3),
(4, '1st', 'CSE/CE/IT', 'Oral communication', 2),
(5, '1st', 'CSE/CE/IT', 'IEL(electronics)', 3),
(6, '1st', 'CSE/CE/IT', 'BME(mechanics)', 4),
(7, '1st', 'CSE/CE/IT', 'C LAB', 2),
(8, '1st', 'CSE/CE/IT', 'IEL LAB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `sid` int(11) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`sid`, `sem`, `branch`, `subject`, `credits`) VALUES
(1, '2nd', 'CSE/CE/IT', 'BET(Electrical)', 3),
(2, '2nd', 'CSE/CE/IT', 'DS(Data Structure)', 4),
(3, '2nd', 'CSE/CE/IT', 'EES(Environmental)', 2),
(4, '2nd', 'CSE/CE/IT', 'Math-II', 3),
(5, '2nd', 'CSE/CE/IT', 'DS LAB', 2),
(6, '2nd', 'CSE/CE/IT', 'BET LAB', 2),
(7, '2nd', 'CSE/CE/IT', 'CS', 2),
(8, '2nd', 'CSE/CE/IT', 'workshop', 2),
(9, '2nd', 'CSE/CE/IT', 'EES LAB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `s_id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`s_id`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '3rd', 'CSE/CE/IT', 'DEC', 4),
(2, '3rd', 'CSE/CE/IT', 'programming-II', 4),
(3, '3rd', 'CSE/CE/IT', 'CS-III', 2),
(4, '3rd', 'CSE/CE/IT', 'AEC(optional)', 3),
(5, '3rd', 'CSE/CE/IT', 'NT(optional)', 3),
(6, '3rd', 'CSE/CE/IT', 'SPE(optional)', 3),
(7, '3rd', 'CSE/CE/IT', 'DEC LAB', 2),
(8, '3rd', 'CSE/CE/IT', 'Prog-II Lab', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `sid` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`sid`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '4th', 'CSE/CE/IT', 'AMC(optional)', '3'),
(2, '4th', 'CSE/CE/IT', 'Discrete Structure', '3'),
(3, '4th', 'CSE/CE/IT', 'CS', '2'),
(4, '4th', 'CSE/CE/IT', 'BME(managment)', '4'),
(5, '4th', 'CSE/CE/IT', 'COA', '4'),
(6, '4th', 'CSE/CE/IT', 'DAA', '4'),
(7, '4th', 'CSE/CE/IT', 'DSP(optional)', '3'),
(8, '4th', 'CSE/CE/IT', 'COA LAB', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `sid` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem5`
--

INSERT INTO `sem5` (`sid`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '5th', 'CSE/CE/IT', 'IWT-1(Web Development)', '5'),
(2, '5th', 'CSE/CE/IT', 'OS(Operating System)', '4'),
(3, '5th', 'CSE/CE/IT', 'TOC(Computation)', '3'),
(4, '5th', 'CSE/CE/IT', 'WSM(Optional)', '3'),
(5, '5th', 'CSE/CE/IT', 'ROBO(Optional)', '3'),
(6, '5th', 'CSE/CE/IT', 'ICE', '3'),
(7, '5th', 'CSE/CE/IT', 'DCCN', '4'),
(8, '5th', 'CSE/CE/IT', 'CSE(Optional)', '3'),
(9, '5th', 'CSE/CE/IT', 'ACBB(Optional)', '3'),
(10, '5th', 'CSE/CE/IT', 'DCCN LAB', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `sid` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`sid`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '6th', 'CSE/CE/IT', 'AI', 4),
(2, '6th', 'CSE/CE/IT', 'Cloud computing', 3),
(3, '6th', 'CSE/CE/IT', 'JAVA', 4),
(4, '6th', 'CSE/CE/IT', 'IOT', 3),
(5, '6th', 'CSE/CE/IT', 'MPMC', 3),
(6, '6th', 'CSE/CE/IT', 'IOT LAB', 2),
(7, '6th', 'CSE/CE/IT', 'JAVA LAB', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE `sem7` (
  `sid` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem7`
--

INSERT INTO `sem7` (`sid`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '7th', 'CSE/CE/IT', 'AI-II', '4'),
(2, '7th', 'CSE/CE/IT', 'ACA', '3'),
(3, '7th', 'CSE/CE/IT', 'GA', '3'),
(4, '7th', 'CSE/CE/IT', 'Pattern Recognition', '3'),
(5, '7th', 'CSE/CE/IT', 'VLSI Design', '3');

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE `sem8` (
  `sid` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `credits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem8`
--

INSERT INTO `sem8` (`sid`, `semester`, `branch`, `subject`, `credits`) VALUES
(1, '8th', 'CSE/CE/IT', 'DIP(Image Processing)', '4'),
(2, '8th', 'CSE/CE/IT', 'EES-II', '3'),
(3, '8th', 'CSE/CE/IT', 'Satellite Communication', '3');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `ID` int(10) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `u_mobile` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`ID`, `u_name`, `roll`, `u_mobile`, `branch`, `semester`) VALUES
(1, 'Adarsh', 'b119001', '6500012367', 'CSE', '5th'),
(2, 'anusha', 'b119002', '6591266777', 'CSE', '5th');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `u_id` int(11) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`u_id`, `roll`, `u_password`) VALUES
(1, 'b119001', 'Adarsh@123'),
(1, 'b119001', 'Adarsh@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student1`
--
ALTER TABLE `student1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student1`
--
ALTER TABLE `student1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
