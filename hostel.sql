-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 12:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'anuj.lpu1@gmail.com', 'Test@1234', '2016-04-04 20:31:45', '2016-04-17'),
(2, 'luchi', 'emmanuelchilyambuto@gmail.com ', '4428', '2022-10-10 06:48:06', '0000-00-00'),
(3, 'user1', 'user1@gmail.com', 'user1', '2022-10-13 19:00:19', '0000-00-00'),
(4, 'user2', 'user2@gmail.com', 'user2', '2022-10-13 19:00:19', '0000-00-00'),
(5, 'user3', 'user3@gmail.com', 'user3', '2022-10-13 19:02:18', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deleted`
--

CREATE TABLE `deleted` (
  `roomno` varchar(100) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `egycontactno` varchar(100) NOT NULL,
  `guardianName` varchar(111) NOT NULL,
  `guardianRelation` varchar(111) NOT NULL,
  `guardianContactno` varchar(111) NOT NULL,
  `pmntCity` varchar(111) NOT NULL,
  `postingDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deleted`
--

INSERT INTO `deleted` (`roomno`, `seater`, `feespm`, `stayfrom`, `duration`, `regno`, `firstName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `pmntCity`, `postingDate`) VALUES
('china', 5, 500, '2020-08-01', 6, 1, 'Lewis', 'Luko', 'male', '1234567890', 'ak@gmail.com', '1236547890', 'ABC', 'XYZ', '98756320000', 'Rufunsa', '2022-10-15'),
('Chicago ', 2, 450, '2022-10-12', 3, 10806129, 'Luyando ', 'Haachamba', 'female', '972768565', 'nassa19nasa@gmail.com', '968989004', 'mr doe', 'father ', '968989002', 'kabwe', '2022-10-15'),
('Chicago ', 2, 450, '2022-10-15', 3, 10806136, 'Ronah', 'namwila', 'female', '976050704', 'ssa19nasa@gmail.com', '968989004', 'mr chanda', 'father ', '968989002', 'Lusaka', '2022-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `Full Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `Date added` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Full Name`, `Email`, `contact`, `password`, `user_type`, `Date added`) VALUES
(10001, 'Emmanuel Chilyambuto ', 'emmanuelchilyambuto@gmail.com ', '0976050704', '4428', 'user', '2022-09-18 22:00:00.000000'),
(10002, 'admin', 'admin@gmail.com', '0976050705', 'Admin', 'admin', '0000-00-00 00:00:00.000000'),
(10003, 'Luyando Haachamba', 'luyandohachamba@gmail.com', '0972768565', 'luchi', 'staff1', '2022-09-19 20:08:53.934845'),
(10004, 'staff', 'user', '1111', 'user', 'staff2', '2022-09-19 20:41:20.289709'),
(10005, 'Prudence Chilyambuto', 'prudencechilyambuto@gmail.com', '0968989004', 'prudence', 'staff3', '2022-09-20 14:19:15.689994'),
(10006, 'Elisha Chilyambuto', 'e1chilyambuto@gmail.com', '0976050706', '1234', 'staff4', '2022-09-20 15:55:59.465626'),
(10007, 'Elijah Chilyambuto', 'e2chilyambuto@gmail.com', '0976050707', '1234', 'staff5', '2022-09-20 15:56:20.321677'),
(10008, 'Steve Chilyambuto', 'e3chilyambuto@gmail.com', '0976050708', '1234', 'staff6', '2022-09-20 15:56:43.014892'),
(10009, 'Lewis lukobeka', 'lukolewis@gmail.com', '0977665544', 'lewis', 'user', '2022-09-25 05:44:26.917260'),
(10010, 'Towela', 'dicksonmulalu21@gmail.com', '0779234501', '0779234501', 'user', '2022-09-29 14:56:43.776346');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `roomno` varchar(11) DEFAULT NULL,
  `seater` int(11) DEFAULT NULL,
  `feespm` int(11) DEFAULT NULL,
  `stayfrom` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `emailid` varchar(500) DEFAULT NULL,
  `egycontactno` bigint(11) DEFAULT NULL,
  `guardianName` varchar(500) DEFAULT NULL,
  `guardianRelation` varchar(500) DEFAULT NULL,
  `guardianContactno` bigint(11) DEFAULT NULL,
  `pmntCity` varchar(500) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`roomno`, `seater`, `feespm`, `stayfrom`, `duration`, `regno`, `firstName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `pmntCity`, `postingDate`, `updationDate`) VALUES
('Chicago ', 2, 450, '0000-00-00', 0, 2, 'Emmanuel', 'Chilyambuto', 'male', 976050704, 'emmanuelchilyambuto@gmail.com', 968989004, 'mr Chilyambuto ', 'father ', 968989002, 'Lusaka', '2022-10-10 15:14:04', NULL),
('Ghana ', 2, 450, '2022-10-15', 0, 10806137, 'john', 'chanda', 'male', 976050704, 'dicksonmulalu21@gmail.com', 968989004, 'mr doe', 'father ', 968989002, 'Lusaka', '2022-10-15 17:06:28', NULL),
('kabwe', 2, 567, '2022-10-15', 1, 10806138, 'Deric', 'Bwalya', 'male', 977203047, 'marketing.epc@gmail.com', 1234, 'mr doe', 'father ', 567, 'Lusaka', '2022-10-15 21:58:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_no` varchar(11) NOT NULL,
  `seater` int(11) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `seater`, `fees`, `posting_date`) VALUES
('ABCD', 4, 22, '2022-10-15 17:04:39'),
('Chicago ', 2, 450, '0000-00-00 00:00:00'),
('Egypt ', 4, 400, '2022-10-10 13:35:36'),
('Ethiopia ', 3, 500, '2022-10-10 13:35:36'),
('Ghana ', 2, 450, '2022-10-10 13:37:17'),
('Guinea Biss', 4, 500, '2022-10-10 13:37:17'),
('Ivory cost ', 3, 400, '2022-10-10 13:38:35'),
('japan', 2, 444, '2022-10-15 12:21:58'),
('kabwe', 2, 567, '2022-10-15 21:56:33'),
('Morocco ', 3, 500, '2022-10-10 13:38:35'),
('Niger ', 2, 450, '2022-10-10 13:40:04'),
('Nigeria ', 2, 500, '2022-10-10 13:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(6, 3, '10806121', 0x3a3a31, '', '', '2020-07-20 14:56:45'),
(7, 3, 'test@gmail.com', 0x3a3a31, '', '', '2022-10-08 12:57:38'),
(8, 3, 'test@gmail.com', 0x3a3a31, '', '', '2022-10-10 06:37:23'),
(9, 3, 'test@gmail.com', 0x3a3a31, '', '', '2022-10-10 06:41:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleted`
--
ALTER TABLE `deleted`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10011;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10806139;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
