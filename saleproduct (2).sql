-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 05:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saleproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `ProductID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `ProductImage` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`ProductID`, `Name`, `ProductImage`, `Price`) VALUES
(7, 'BMW', 'motor1-01.jpg', 10000),
(9, 'BMW', 'motor1-02.jpg', 15000),
(10, 'Kawazaki Z650', 'motor1-04.jpg', 4000),
(11, 'Kawazaki Z800', 'motor1-03.jpg', 6500),
(12, 'Kawazaki Z900', 'motor1-05.jpg', 7000),
(13, 'Kawazaki Z1000', 'motor1-06.jpg', 12000),
(14, 'Ducati', 'motor1-07.jpg', 5000),
(15, 'Ducati', 'motor1-08.jpg', 20000),
(16, 'Ducati', 'motor1-09.jpg', 10000),
(17, 'Ducati', 'motor1-10.jpg', 10000),
(18, 'Ducati', 'motor1-11.jpg', 3000),
(19, 'Kawazaki Ninja400', 'motor1-12.jpg', 4500),
(20, 'Kawazaki Ninja300', 'motor1-13.jpg', 2000),
(21, 'Kawazaki Ninja1000sx', 'motor1-14.jpg', 10000),
(22, 'Kawazaki Ninja700', 'motor1-15.jpg', 6000),
(23, 'Kawazaki z10x', 'motor1-16.jpg', 12500),
(24, 'Kawazaki Ninja650', 'motor1-17.jpg', 4000),
(25, 'Kawazaki ZX 25r', 'motor1-18.jpg', 15000),
(26, 'Kawazaki Ninja H2', 'motor1-19.jpg', 20000),
(27, 'Kawazaki Ninja H2r', 'motor1-20.jpg', 20000),
(28, 'Kawazaki z250', 'motor1-21.jpg', 3000),
(29, 'Kawazaki z125', 'motor1-22.jpg', 2000),
(30, 'CBR 250r', 'motor1-23.jpg', 3000),
(31, 'CBR 650', 'motor1-24.jpg', 5000),
(32, 'CBR 150', 'motor1-25.jpg', 2000),
(33, 'CBR 1000r', 'motor1-26.jpg', 7000),
(34, 'CBR 1000r 2021', 'motor1-27.jpg', 15000),
(35, 'CBR 1000r 2014', 'motor1-28.jpg', 5600),
(36, 'CBR 1000r 2017', 'motor1-29.jpg', 6500),
(37, 'Kawazaki Versys', 'motor1-30.jpg', 15000),
(38, 'BMW Gs 1200', 'motor1-31.jpg', 20000),
(39, 'Yamaha YZF R1 2021', 'motor1-32.jpg', 10000),
(40, 'Yamaha YZF R15 ', 'motor1-33.jpg', 6500),
(41, 'Yamaha YZF R15 ', 'motor1-34.jpg', 7000),
(42, 'Yamaha YZF R150 ', 'motor1-35.jpg', 2000),
(43, 'Yamaha MT 15', 'motor1-36.jpg', 2400),
(44, 'Duck KTM', 'motor1-37.jpg', 3000),
(45, 'Duck KTM 250', 'motor1-38.jpg', 4000),
(46, 'Duck KTM', 'motor1-39.jpg', 1500),
(47, 'Duck KTM 200', 'motor1-40.jpg', 3500),
(48, 'Duck KTM Bike ', 'motor1-41.jpg', 4000),
(49, 'Yamaha YZF R6', 'motor1-42.jpg', 10000),
(50, 'Hakley', 'motor1-43.jpg', 15000),
(51, 'Hakley', 'motor1-44.jpg', 15000),
(52, 'Hakley', 'motor1-45.jpg', 15000),
(53, 'Hakley', 'motor1-46.jpg', 10000),
(54, 'Duck KTM RC1290', 'motor1-47.jpg', 10000),
(55, 'Duck Supper', 'motor1-48.jpg', 20000),
(56, 'Yamaha YZF R6', 'motor1-49.jpg', 7000),
(57, 'Brabus', 'motor1-50.jpg', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'SonSokpov', '$2y$10$yfaDPRXfkjToHuj7U9mQ8eJOb8.sXfz7EaSz/mMT6uLsHSL8ndJiG', '2022-02-04 09:35:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
