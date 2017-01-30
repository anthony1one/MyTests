-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2017 at 09:38 AM
-- Server version: 5.5.54-0+deb8u1
-- PHP Version: 5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mytests_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `session_activity`
--

CREATE TABLE IF NOT EXISTS `session_activity` (
`Id` int(11) NOT NULL,
  `SessionId` varchar(40) NOT NULL,
  `TestId` int(11) NOT NULL,
  `TestResult` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session_activity`
--

INSERT INTO `session_activity` (`Id`, `SessionId`, `TestId`, `TestResult`) VALUES
(12, 'k99q750is9bdlnqj2rvpjs63r4', 2, 4),
(13, 'k99q750is9bdlnqj2rvpjs63r4', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `test_info`
--

CREATE TABLE IF NOT EXISTS `test_info` (
`Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Question_num` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_info`
--

INSERT INTO `test_info` (`Id`, `Name`, `Question_num`, `Description`) VALUES
(1, 'Уверены ли вы в себе?', 7, 'Этот тест поможет вам ответить на вопрос – уверенный ли вы в себе человек или только производите такое впечатление? Выберите один из предложенных вариантов ответа.'),
(2, 'Проверка сайта', 10, 'Тренировочный вариант проверки работы сайта');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `session_activity`
--
ALTER TABLE `session_activity`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `test_info`
--
ALTER TABLE `test_info`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `session_activity`
--
ALTER TABLE `session_activity`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `test_info`
--
ALTER TABLE `test_info`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
