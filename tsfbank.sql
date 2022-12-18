-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 08:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsfbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Srno` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Account_No` int(10) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Srno`, `Name`, `Email`, `Account_No`, `Phone_No`, `Balance`) VALUES
(1, 'Aayush Juhukar', 'aj@gmail.com', 1026, 988743209, 12205),
(2, 'Yukta Wagh', 'yw@gmail.com', 2563, 981254730, 7380),
(3, 'Drishti Agrawal', 'da@gmail.com', 8549, 981254732, 8255),
(4, 'Rahul Deshpande', 'rd@gmail.com', 1257, 981254737, 1000),
(5, 'Robert Dias', 'rod@gmail.com', 9631, 981254754, 16100),
(6, 'Siddhesh Utekar', 'su@gmail.com', 7125, 981274737, 50),
(7, 'Naman Jaiswal', 'nj@gmail.com', 1081, 981254710, 8514),
(8, 'Timura Ojha', 'to@gmail.com', 5012, 881254737, 10255),
(9, 'Rhea Chettiar', 'rc@gmail.com', 9014, 481254737, 8000),
(10, 'Ronak Lopes', 'rl@gmail.com', 2156, 581254737, 10254);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `Srno` int(11) NOT NULL,
  `Sender` int(11) NOT NULL,
  `Receiver` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Transfer_status` varchar(10) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`Srno`, `Sender`, `Receiver`, `Amount`, `Transfer_status`, `Date_Time`) VALUES
(1, 2563, 1026, 50, 'Success', '2022-12-16 15:40:01'),
(2, 9631, 1026, 2000, 'Success', '2022-12-16 15:40:01'),
(3, 7125, 1026, 100, 'Error', '2022-12-16 15:40:01'),
(4, 2563, 1026, 1000, 'Success', '2022-12-16 15:40:01'),
(5, 8549, 1026, 1000, 'Success', '2022-12-17 07:20:48'),
(6, 1026, 2563, 1000, 'Success', '2022-12-17 09:31:35'),
(7, 1026, 2563, 10, 'Success', '2022-12-17 09:49:10'),
(8, 1026, 2563, 1000, 'Success', '2022-12-17 18:43:07'),
(9, 1257, 2563, 2000, 'Error', '2022-12-17 18:43:54'),
(10, 1026, 2563, 10, 'Success', '2022-12-18 07:44:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`Srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
