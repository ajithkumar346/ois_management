-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 02:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ois_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `date` date NOT NULL,
  `OIS0001` int(10) NOT NULL,
  `OIS0002` int(10) NOT NULL,
  `OIS0003` int(10) NOT NULL,
  `OIS0004` int(10) NOT NULL,
  `OIS00044` int(10) NOT NULL,
  `OIS00049` int(10) NOT NULL,
  `OIS0005` int(10) NOT NULL,
  `OIS00050` int(10) NOT NULL,
  `OIS00051` int(10) NOT NULL,
  `OIS00052` int(10) NOT NULL,
  `OIS00053` int(10) NOT NULL,
  `OIS00054` int(10) NOT NULL,
  `OIS00055` int(10) NOT NULL,
  `OIS0006` int(10) NOT NULL,
  `OIS00056` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`date`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
