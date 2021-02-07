-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 01:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azure_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `Name` varchar(60) NOT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Salary` varchar(50) DEFAULT NULL,
  `Grade` varchar(15) DEFAULT NULL,
  `Room` varchar(10) DEFAULT NULL,
  `Telnum` varchar(15) DEFAULT NULL,
  `Picture` varchar(100) NOT NULL,
  `Keywords` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`Name`, `State`, `Salary`, `Grade`, `Room`, `Telnum`, `Picture`, `Keywords`) VALUES
('Chuck', 'TX', '1000', '98', '420', '', 'chuck.jpg', 'Jees is too'),
('Darwin', 'TN', '25', '100', '', '1009', 'dar.jpg', 'Darwin is very creative'),
('Dave', 'NN', '20', '40', '525', '0', 'dave.jpg', 'Who is this'),
('Dhruvi', 'TX', '99099', '100', '550', '1000010', 'dhru.jpg', 'Dhruvi is nice'),
('Meena', 'TX', '125000', '99', '', '', ' ', 'Meena is outa here'),
('Nora', 'TX', '-1', '80', '520', '808', ' ', ''),
('Susan', 'OK', '255000', '84', '101', '911', ' ', 'Susan is very smart'),
('Tavo', 'CA', '220200', ' ', '', '', 'tavo.jpg', 'Tavo works very hard'),
('Tuan', 'CA', '', '80', '-1', '', ' ', 'Tuan is gone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
