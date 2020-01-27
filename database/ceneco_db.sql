-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 04:34 PM
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
  `que_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_que`
--

INSERT INTO `tbl_que` (`que_id`, `que_no`, `que_type`, `que_date`, `que_status`) VALUES
(1, 1, 'R', '2020-01-25 21:50:50', 0),
(2, 2, 'R', '2020-01-25 21:50:53', 0),
(3, 1, 'P', '2020-01-25 21:50:55', 0),
(4, 3, 'R', '2020-01-25 21:51:07', 0),
(5, 2, 'P', '2020-01-25 21:51:10', 0),
(6, 4, 'R', '2020-01-25 21:55:10', 0),
(7, 3, 'P', '2020-01-25 21:55:18', 0),
(8, 5, 'R', '2020-01-25 21:55:33', 0),
(9, 4, 'P', '2020-01-25 21:55:38', 0),
(10, 6, 'R', '2020-01-25 21:55:40', 0),
(11, 7, 'R', '2020-01-25 21:56:15', 0),
(12, 5, 'P', '2020-01-25 21:56:18', 0),
(13, 8, 'R', '2020-01-25 21:59:20', 0),
(14, 6, 'P', '2020-01-25 21:59:23', 0),
(15, 7, 'P', '2020-01-25 21:59:26', 0),
(16, 9, 'R', '2020-01-25 21:59:29', 0),
(17, 10, 'R', '2020-01-25 22:02:05', 0),
(18, 8, 'P', '2020-01-25 22:58:54', 0),
(19, 11, 'R', '2020-01-25 22:59:01', 0),
(20, 12, 'R', '2020-01-25 22:59:05', 0),
(21, 13, 'R', '2020-01-25 22:59:07', 0),
(22, 14, 'R', '2020-01-25 22:59:10', 0),
(23, 15, 'R', '2020-01-25 22:59:16', 0),
(24, 16, 'R', '2020-01-25 22:59:18', 0),
(25, 17, 'R', '2020-01-25 23:04:20', 0),
(26, 9, 'P', '2020-01-25 23:04:22', 0),
(27, 10, 'P', '2020-01-25 23:04:36', 0),
(28, 18, 'R', '2020-01-25 23:04:38', 0),
(29, 11, 'P', '2020-01-25 23:04:40', 0),
(30, 12, 'P', '2020-01-25 23:04:42', 0),
(31, 19, 'R', '2020-01-25 23:04:44', 0),
(32, 13, 'P', '2020-01-25 23:52:53', 0),
(33, 20, 'R', '2020-01-25 23:52:56', 0),
(34, 1, 'R', '2020-01-26 00:00:27', 0),
(35, 1, 'P', '2020-01-26 00:00:29', 0),
(36, 2, 'R', '2020-01-26 00:00:31', 0),
(37, 1, 'R', '2020-01-27 20:37:43', 0),
(38, 1, 'P', '2020-01-27 20:37:45', 0),
(39, 2, 'P', '2020-01-27 20:37:48', 0),
(40, 2, 'R', '2020-01-27 20:37:50', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_que`
--
ALTER TABLE `tbl_que`
  ADD PRIMARY KEY (`que_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_que`
--
ALTER TABLE `tbl_que`
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
