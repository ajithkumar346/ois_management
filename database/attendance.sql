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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Employee_Id` varchar(100) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Login_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Logout_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `Report` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Employee_Id`, `Employee_Name`, `Password`, `Login_Time`, `Logout_Time`, `Status`, `Report`) VALUES
('OIS0002', 'Ajith', '123456', '2019-04-02 11:20:20', '2019-04-02 11:20:20', 0, ''),
('OIS0004', 'Chethan', '123456', '2019-04-02 11:20:56', '2019-04-02 11:20:56', 0, ''),
('OIS00044', 'Tapaswini', '123456', '2019-04-02 11:22:35', '2019-04-02 11:22:35', 0, ''),
('OIS00049', 'Lavanya', '123456', '2019-04-02 11:24:19', '2019-04-02 11:24:19', 0, ''),
('OIS0005', 'Vysakh', '123456', '2019-04-02 11:21:23', '2019-04-02 11:21:23', 0, ''),
('OIS00050', 'Shyam kumar', '123456', '2019-04-02 11:24:45', '2019-04-02 11:24:45', 0, ''),
('OIS00051', 'Shreya', '123456', '2019-04-02 11:25:04', '2019-04-02 11:25:04', 0, ''),
('OIS00052', 'Rakhi', '123456', '2019-04-02 11:25:18', '2019-04-02 11:25:18', 0, ''),
('OIS00054', 'Shree', '123456', '2019-04-02 11:26:29', '2019-04-02 11:26:29', 0, ''),
('OIS00055\r\n', 'Akshaya', '123456', '2019-04-02 11:25:56', '2019-04-02 11:25:56', 0, ''),
('OIS00056', 'Yamuna', '123456', '2019-04-02 11:24:02', '2019-04-02 11:24:02', 0, ''),
('OIS0006', 'Ravikiran', '123456', '2019-04-02 11:21:48', '2019-04-02 11:21:48', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Employee_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
