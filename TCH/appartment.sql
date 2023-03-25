-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 08:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(10, 'Sarthak Gurung', 2147483647, 'sarthakgurung@gmail.com', '2022-08-23', 'Not Allowed'),
(11, 'sarthak gurung ', 984545, 'asda@gmail.com', '2022-12-11', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(3, 'sarthak', 'kahtras'),
(7, 'admin', 'admin'),
(9, 'Purnima ', 'executivedirector'),
(10, 'Sharda', 'advisor'),
(11, 'Nisha', 'secretary');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p-id` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `people` int(11) DEFAULT NULL,
  `min` date DEFAULT NULL,
  `room` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `bed` double(8,2) DEFAULT NULL,
  `payment` varchar(30) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p-id`, `id`, `title`, `fname`, `lname`, `troom`, `tbed`, `people`, `min`, `room`, `fintot`, `bed`, `payment`, `noofdays`) VALUES
(1, 1, 'Mr.', 'Ayush', 'Shahi', 'Room with view', 'Double', 4, '2022-09-08', 175000.00, 210000.00, 35000.00, 'Monthly', 0),
(2, 4, 'Miss.', 'Liza', 'Maharjan', 'Penthouse', 'Single', 1, '2022-09-14', 250000.00, 300000.00, 50000.00, 'Yearly', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(11) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_no`, `type`, `bedding`, `place`, `cusid`) VALUES
(30, 'D3', 'Deluxe Room', 'Triple', 'Free', NULL),
(31, 'P1', 'Penthouse', 'Single', 'NotFree', 4),
(32, 'R1', 'Room with view', 'Single', 'Free', NULL),
(33, 'P2', 'Penthouse', 'Double', 'Free', NULL),
(34, 'R3', 'Room with view', 'Triple', 'Free', NULL),
(36, 'D1', 'Deluxe Room', 'Single', 'Free', NULL),
(37, 'L1', 'Luxury Room', 'Single', 'Free', NULL),
(38, 'D2', 'Deluxe Room', 'Double', 'Free', NULL),
(39, 'L2', 'Luxury Room', 'Double', 'Free', NULL),
(40, 'L3', 'Luxury Room', 'Triple', 'Free', NULL),
(41, 'R2', 'Room with view', 'Double', 'NotFree', 2),
(42, 'P3', 'Penthouse', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `People` varchar(2) DEFAULT NULL,
  `Payment` varchar(15) DEFAULT NULL,
  `Movein` date DEFAULT NULL,
  `Occupancy` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `Phone`, `TRoom`, `Bed`, `People`, `Payment`, `Movein`, `Occupancy`, `stat`) VALUES
(1, 'Mr.', 'ayush', 'shahi', 'ayus.shahi11@gmail.com', '9840215482', 'Room with view', 'Double', '4', 'Monthly', '2022-09-09', '2022-09-12', 'Confirm'),
(2, 'Mr.', 'Sergious', 'Gurung', 'sergiousgurung@gmail.com', '9803781799', 'Deluxe Room', 'Triple', '1', 'Monthly', '2022-09-08', NULL, 'Not Confirm'),
(3, 'Miss.', 'Lishu', 'Maharjan', 'maharjanlishu@gmail.com', '9843820691', 'Luxury Room', 'Single', '2', 'Monthly', '2022-09-09', NULL, 'Not Confirm'),
(4, 'Miss.', 'Liza', 'Maharjan', 'leeza.mhr@gmail.com', '9843820682', 'Penthouse', 'Single', '1', 'Yearly', '2022-09-14', '2022-12-11', 'Confirm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p-id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cusid` (`cusid`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
