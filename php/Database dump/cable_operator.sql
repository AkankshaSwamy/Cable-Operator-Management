-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 07:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cable_operator`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`` PROCEDURE `city` ()   SELECT * FROM customer_details$$

CREATE DEFINER=`` PROCEDURE `citysp` (IN `city` INT(20))   SELECT * from customer_details$$

CREATE DEFINER=`` PROCEDURE `countcity` (IN `city` VARCHAR(20))   SELECT cust_id,cust_name,duration FROM connection_details where duration=120$$

CREATE DEFINER=`` PROCEDURE `packdetails` ()   select * from pack_details$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `connection_details`
--

CREATE TABLE `connection_details` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `sb_no` varchar(10) NOT NULL,
  `conn_date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `conn_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connection_details`
--

INSERT INTO `connection_details` (`cust_id`, `cust_name`, `sb_no`, `conn_date`, `duration`, `conn_amt`) VALUES
(101, 'Akashghgh', 'WE3412', '2023-01-11', 120, 2300),
(102, 'Anjali', 'BD7J4G5', '2021-08-01', 150, 2500),
(103, 'Akshu', '234556', '2022-12-26', 121, 2000),
(104, 'Akram', 'BD234', '2022-12-29', 120, 2000),
(105, 'Adam', '3K5R6M', '2021-06-01', 200, 2500),
(106, 'Monika', 'AB8D9GF', '2018-01-03', 150, 2300),
(107, 'Naveen', '4ER321', '2020-09-15', 250, 1500),
(108, 'Priyanka', 'ET56R34', '0000-00-00', 120, 2000),
(109, 'Anu', '37YU7T', '2022-11-07', 123, 1800),
(110, 'Sanjana', 'BD43IO', '2019-08-04', 120, 2000),
(111, 'Shivani', 'M65HG60', '2022-01-03', 150, 2300);

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `address` varchar(15) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`cust_id`, `name`, `address`, `city`, `phone`, `email_id`) VALUES
(101, 'Anjaliasas', 'Basavanagar', 'Bangalore', 987654320, 'anjali@gmail.com'),
(102, 'Rishi', 'attigupe', 'bangalore', 2323231, 'rishi@gmail.com'),
(103, 'Bharath', 'Navanagar', 'Dharwad', 987645320, 'bharath@gmail.com'),
(104, 'Rahul', 'Sriramnagar', 'Hospet', 984545320, 'rahul@gmail.com'),
(105, 'Naveen', 'Rajajinagar', 'Bangalore', 234567890, 'naveen@gmail.com'),
(106, 'Shreyas', 'Basavanagar', 'Koppal', 234516778, 'shreyas@gmail.com'),
(107, 'Mohan', 'Vasavinagar', 'Bellary', 345677888, 'mohan@gmail.com'),
(108, 'Akram', 'chansandra', 'bangalore', 2323231, 'akram@gmail.com'),
(109, 'Anilkumar', 'Basavanagar', 'Bangalore', 987634560, 'anilkumar@gmail.com'),
(110, 'Nidhi', 'j p nagar', 'bangalore', 53454535, 'nidhi@gmail.com'),
(111, 'Sampath', 'Vasavinagar', 'Koppal', 987655555, 'sampath@gmail.com'),
(112, 'Ruchi', 'J P Nagar', 'Bangalore', 987635560, 'ruchi@gmail.com'),
(113, 'Aparna', 'Kengeri', 'Bangalore', 234566778, 'aparna@gmail.com'),
(114, 'Ritika', 'Nehru Nagar', 'Bangalore', 956634560, 'ritika@gmail.com'),
(115, 'Sheetal', 'Basavanagar', 'Bangalore', 987332200, 'sheetal@gmail.com'),
(116, 'seeta', 'j p nagar', 'bangalore', 345678871, 'seeta@gmail.com'),
(117, 'madhu', 'kengeri', 'bangalore', 23224224, 'madhu@gmail.com'),
(118, 'swamy', 'kengeri', 'bangalore', 23456744, 'swamy@gmail.com'),
(120, 'pooja', 'rajajinagar', 'bidar', 43442424, 'pooja@gmail.com');

--
-- Triggers `customer_details`
--
DELIMITER $$
CREATE TRIGGER `DELETELOG` BEFORE DELETE ON `customer_details` FOR EACH ROW INSERT INTO LOGS values(null,old.cust_id,'deleted',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATELOG` AFTER UPDATE ON `customer_details` FOR EACH ROW INSERT INTO LOGS values(null,new.cust_id,'updated',now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) DEFAULT NULL,
  `customer_details_cust_id` int(11) DEFAULT NULL,
  `action` varchar(10) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `customer_details_cust_id`, `action`, `cdate`) VALUES
(NULL, 119, 'deleted', '2023-01-11 15:29:12'),
(NULL, 102, 'deleted', '2023-01-11 15:29:33'),
(NULL, 110, 'deleted', '2023-01-11 15:34:34'),
(NULL, 108, 'deleted', '2023-01-11 15:36:58'),
(NULL, 101, 'deleted', '2023-01-11 16:52:59'),
(NULL, 124, 'deleted', '2023-01-14 15:37:31'),
(NULL, 101, 'updated', '2023-01-15 11:38:28'),
(NULL, 101, 'updated', '2023-01-15 11:40:29'),
(NULL, 124, 'updated', '2023-01-15 11:41:04'),
(NULL, 124, 'deleted', '2023-01-15 12:59:28'),
(NULL, 101, 'updated', '2023-01-15 13:00:01'),
(NULL, 101, 'updated', '2023-01-15 13:00:08'),
(NULL, 125, 'updated', '2023-01-16 10:00:47'),
(NULL, 125, 'deleted', '2023-01-16 10:01:03'),
(NULL, 101, 'updated', '2023-01-16 10:02:24'),
(NULL, 125, 'deleted', '2023-01-18 14:59:12'),
(NULL, 101, 'updated', '2023-01-19 13:17:03'),
(NULL, 101, 'updated', '2023-01-19 15:42:51'),
(NULL, 125, 'updated', '2023-01-20 18:53:27'),
(NULL, 125, 'deleted', '2023-01-20 18:53:59'),
(NULL, 101, 'updated', '2023-01-26 19:13:09'),
(NULL, 0, 'deleted', '2023-01-28 23:46:18'),
(NULL, 124, 'updated', '2023-01-28 23:52:02'),
(NULL, 124, 'deleted', '2023-01-28 23:52:10'),
(NULL, 113, 'deleted', '2023-01-28 23:57:11'),
(NULL, 107, 'updated', '2023-01-29 09:27:51'),
(NULL, 107, 'updated', '2023-01-29 09:28:15'),
(NULL, 114, 'deleted', '2023-01-29 09:40:13'),
(NULL, 126, 'updated', '2023-01-30 10:22:36'),
(NULL, 126, 'deleted', '2023-01-30 10:22:40'),
(NULL, 123, 'deleted', '2023-01-30 10:36:57'),
(NULL, 112, 'deleted', '2023-01-30 10:47:20'),
(NULL, 101, 'updated', '2023-01-30 12:49:19'),
(NULL, 122, 'deleted', '2023-01-30 16:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `pack_details`
--

CREATE TABLE `pack_details` (
  `slno` int(11) NOT NULL,
  `pack_name` varchar(20) NOT NULL,
  `pack_amt` int(11) NOT NULL,
  `pack_type` varchar(10) NOT NULL,
  `pack_duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pack_details`
--

INSERT INTO `pack_details` (`slno`, `pack_name`, `pack_amt`, `pack_type`, `pack_duration`) VALUES
(1, 'BRDS Platinum', 2000, 'FHD', '2 months'),
(2, 'BRDS Gold', 1000, 'SDR', '1 month'),
(3, 'BDRS Platinum', 1200, 'DRF', '4 mpnths'),
(4, 'ASDR', 2000, 'FGH', '7 months'),
(5, 'BRDS Platinum', 1000, 'FHD', '2 months'),
(6, 'BDRS Platinum', 1200, 'FGH', '2 months'),
(7, 'BDRS Platinum', 1000, 'FDH', '1 month'),
(8, 'PLATINUM ', 1500, 'DRF', '3 months'),
(9, 'abcd', 1200, 'FHD', '2 months'),
(10, 'ASDR', 2300, 'FDH', '3 months');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `slno` int(11) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`slno`, `cust_name`, `amount`, `pay_date`) VALUES
(1, 'Anjali', 2300, '2023-01-01'),
(2, 'Monika', 2000, '2022-11-07'),
(3, 'Rahul', 1200, '2023-01-01'),
(4, 'Adam', 1450, '2022-08-07'),
(5, 'Naveen', 2100, '2022-12-12'),
(6, 'Akshu', 2000, '2022-12-12'),
(7, 'Madhu', 2000, '2022-11-07'),
(8, 'Swamy', 2100, '2023-01-01'),
(9, 'Pooja', 1900, '2022-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `pooja`
--

CREATE TABLE `pooja` (
  `name` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recharge_details`
--

CREATE TABLE `recharge_details` (
  `slno` int(11) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `pack_name` varchar(20) NOT NULL,
  `sb_no` varchar(20) NOT NULL,
  `recharge_date` date NOT NULL,
  `end_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `duration` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recharge_details`
--

INSERT INTO `recharge_details` (`slno`, `cust_name`, `pack_name`, `sb_no`, `recharge_date`, `end_date`, `amount`, `duration`) VALUES
(1, 'Rahul', 'BRDS Platinum', '3E4SST', '2022-09-13', '2022-12-31', 2300, '120'),
(2, 'Monika', 'BRDS Gold', '5T7U8N', '2022-07-12', '2022-09-01', 2000, '150'),
(3, 'Rahul', 'BDRS Platinum', '3K5R6M', '0000-00-00', '2023-02-02', 1200, '150'),
(4, 'Adam', 'BRDS Platinum', '3K5R6M', '2022-08-07', '2022-12-03', 2300, '200'),
(5, 'Akash', 'Platinum', '3K5SA6M', '2022-11-06', '2023-01-01', 2300, '120'),
(6, 'Pavan', 'abcd', '4WE3S6T', '2022-09-04', '2022-11-06', 2000, '120'),
(7, 'Naveen', 'BRDS Platinum', '4SDS6T', '2022-09-04', '2022-11-07', 1200, '120'),
(8, 'Akram', 'BRDS Platinum', '3K5SA6M', '2022-10-09', '2023-01-02', 2300, '250'),
(9, 'Shreyas', 'Platinum', '3K5SREW', '2022-09-04', '2022-12-06', 2300, '250'),
(10, 'Rishi', 'BRDS Platinum', '4E3S6T', '2022-07-03', '2022-09-06', 1200, '120');

-- --------------------------------------------------------

--
-- Table structure for table `settupbox_details`
--

CREATE TABLE `settupbox_details` (
  `slno` int(11) NOT NULL,
  `sb_no` varchar(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settupbox_details`
--

INSERT INTO `settupbox_details` (`slno`, `sb_no`, `cust_id`, `cost`, `type`) VALUES
(1, '1234', 110, 5000, 'mp4'),
(2, '3E4SST', 103, 1000, 'mp4'),
(3, '3K5R6M', 121, 1500, 'DEN'),
(4, '5T7U8N', 106, 1200, 'TCCL'),
(5, '4R3T7Q', 123, 1300, 'mp4'),
(6, 'HY4E65', 111, 500, 'mp4'),
(7, 'M6J7H2F', 102, 1200, 'mp4'),
(8, 'A8D98Y', 114, 1600, 'DEN'),
(9, 'DF45E67Y', 109, 1000, 'DEN'),
(10, 'QWO65D', 107, 1450, 'DEN'),
(111, '4SDS6T', 108, 1432, 'DEN'),
(112, '5T7I8N', 114, 1200, 'TCCL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmfield` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `confirmfield`) VALUES
(1, 'Admin', 'admin', ''),
(2, 'Chandler', 'monica', ''),
(3, 'Ross', 'rachel', ''),
(4, 'pooja', 'pooja', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connection_details`
--
ALTER TABLE `connection_details`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `pack_details`
--
ALTER TABLE `pack_details`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `recharge_details`
--
ALTER TABLE `recharge_details`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `settupbox_details`
--
ALTER TABLE `settupbox_details`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connection_details`
--
ALTER TABLE `connection_details`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recharge_details`
--
ALTER TABLE `recharge_details`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settupbox_details`
--
ALTER TABLE `settupbox_details`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
