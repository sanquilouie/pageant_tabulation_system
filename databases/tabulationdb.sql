-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2018 at 04:12 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tabulationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `id` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(150) NOT NULL,
  `abbrev` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `image`, `abbrev`) VALUES
('CAND01', 'COLLEGE OF ALLIED HEALTH AND SCIENCES', 'images/CAND01/img.jpg', 'CAHS'),
('CAND02', 'COLLEGE OF ARTS AND SCIENCES', 'images/CAND02/img.jpg', 'CAS'),
('CAND03', 'COLLEGE OF CRIMINAL JUSTICE EDUCATION', 'images/CAND03/img.jpg', 'CCJE'),
('CAND04', 'COLLEGE OF EDUCATION', '', 'EDUC'),
('CAND05', 'COLLEGE OF INFORMATION TECHNOLOGY AND ENGINEERING', '', 'CITE'),
('CAND06', 'COLLEGE OF MANAGEMENT AND ACCOUNTANCY', '', 'CMA'),
('CAND07', 'BASIC EDUCATION', '', 'BASICED'),
('CAND08', 'SENIOR HIGH SCHOOL', '', 'SHS');

-- --------------------------------------------------------

--
-- Table structure for table `candidatescore`
--

CREATE TABLE IF NOT EXISTS `candidatescore` (
  `judge` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `score` int(20) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `choreo` int(20) NOT NULL,
  `music` int(20) NOT NULL,
  `dress` int(20) NOT NULL,
  `spoken` int(20) NOT NULL,
  `abbrev` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidatescore`
--

INSERT INTO `candidatescore` (`judge`, `name`, `score`, `nickname`, `choreo`, `music`, `dress`, `spoken`, `abbrev`) VALUES
('user1', 'COLLEGE OF ARTS AND SCIENCES', 61, 'Judge 1', 20, 15, 16, 10, 'CAS'),
('user4', 'COLLEGE OF ARTS AND SCIENCES', 86, 'Judge 4', 30, 22, 18, 16, 'CAS'),
('user5', 'COLLEGE OF ARTS AND SCIENCES', 91, 'Judge 5', 33, 23, 18, 17, 'CAS'),
('user3', 'COLLEGE OF ARTS AND SCIENCES', 91, 'Judge 3', 33, 23, 18, 17, 'CAS'),
('user2', 'COLLEGE OF ARTS AND SCIENCES', 85, 'Judge 2', 30, 21, 18, 16, 'CAS'),
('user4', 'COLLEGE OF INFORMATION TECHNOLOGY AND ENGINEERING', 93, 'Judge 4', 34, 23, 18, 18, 'CITE'),
('user2', 'COLLEGE OF INFORMATION TECHNOLOGY AND ENGINEERING', 87, 'Judge 2', 33, 22, 17, 15, 'CITE'),
('user1', 'COLLEGE OF INFORMATION TECHNOLOGY AND ENGINEERING', 71, 'Judge 1', 30, 16, 15, 10, 'CITE'),
('user3', 'COLLEGE OF INFORMATION TECHNOLOGY AND ENGINEERING', 89, 'Judge 3', 32, 23, 17, 17, 'CITE'),
('user5', 'COLLEGE OF INFORMATION TECHNOLOGY AND ENGINEERING', 93, 'Judge 5', 33, 23, 18, 19, 'CITE'),
('user5', 'COLLEGE OF EDUCATION', 96, 'Judge 5', 34, 24, 19, 19, 'EDUC'),
('user2', 'COLLEGE OF EDUCATION', 92, 'Judge 2', 33, 22, 19, 18, 'EDUC'),
('user4', 'COLLEGE OF EDUCATION', 96, 'Judge 4', 34, 24, 19, 19, 'EDUC'),
('user1', 'COLLEGE OF EDUCATION', 85, 'Judge 1', 31, 20, 19, 15, 'EDUC'),
('user3', 'COLLEGE OF EDUCATION', 95, 'Judge 3', 34, 24, 19, 18, 'EDUC'),
('user5', 'SENIOR HIGH SCHOOL', 94, 'Judge 5', 34, 24, 18, 18, 'SHS'),
('user4', 'SENIOR HIGH SCHOOL', 92, 'Judge 4', 34, 23, 18, 17, 'SHS'),
('user1', 'SENIOR HIGH SCHOOL', 86, 'Judge 1', 33, 20, 18, 15, 'SHS'),
('user2', 'SENIOR HIGH SCHOOL', 90, 'Judge 2', 34, 23, 18, 15, 'SHS'),
('user3', 'SENIOR HIGH SCHOOL', 91, 'Judge 3', 33, 23, 18, 17, 'SHS'),
('user4', 'COLLEGE OF ALLIED HEALTH AND SCIENCES', 91, 'Judge 4', 31, 22, 18, 20, 'CAHS'),
('user5', 'COLLEGE OF ALLIED HEALTH AND SCIENCES', 93, 'Judge 5', 32, 23, 19, 19, 'CAHS'),
('user1', 'COLLEGE OF ALLIED HEALTH AND SCIENCES', 68, 'Judge 1', 25, 15, 15, 13, 'CAHS'),
('user2', 'COLLEGE OF ALLIED HEALTH AND SCIENCES', 86, 'Judge 2', 29, 21, 18, 18, 'CAHS'),
('user3', 'COLLEGE OF ALLIED HEALTH AND SCIENCES', 90, 'Judge 3', 32, 23, 18, 17, 'CAHS'),
('user4', 'BASIC EDUCATION', 88, 'Judge 4', 31, 22, 17, 18, 'BASICED'),
('user5', 'BASIC EDUCATION', 93, 'Judge 5', 33, 24, 18, 18, 'BASICED'),
('user2', 'BASIC EDUCATION', 84, 'Judge 2', 30, 22, 17, 15, 'BASICED'),
('user3', 'BASIC EDUCATION', 86, 'Judge 3', 32, 22, 16, 16, 'BASICED'),
('user1', 'BASIC EDUCATION', 64, 'Judge 1', 20, 14, 15, 15, 'BASICED'),
('user4', 'COLLEGE OF CRIMINAL JUSTICE EDUCATION', 88, 'Judge 4', 32, 22, 17, 17, 'CCJE'),
('user5', 'COLLEGE OF CRIMINAL JUSTICE EDUCATION', 94, 'Judge 5', 34, 23, 19, 18, 'CCJE'),
('user3', 'COLLEGE OF CRIMINAL JUSTICE EDUCATION', 84, 'Judge 3', 31, 22, 16, 15, 'CCJE'),
('user1', 'COLLEGE OF CRIMINAL JUSTICE EDUCATION', 80, 'Judge 1', 30, 19, 17, 14, 'CCJE'),
('user2', 'COLLEGE OF CRIMINAL JUSTICE EDUCATION', 84, 'Judge 2', 30, 22, 18, 14, 'CCJE'),
('user4', 'COLLEGE OF MANAGEMENT AND ACCOUNTANCY', 92, 'Judge 4', 33, 23, 17, 19, 'CMA'),
('user5', 'COLLEGE OF MANAGEMENT AND ACCOUNTANCY', 91, 'Judge 5', 33, 23, 17, 18, 'CMA'),
('user1', 'COLLEGE OF MANAGEMENT AND ACCOUNTANCY', 82, 'Judge 1', 31, 19, 17, 15, 'CMA'),
('user2', 'COLLEGE OF MANAGEMENT AND ACCOUNTANCY', 89, 'Judge 2', 34, 22, 18, 15, 'CMA'),
('user3', 'COLLEGE OF MANAGEMENT AND ACCOUNTANCY', 87, 'Judge 3', 32, 22, 17, 16, 'CMA');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `userid_2` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `nickname`) VALUES
(1, 'user1', 'pass1', 'Judge 1'),
(2, 'user2', 'pass2', 'Judge 2'),
(3, 'user3', 'pass3', 'Judge 3'),
(4, 'user4', 'pass4', 'Judge 4'),
(5, 'user5', 'pass5', 'Judge 5'),
(6, 'user6', 'pass6', 'Judge 6'),
(7, 'user7', 'pass7', 'Judge 7');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `name` varchar(200) NOT NULL,
  `score` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `score`) VALUES
('COLLEGE OF ARTS AND SCIENCES', 82.8),
('COLLEGE OF INFORMATION TECHNOLOGY AND ENGINEERING', 86.6),
('COLLEGE OF EDUCATION', 92.8),
('SENIOR HIGH SCHOOL', 90.6),
('COLLEGE OF ALLIED HEALTH AND SCIENCES', 85.6),
('BASIC EDUCATION', 83.0),
('COLLEGE OF CRIMINAL JUSTICE EDUCATION', 86.0),
('COLLEGE OF MANAGEMENT AND ACCOUNTANCY', 88.2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
