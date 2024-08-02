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
-- Database: `tabulationdb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(150) NOT NULL,
  `abbrev` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `image`, `abbrev`) VALUES
('CAND01', 'STEPHANIE', 'images/CAND01/img.jpg', 'Stephanie'),
('CAND02', 'MORENO', 'images/CAND02/img.jpg', 'Moreno'),
('CAND03', 'CINDY', 'images/CAND03/img.jpg', 'Cindy'),
('CAND04', 'MUSES', '', 'Muses'),
('CAND05', 'AXEL', '', 'Axel'),
('CAND06', 'MICYLLA', '', 'Micylla'),
('CAND07', 'ALYSSA', '', 'Alyssa'),
('CAND08', '4G', '', '4G'),
('CAND09', 'PSB', '', 'PSB'),
('CAND10', 'ERWINDO', '', 'Erwindo'),
('CAND11', 'GERI ANN', '', 'Geri Ann'),
('CAND12', 'JEAN SARAH', '', 'Jean Sarah');

-- --------------------------------------------------------

--
-- Table structure for table `candidatescore`
--

CREATE TABLE IF NOT EXISTS `candidatescore` (
  `judge` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `score` int(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `creative` int(20) NOT NULL,
  `showman` int(20) NOT NULL,
  `entertain` int(20) NOT NULL,
  `abbrev` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidatescore`
--

INSERT INTO `candidatescore` (`judge`, `name`, `score`, `nickname`, `creative`, `showman`, `entertain`, `abbrev`) VALUES
('user1', 'STEPHANIE', 97, 'Judge 1', 40, 37, 20, 'Stephanie'),
('user2', 'STEPHANIE', 86, 'Judge 2', 36, 35, 15, 'Stephanie'),
('user3', 'STEPHANIE', 88, 'Judge 3', 38, 35, 15, 'Stephanie'),
('user1', 'MORENO', 95, 'Judge 1', 39, 39, 17, 'Moreno'),
('user2', 'MORENO', 88, 'Judge 2', 36, 36, 16, 'Moreno'),
('user3', 'MORENO', 92, 'Judge 3', 37, 38, 17, 'Moreno'),
('user1', 'CINDY', 91, 'Judge 1', 35, 36, 20, 'Cindy'),
('user2', 'CINDY', 93, 'Judge 2', 37, 39, 17, 'Cindy'),
('user3', 'CINDY', 94, 'Judge 3', 38, 38, 18, 'Cindy'),
('user1', 'MUSES', 90, 'Judge 1', 35, 35, 20, 'Muses'),
('user3', 'MUSES', 87, 'Judge 3', 36, 35, 16, 'Muses'),
('user2', 'MUSES', 85, 'Judge 2', 35, 35, 15, 'Muses'),
('user1', 'AXEL', 92, 'Judge 1', 37, 37, 18, 'Axel'),
('user3', 'AXEL', 95, 'Judge 3', 38, 39, 18, 'Axel'),
('user2', 'AXEL', 90, 'Judge 2', 37, 35, 18, 'Axel'),
('user3', 'MICYLLA', 84, 'Judge 3', 34, 35, 15, 'Micylla'),
('user2', 'MICYLLA', 85, 'Judge 2', 35, 35, 15, 'Micylla'),
('user1', 'MICYLLA', 93, 'Judge 1', 37, 36, 20, 'Micylla'),
('user1', 'ALYSSA', 98, 'Judge 1', 40, 40, 18, 'Alyssa'),
('user2', 'ALYSSA', 95, 'Judge 2', 40, 38, 17, 'Alyssa'),
('user3', 'ALYSSA', 93, 'Judge 3', 38, 37, 18, 'Alyssa'),
('user1', '4G', 94, 'Judge 1', 36, 38, 20, '4G'),
('user3', '4G', 84, 'Judge 3', 34, 35, 15, '4G'),
('user2', '4G', 91, 'Judge 2', 37, 37, 17, '4G'),
('user3', 'PSB', 96, 'Judge 3', 39, 39, 18, 'PSB'),
('user2', 'PSB', 99, 'Judge 2', 40, 40, 19, 'PSB'),
('user1', 'ERWINDO', 91, 'Judge 1', 35, 36, 20, 'Erwindo'),
('user2', 'ERWINDO', 92, 'Judge 2', 37, 37, 18, 'Erwindo'),
('user3', 'ERWINDO', 89, 'Judge 3', 34, 37, 18, 'Erwindo'),
('user1', 'PSB', 100, 'Judge 1', 40, 40, 20, 'PSB'),
('user1', 'GERI ANN', 91, 'Judge 1', 35, 39, 17, 'Geri Ann'),
('user2', 'GERI ANN', 95, 'Judge 2', 38, 39, 18, 'Geri Ann'),
('user3', 'GERI ANN', 85, 'Judge 3', 35, 35, 15, 'Geri Ann'),
('user1', 'JEAN SARAH', 92, 'Judge 1', 35, 37, 20, 'Jean Sarah'),
('user3', 'JEAN SARAH', 93, 'Judge 3', 37, 38, 18, 'Jean Sarah'),
('user2', 'JEAN SARAH', 94, 'Judge 2', 38, 38, 18, 'Jean Sarah');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nickname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `nickname`) VALUES
(1, 'user1', 'pass1', 'Judge 1'),
(2, 'user2', 'pass2', 'Judge 2'),
(3, 'user3', 'pass3', 'Judge 3'),
(4, 'user4', 'pass4', 'Judge 4'),
(5, 'user5', 'pass5', 'Judge 5');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `name` varchar(30) NOT NULL,
  `score` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `score`) VALUES
('STEPHANIE', 90.33),
('MORENO', 91.67),
('CINDY', 92.67),
('MUSES', 87.33),
('AXEL', 92.33),
('MICYLLA', 87.33),
('ALYSSA', 95.33),
('4G', 89.67),
('PSB', 98.33),
('ERWINDO', 90.67),
('GERI ANN', 90.33),
('JEAN SARAH', 93.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
