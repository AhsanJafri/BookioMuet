-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 01:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookio`
--

-- --------------------------------------------------------

--
-- Table structure for table `chaps_name`
--

CREATE TABLE `chaps_name` (
  `C_ID` int(255) NOT NULL,
  `C_Name` varchar(255) NOT NULL,
  `Sub_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chaps_name`
--

INSERT INTO `chaps_name` (`C_ID`, `C_Name`, `Sub_ID`) VALUES
(1, 'Sine wave', 2),
(2, 'Cos Wave', 2),
(3, 'Tan Wave', 2),
(4, 'Cosine Wave', 2),
(5, 'C_5', 2),
(9, 'Plus', 1),
(10, 'Subtract', 1),
(11, 'Multipy', 1),
(12, 'One', 2),
(20, 'hey', 2),
(21, 'Derivative', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `M_ID` int(255) NOT NULL,
  `M_ques` varchar(5000) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `C_ID` int(255) NOT NULL,
  `S_ID` int(255) NOT NULL,
  `optionone` varchar(255) NOT NULL,
  `optiontwo` varchar(255) NOT NULL,
  `optionthree` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`M_ID`, `M_ques`, `Year`, `C_ID`, `S_ID`, `optionone`, `optiontwo`, `optionthree`, `answer`, `Class`) VALUES
(3, 'Derative Of sine is ?', '2017', 1, 1, 'Cos', '-Cos', 'Tan', 'Cos', 'Inter'),
(4, 'What are the unit of Force is?', '2018', 2, 2, 'Nms', 'Nm.s-1', 'Ns.m-1', 'Ns.m-1', 'First Year'),
(5, 'Formula Of common Salt ?', '2017', 4, 3, 'Nacl', 'NaNo3', 'HCl', 'Nacl', 'First Year'),
(6, 'Charge on an Electron ?', '20107', 3, 3, 'Positive', 'Neutral', 'Negative', 'Postive', 'First Year');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ID` int(255) NOT NULL,
  `Ques` varchar(2000) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `C_ID` int(255) NOT NULL,
  `Sub_ID` int(255) NOT NULL,
  `Q_type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ID`, `Ques`, `Year`, `C_ID`, `Sub_ID`, `Q_type`) VALUES
(3, 'What happens to you when you fall from the height oh 2000m?', '2017', 1, 2, 0),
(4, 'Calculate the 4th Derivative of sine ?', '2018', 9, 1, 0),
(5, 'What is 2+2 ?', '2018', 3, 3, 0),
(6, 'Why why why ?', '2017', 4, 4, 0),
(16, 'Why so serious ?', '2017', 2, 3, 1),
(17, 'Want to see some magic ?', '2018', 2, 2, 1),
(18, 'Hello World ?', '2017', 3, 3, 1),
(19, 'Favourite Movie ?', '2017', 1, 4, 0),
(20, 'Favourite Song ?', '2018', 1, 2, 1),
(21, 'Meaning of Pak ?', '2018', 10, 1, 0),
(22, 'HEHEHEHEHEH !!!', '2017', 2, 3, 1),
(23, 'Wanna Play some game ?', '2018', 2, 2, 0),
(24, 'Hehehehe !! Why so serious ?', '2018', 3, 2, 0),
(25, 'Why being so rangarh ?', '2018', 3, 2, 0),
(26, 'Who are Rangarh ?', '2018', 2, 2, 0),
(45, 'If I don''t then who will ??', '2017', 1, 1, 0),
(54, 'Hello Friends Chaaye peelo', '2017', 9, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Sub_ID` int(255) NOT NULL,
  `Sub_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Sub_ID`, `Sub_Name`) VALUES
(1, 'Math'),
(2, 'Physic'),
(3, 'Chemistry'),
(4, 'Urdu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chaps_name`
--
ALTER TABLE `chaps_name`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `Sub_ID` (`Sub_ID`);

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Year` (`Year`),
  ADD KEY `Sub_ID` (`Sub_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Sub_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chaps_name`
--
ALTER TABLE `chaps_name`
  MODIFY `C_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `M_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chaps_name`
--
ALTER TABLE `chaps_name`
  ADD CONSTRAINT `chaps_name_ibfk_2` FOREIGN KEY (`Sub_ID`) REFERENCES `subject` (`Sub_ID`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_3` FOREIGN KEY (`Sub_ID`) REFERENCES `subject` (`Sub_ID`),
  ADD CONSTRAINT `question_ibfk_4` FOREIGN KEY (`C_ID`) REFERENCES `chaps_name` (`C_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
