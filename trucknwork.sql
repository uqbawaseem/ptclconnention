-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: May 29, 2022 at 05:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trucknwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`) VALUES
(1, '1', 'qQ', 'q@gmail.com', 'Q', 'Q'),
(2, 'ali', 'wali', 'aliwali@gmail.com', 'complaint', 'please complete it as early as poosible'),
(3, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'ahmad', 'ahmad@gmail.com', 'password', '0000000000'),
(2, 'qasim', 'qasim@gmail.com', 'password', '0000000000'),
(3, 'waqas ', 'waqas@gmail.com', 'password', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `city` varchar(25) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `originAddress` varchar(25) NOT NULL,
  `destinationAddress` varchar(25) NOT NULL,
  `distance_covered` int(255) NOT NULL,
  `truck_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_phone` varchar(25) NOT NULL,
  `bill` varchar(225) NOT NULL,
  `bill_status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `city`, `user_email`, `originAddress`, `destinationAddress`, `distance_covered`, `truck_id`, `driver_id`, `user_id`, `user_phone`, `bill`, `bill_status`) VALUES
(1, 'lahore', 'uqba', 'lahore', 'islamabad', 0, 2, 1, 1, '', '65000', ''),
(2, 'll', 'uqba@gmail.com', 'uper', 'nichy', 0, 2, 1, 1, '0000000000', '6500', 'paid'),
(3, 'pishawar', 'uqba@gmail.com', 'pichawar', 'multan', 0, 1, 2, 1, '0000000000', '', ''),
(4, 'pishawar', 'uqba@gmail.com', 'pichawar', 'multan', 0, 1, 2, 1, '0000000000', '', ''),
(5, 'pishawar', 'uqba@gmail.com', 'pichawar', 'multan', 0, 1, 2, 1, '0000000000', '', ''),
(6, 'pishawar', 'uqba@gmail.com', 'pichawar', 'multan', 0, 1, 2, 1, '0000000000', '', ''),
(7, 'pishawar', 'uqba@gmail.com', 'pichawar', 'multan', 0, 1, 2, 1, '0000000000', '', ''),
(8, 'pishawar', 'uqba@gmail.com', 'pichawar', 'multan', 0, 1, 2, 1, '0000000000', '', ''),
(9, 'multan', 'aliwali@gmail.com', 'District Office Environme', '402 Marina, Juhu Tara Roa', 0, 2, 1, 3, '0987654321', '5000', 'unpaid'),
(10, 'pindi', 'uqba@gmail.com', 'pindi', 'sialkot', 23, 4, 1, 1, '0000000000', '', ''),
(11, 'pindi', 'uqba@gmail.com', 'pindi', 'sialkot', 23, 4, 1, 1, '0000000000', '', ''),
(12, 'hello', 'uqba@gmail.com', 'hello', 'bye', 23, 4, 1, 1, '0000000000', '', ''),
(13, 'hello', 'uqba@gmail.com', 'hello', 'bye', 23, 4, 1, 1, '0000000000', '10000', ''),
(14, 'bill', 'uqba@gmail.com', 'bill', 'bill', 23, 4, 2, 1, '0000000000', '10000', ''),
(15, 'bill', 'uqba@gmail.com', 'bill', 'bill', 23, 4, 2, 1, '0000000000', '10000', '');

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `id` int(11) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `name_plate` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`id`, `company_name`, `name_plate`, `model`) VALUES
(1, 'suzuki', 'tru-0987', '2022'),
(2, 'nissan', 'tru-0123', '2021'),
(3, 'nissan', 'tru-0983', '2022'),
(4, 'kia', 'kia-0212', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'uqba', 'uqba@gmail.com', 'password', '0000000000', 'qw12qw12'),
(2, 'anas', 'anas@gmail.com', 'password', '00000000', 'qw12qw12'),
(3, 'ali', 'aliwali@gmail.com', 'password', '0987654321', '4 North School Rd. Milled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_with_truck` (`truck_id`),
  ADD KEY `trip_with_user` (`user_id`),
  ADD KEY `trip_with_driver` (`driver_id`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_with_driver` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`id`),
  ADD CONSTRAINT `trip_with_truck` FOREIGN KEY (`truck_id`) REFERENCES `truck` (`id`),
  ADD CONSTRAINT `trip_with_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
