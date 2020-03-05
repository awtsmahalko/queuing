-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 02:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

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
  `que_status` int(1) NOT NULL COMMENT '0:S;1:F;2:Serving',
  `kind` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_que`
--

INSERT INTO `tbl_que` (`que_id`, `que_no`, `que_type`, `que_date`, `que_status`, `kind`) VALUES
(1, 1, 'R', '2020-01-28 14:11:32', 0, 0),
(2, 1, 'R', '2020-01-29 10:38:03', 1, 0),
(3, 2, 'R', '2020-01-29 10:38:03', 1, 0),
(4, 3, 'R', '2020-01-29 10:38:03', 1, 0),
(5, 4, 'R', '2020-01-29 10:38:03', 1, 0),
(6, 5, 'R', '2020-01-29 10:38:04', 1, 0),
(7, 6, 'R', '2020-01-29 10:38:04', 2, 0),
(8, 7, 'R', '2020-01-29 10:38:04', 2, 0),
(9, 8, 'R', '2020-01-29 10:38:04', 0, 0),
(10, 9, 'R', '2020-01-29 10:38:04', 0, 0),
(11, 10, 'R', '2020-01-29 10:38:04', 0, 0),
(12, 11, 'R', '2020-01-29 10:38:05', 0, 0),
(13, 1, 'P', '2020-01-29 10:38:05', 1, 0),
(14, 12, 'R', '2020-01-29 10:38:06', 0, 0),
(15, 13, 'R', '2020-01-29 10:38:06', 0, 0),
(16, 14, 'R', '2020-01-29 10:38:06', 0, 0),
(17, 15, 'R', '2020-01-29 10:38:06', 0, 0),
(18, 1, 'R', '2020-02-03 08:58:24', 2, 0),
(19, 2, 'R', '2020-02-03 08:58:24', 2, 0),
(20, 3, 'R', '2020-02-03 08:58:24', 2, 0),
(21, 4, 'R', '2020-02-03 08:58:24', 0, 0),
(22, 5, 'R', '2020-02-03 08:58:24', 0, 0),
(23, 6, 'R', '2020-02-03 08:58:25', 0, 0),
(24, 7, 'R', '2020-02-03 08:58:25', 0, 0),
(25, 8, 'R', '2020-02-03 08:58:25', 0, 0),
(26, 9, 'R', '2020-02-03 08:58:25', 0, 0),
(27, 10, 'R', '2020-02-03 08:58:26', 0, 0),
(28, 11, 'R', '2020-02-03 08:58:26', 0, 0),
(29, 12, 'R', '2020-02-03 08:58:26', 0, 0),
(30, 13, 'R', '2020-02-03 08:58:26', 0, 0),
(31, 14, 'R', '2020-02-03 08:58:26', 0, 0),
(32, 15, 'R', '2020-02-03 08:58:27', 0, 0),
(33, 16, 'R', '2020-02-03 08:58:27', 0, 0),
(34, 17, 'R', '2020-02-03 08:58:27', 0, 0),
(35, 1, 'P', '2020-02-03 08:58:28', 1, 0),
(36, 2, 'P', '2020-02-03 08:58:28', 1, 0),
(37, 3, 'P', '2020-02-03 08:58:28', 1, 0),
(38, 4, 'P', '2020-02-03 08:58:28', 1, 0),
(39, 18, 'R', '2020-02-03 08:58:29', 0, 0),
(40, 19, 'R', '2020-02-03 08:58:29', 0, 0),
(41, 20, 'R', '2020-02-03 08:58:29', 0, 0),
(42, 21, 'R', '2020-02-03 08:58:30', 0, 0),
(43, 22, 'R', '2020-02-03 08:58:30', 0, 0),
(44, 23, 'R', '2020-02-03 08:58:30', 0, 0),
(45, 24, 'R', '2020-02-03 08:58:30', 0, 0),
(46, 25, 'R', '2020-02-03 08:58:31', 0, 0),
(47, 26, 'R', '2020-02-03 08:58:31', 0, 0),
(48, 27, 'R', '2020-02-03 08:58:31', 0, 0),
(49, 28, 'R', '2020-02-03 08:58:31', 0, 0),
(50, 29, 'R', '2020-02-03 08:58:31', 0, 0),
(51, 5, 'P', '2020-02-03 08:58:32', 1, 0),
(52, 6, 'P', '2020-02-03 08:58:33', 1, 0),
(53, 7, 'P', '2020-02-03 08:58:33', 2, 0),
(54, 8, 'P', '2020-02-03 08:58:33', 2, 0),
(55, 9, 'P', '2020-02-03 08:58:34', 2, 0),
(56, 30, 'R', '2020-02-03 08:58:34', 0, 0),
(57, 31, 'R', '2020-02-03 08:58:34', 0, 0),
(58, 32, 'R', '2020-02-03 08:58:35', 0, 0),
(59, 33, 'R', '2020-02-03 08:58:35', 0, 0),
(60, 10, 'P', '2020-02-03 10:22:13', 0, 0),
(61, 1, 'R', '2020-02-05 05:58:01', 0, 0),
(62, 1, 'P', '2020-02-17 20:57:57', 0, 0),
(63, 2, 'P', '2020-02-17 21:08:13', 0, 0),
(64, 1, 'R', '2020-02-18 21:12:01', 2, 0),
(65, 2, 'R', '2020-02-18 21:12:04', 2, 0),
(66, 3, 'R', '2020-02-18 21:12:05', 0, 0),
(67, 1, 'P', '2020-02-18 21:12:07', 2, 0),
(68, 1, 'R', '2020-03-04 22:26:05', 0, 0),
(69, 1, 'P', '2020-03-04 22:26:09', 0, 0),
(70, 2, 'R', '2020-03-04 22:26:14', 0, 0),
(71, 2, 'P', '2020-03-04 22:26:23', 0, 2),
(72, 1, 'R', '2020-03-05 21:30:45', 0, 0),
(73, 1, 'P', '2020-03-05 21:33:32', 0, 1),
(74, 2, 'R', '2020-03-05 21:33:52', 0, 0);

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
  `date` date NOT NULL,
  `kind` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_que_board`
--

INSERT INTO `tbl_que_board` (`board_id`, `que_id`, `teller_id`, `que_no`, `que_type`, `status`, `bell_status`, `date`, `kind`) VALUES
(1, 13, 1, 1, 'P', 1, 0, '2020-01-29', 0),
(2, 2, 1, 1, 'R', 1, 0, '2020-01-29', 0),
(3, 3, 2, 2, 'R', 1, 0, '2020-01-29', 0),
(4, 4, 2, 3, 'R', 1, 0, '2020-01-29', 0),
(5, 5, 1, 4, 'R', 1, 0, '2020-01-29', 0),
(6, 6, 1, 5, 'R', 1, 0, '2020-01-29', 0),
(7, 7, 1, 6, 'R', 0, 0, '2020-01-29', 0),
(8, 8, 2, 7, 'R', 0, 0, '2020-01-29', 0),
(9, 35, 1, 1, 'P', 1, 0, '2020-02-03', 0),
(10, 36, 1, 2, 'P', 1, 0, '2020-02-03', 0),
(11, 37, 1, 3, 'P', 1, 0, '2020-02-03', 0),
(12, 38, 1, 4, 'P', 1, 0, '2020-02-03', 0),
(13, 51, 2, 5, 'P', 1, 0, '2020-02-03', 0),
(14, 52, 3, 6, 'P', 1, 0, '2020-02-03', 0),
(15, 53, 4, 7, 'P', 0, 0, '2020-02-03', 0),
(16, 54, 1, 8, 'P', 0, 0, '2020-02-03', 0),
(17, 55, 5, 9, 'P', 0, 0, '2020-02-03', 0),
(18, 18, 2, 1, 'R', 0, 0, '2020-02-03', 0),
(19, 19, 6, 2, 'R', 0, 0, '2020-02-03', 0),
(20, 20, 3, 3, 'R', 0, 0, '2020-02-03', 0),
(21, 67, 1, 1, 'P', 0, 1, '2020-02-18', 0),
(22, 64, 2, 1, 'R', 0, 1, '2020-02-18', 0),
(23, 65, 3, 2, 'R', 0, 1, '2020-02-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teller`
--

CREATE TABLE `tbl_teller` (
  `teller_id` int(11) NOT NULL,
  `teller_name` varchar(50) NOT NULL,
  `teller_status` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teller`
--

INSERT INTO `tbl_teller` (`teller_id`, `teller_name`, `teller_status`, `username`, `password`) VALUES
(1, 'Counter 1', 1, 'counter1', 'afe706f452a646d0c61ca1ae748409c3'),
(2, 'Counter 2', 1, 'counter2', '27b1b0d75fa3f32f972c20bbc0de0e7b'),
(3, 'Counter 3', 1, 'counter3', '2081460408f9d4fd6645940d7aff9dc5'),
(4, 'Counter 4', 1, 'counter4', '7671aa72585f0bebe3707ada6e57a3c8'),
(5, 'Counter 5', 1, 'counter5', 'd7c84dc790a68f46880075f109c66bd0'),
(6, 'Counter 6', 1, 'counter6', '676759bf92df9c9d594a01690beefb37');

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
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_que_board`
--
ALTER TABLE `tbl_que_board`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_teller`
--
ALTER TABLE `tbl_teller`
  MODIFY `teller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
