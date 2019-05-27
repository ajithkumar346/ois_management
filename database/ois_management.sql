-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 09:43 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Employee_Id` varchar(100) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Photo_path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Employee_Id`, `Employee_Name`, `Designation`, `Password`, `image`, `Photo_path`) VALUES
('OIS0001', 'Jyothi', 'Business Development Manager', '123456', 'jyoo.jpeg', 'upload/'),
('OIS0002', 'Ajith', '', '123456', 'ajith.jpeg', 'upload/'),
('OIS0003', 'Santosh', '', '123456', 'santosh.jpg', 'upload/'),
('OIS0004', 'Chethan', '', '123456', 'chethan.jpg', 'upload/'),
('OIS00044', 'Tapaswini', '', '123456', 'tappu.jpeg', 'upload/'),
('OIS00049', 'Lavanya', '', '123456', 'lavanya.jpeg', 'upload/'),
('OIS0005', 'Vysakh', '', '123456', 'vysakh.jpeg', 'upload/'),
('OIS00050', 'Shyam kumar', '', '123456', 'shyam.jpeg', 'upload/'),
('OIS00051', 'Shreya', '', '123456', 'shreya.jpeg', 'upload/'),
('OIS00052', 'Rakhi', '', '123456', 'rakhi.jpeg', 'upload/'),
('OIS00054', 'Shree', '', '123456', 'shree.jpeg', 'upload/'),
('OIS00055\r\n', 'Akshaya', '', '123456', 'akshaya.jpeg', 'upload/'),
('OIS00056', 'Yamuna', '', '123456', 'yamuna.jpg', 'upload/'),
('OIS00057', 'Chandni', '', '123456', 'chandni.jpg', 'upload/'),
('OIS0006', 'Ravikiran', '', '123456', 'ravikiran.jpg', 'upload/');

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `Employee_Id` varchar(10) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Login_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `out_time_b` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `in_time_b` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `out_time_l` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `in_time_l` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `out_time_t` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `in_time_t` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Logout_Time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total_hrs` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`Employee_Id`, `Employee_Name`, `Designation`, `Login_Time`, `out_time_b`, `in_time_b`, `out_time_l`, `in_time_l`, `out_time_t`, `in_time_t`, `Logout_Time`, `total_hrs`, `created_at`, `updated_at`) VALUES
('OIS0001', 'Jyothi', 'Business Development Manager', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS0002', 'Ajith', 'Sr. UI UX Designer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS0003', 'Santosh', 'HR Manager', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS0004', 'Chethan', 'Embedded Engineer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00044', 'Tapaswini', 'Sr HR Recruiter', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00049', 'Lavanya', 'Sr HR Recruiter', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS0005', 'Vysakh', 'Embedded Engineer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00050', 'Shyam kumar', 'Recruitment Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00051', 'Shreya', 'Sr HR Recruiter', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00052', 'Rakhi', 'Sr HR Recruiter', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00053', 'Shailendra', 'Sr HR Recruiter', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00054', 'Shree', 'Sr HR Recruiter', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00055', 'Akshaya', 'Recruitment Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00056', 'Yamuna', 'Recruitment Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS00057', 'Chandni', 'Business Development Officer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14'),
('OIS0006', 'Ravikiran', 'Embedded System Engineer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2003-02-23 18:30:00', '', '2019-04-15 16:58:14', '2019-04-15 16:58:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Employee_Id`);

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`Employee_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
