-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2020 at 08:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceneco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_que`
--

CREATE TABLE `tbl_que` (
  `que_id` int(11) NOT NULL,
  `que_no` int(11) NOT NULL,
  `que_type` varchar(1) NOT NULL,
  `que_date` datetime NOT NULL,
  `que_status` int(1) NOT NULL COMMENT '0:S;1:F;2:Serving'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_que`
--

INSERT INTO `tbl_que` (`que_id`, `que_no`, `que_type`, `que_date`, `que_status`) VALUES
(1, 1, 'R', '2020-01-28 14:11:32', 0),
(2, 1, 'R', '2020-01-29 10:38:03', 1),
(3, 2, 'R', '2020-01-29 10:38:03', 1),
(4, 3, 'R', '2020-01-29 10:38:03', 1),
(5, 4, 'R', '2020-01-29 10:38:03', 1),
(6, 5, 'R', '2020-01-29 10:38:04', 1),
(7, 6, 'R', '2020-01-29 10:38:04', 2),
(8, 7, 'R', '2020-01-29 10:38:04', 2),
(9, 8, 'R', '2020-01-29 10:38:04', 0),
(10, 9, 'R', '2020-01-29 10:38:04', 0),
(11, 10, 'R', '2020-01-29 10:38:04', 0),
(12, 11, 'R', '2020-01-29 10:38:05', 0),
(13, 1, 'P', '2020-01-29 10:38:05', 1),
(14, 12, 'R', '2020-01-29 10:38:06', 0),
(15, 13, 'R', '2020-01-29 10:38:06', 0),
(16, 14, 'R', '2020-01-29 10:38:06', 0),
(17, 15, 'R', '2020-01-29 10:38:06', 0),
(18, 1, 'R', '2020-02-03 08:58:24', 2),
(19, 2, 'R', '2020-02-03 08:58:24', 2),
(20, 3, 'R', '2020-02-03 08:58:24', 2),
(21, 4, 'R', '2020-02-03 08:58:24', 0),
(22, 5, 'R', '2020-02-03 08:58:24', 0),
(23, 6, 'R', '2020-02-03 08:58:25', 0),
(24, 7, 'R', '2020-02-03 08:58:25', 0),
(25, 8, 'R', '2020-02-03 08:58:25', 0),
(26, 9, 'R', '2020-02-03 08:58:25', 0),
(27, 10, 'R', '2020-02-03 08:58:26', 0),
(28, 11, 'R', '2020-02-03 08:58:26', 0),
(29, 12, 'R', '2020-02-03 08:58:26', 0),
(30, 13, 'R', '2020-02-03 08:58:26', 0),
(31, 14, 'R', '2020-02-03 08:58:26', 0),
(32, 15, 'R', '2020-02-03 08:58:27', 0),
(33, 16, 'R', '2020-02-03 08:58:27', 0),
(34, 17, 'R', '2020-02-03 08:58:27', 0),
(35, 1, 'P', '2020-02-03 08:58:28', 1),
(36, 2, 'P', '2020-02-03 08:58:28', 1),
(37, 3, 'P', '2020-02-03 08:58:28', 1),
(38, 4, 'P', '2020-02-03 08:58:28', 1),
(39, 18, 'R', '2020-02-03 08:58:29', 0),
(40, 19, 'R', '2020-02-03 08:58:29', 0),
(41, 20, 'R', '2020-02-03 08:58:29', 0),
(42, 21, 'R', '2020-02-03 08:58:30', 0),
(43, 22, 'R', '2020-02-03 08:58:30', 0),
(44, 23, 'R', '2020-02-03 08:58:30', 0),
(45, 24, 'R', '2020-02-03 08:58:30', 0),
(46, 25, 'R', '2020-02-03 08:58:31', 0),
(47, 26, 'R', '2020-02-03 08:58:31', 0),
(48, 27, 'R', '2020-02-03 08:58:31', 0),
(49, 28, 'R', '2020-02-03 08:58:31', 0),
(50, 29, 'R', '2020-02-03 08:58:31', 0),
(51, 5, 'P', '2020-02-03 08:58:32', 1),
(52, 6, 'P', '2020-02-03 08:58:33', 1),
(53, 7, 'P', '2020-02-03 08:58:33', 2),
(54, 8, 'P', '2020-02-03 08:58:33', 2),
(55, 9, 'P', '2020-02-03 08:58:34', 2),
(56, 30, 'R', '2020-02-03 08:58:34', 0),
(57, 31, 'R', '2020-02-03 08:58:34', 0),
(58, 32, 'R', '2020-02-03 08:58:35', 0),
(59, 33, 'R', '2020-02-03 08:58:35', 0),
(60, 10, 'P', '2020-02-03 10:22:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_que_board`
--

CREATE TABLE `tbl_que_board` (
  `board_id` int(11) NOT NULL,
  `que_id` int(11) NOT NULL,
  `teller_id` int(11) NOT NULL,
  `que_no` int(11) NOT NULL,
  `que_type` varchar(1) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=''Current'':1=''Finished''',
  `bell_status` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_que_board`
--

INSERT INTO `tbl_que_board` (`board_id`, `que_id`, `teller_id`, `que_no`, `que_type`, `status`, `bell_status`, `date`) VALUES
(1, 13, 1, 1, 'P', 1, 0, '2020-01-29'),
(2, 2, 1, 1, 'R', 1, 0, '2020-01-29'),
(3, 3, 2, 2, 'R', 1, 0, '2020-01-29'),
(4, 4, 2, 3, 'R', 1, 0, '2020-01-29'),
(5, 5, 1, 4, 'R', 1, 0, '2020-01-29'),
(6, 6, 1, 5, 'R', 1, 0, '2020-01-29'),
(7, 7, 1, 6, 'R', 0, 0, '2020-01-29'),
(8, 8, 2, 7, 'R', 0, 0, '2020-01-29'),
(9, 35, 1, 1, 'P', 1, 0, '2020-02-03'),
(10, 36, 1, 2, 'P', 1, 0, '2020-02-03'),
(11, 37, 1, 3, 'P', 1, 0, '2020-02-03'),
(12, 38, 1, 4, 'P', 1, 0, '2020-02-03'),
(13, 51, 2, 5, 'P', 1, 0, '2020-02-03'),
(14, 52, 3, 6, 'P', 1, 0, '2020-02-03'),
(15, 53, 4, 7, 'P', 0, 0, '2020-02-03'),
(16, 54, 1, 8, 'P', 0, 0, '2020-02-03'),
(17, 55, 5, 9, 'P', 0, 0, '2020-02-03'),
(18, 18, 2, 1, 'R', 0, 0, '2020-02-03'),
(19, 19, 6, 2, 'R', 0, 0, '2020-02-03'),
(20, 20, 3, 3, 'R', 0, 0, '2020-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teller`
--

CREATE TABLE `tbl_teller` (
  `teller_id` int(11) NOT NULL,
  `teller_name` varchar(50) NOT NULL,
  `teller_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teller`
--

INSERT INTO `tbl_teller` (`teller_id`, `teller_name`, `teller_status`) VALUES
(1, 'Teller 1', 1),
(2, 'Teller 2', 1),
(3, 'Teller 3', 1),
(4, 'Teller 4', 1),
(5, 'Teller 5', 1),
(6, 'Teller 6', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_que`
--
ALTER TABLE `tbl_que`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `tbl_que_board`
--
ALTER TABLE `tbl_que_board`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `tbl_teller`
--
ALTER TABLE `tbl_teller`
  ADD PRIMARY KEY (`teller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_que`
--
ALTER TABLE `tbl_que`
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tbl_que_board`
--
ALTER TABLE `tbl_que_board`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_teller`
--
ALTER TABLE `tbl_teller`
  MODIFY `teller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
