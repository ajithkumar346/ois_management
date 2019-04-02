-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 02:06 PM
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
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `emp_id` varchar(10) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `login_time` varchar(20) NOT NULL,
  `out_time_b` varchar(20) NOT NULL,
  `in_time_b` varchar(20) NOT NULL,
  `out_time_l` varchar(20) NOT NULL,
  `in_time_l` varchar(20) NOT NULL,
  `out_time_t` varchar(20) NOT NULL,
  `in_time_t` varchar(20) NOT NULL,
  `logout_time` varchar(20) NOT NULL,
  `total_hrs` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`emp_id`, `employee_name`, `login_time`, `out_time_b`, `in_time_b`, `out_time_l`, `in_time_l`, `out_time_t`, `in_time_t`, `logout_time`, `total_hrs`, `date`) VALUES
('OIS0001', 'Jyothi', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS0002', 'Ajith', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS0003', 'Santosh', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS0004', 'Chethan', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS00044', 'Tapaswini', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS00049', 'Lavanya', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS0005', 'Vysakh', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS00050', 'Shyam kumar', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS00051', 'Shreya', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS00052', 'Rakhi', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS00053', 'Shailendra', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS00054', 'Shree', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS00055', 'Akshaya', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('OIS0006', 'Ravikiran', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
