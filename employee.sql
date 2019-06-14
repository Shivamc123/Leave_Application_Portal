-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 06:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_apply`
--

CREATE TABLE `leave_apply` (
  `leave_apply_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `total_days` int(11) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `applied_date` date NOT NULL,
  `approved_date` date DEFAULT NULL,
  `approv_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_apply`
--

INSERT INTO `leave_apply` (`leave_apply_id`, `user_id`, `user_name`, `leave_type`, `from_date`, `to_date`, `total_days`, `reason`, `status`, `applied_date`, `approved_date`, `approv_id`) VALUES
(22, 36111150, 'shivam', 'restricted leave', '2019-09-14', '2019-07-14', 4, 'ascsac', 'Accepted', '2019-06-14', '2019-06-14', 2),
(21, 36111150, 'shivam', 'restricted leave', '2019-06-14', '2019-06-14', 1, 'szf', 'Rejected', '2019-06-14', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `Emp_name` varchar(100) DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `isgrp_head` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `user`, `pass`, `Emp_name`, `designation`, `isgrp_head`) VALUES
(1, 'admin', 'pass', 'Admin', '', 1),
(2, 'shivam', 'shiv', 'shivam', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_apply`
--
ALTER TABLE `leave_apply`
  ADD PRIMARY KEY (`leave_apply_id`),
  ADD UNIQUE KEY `leave_apply_id` (`leave_apply_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_apply`
--
ALTER TABLE `leave_apply`
  MODIFY `leave_apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
