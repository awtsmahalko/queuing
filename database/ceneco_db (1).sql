-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2020 at 09:53 AM
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
(1, 1, 'R', '2020-01-28 14:11:32', 0);

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
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_que_board`
--
ALTER TABLE `tbl_que_board`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_teller`
--
ALTER TABLE `tbl_teller`
  MODIFY `teller_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
