-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2021 at 04:20 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productID`) VALUES
(6),
(8);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'featured'),
(2, 'marketplace');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `productCode` varchar(10) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `listPrice` decimal(10,2) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `inCart` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `listPrice`, `stock`, `imagePath`, `inCart`) VALUES
(1, 1, 'shirt', 'Mens Red Rhude T-shirt', '120.00', 0, 'images/rhude2.png', 0),
(2, 1, 'shoes', 'Yeezy 380 Alien 10M', '400.00', 0, 'images/yeezy380.png', 0),
(3, 1, 'jacket', 'Mens Palm Angels Jacket', '220.00', 0, 'images/palmangels3.png', 0),
(4, 1, 'shoes', 'MOMA AF1', '3500.00', 0, 'images/momaaf1.png', 0),
(5, 1, 'shoes', 'OW Foam Runner 7.5M', '400.00', 0, 'images/owshoe.png', 0),
(6, 2, 'shoes', 'AJ1 Royal 9M', '500.00', 0, 'images/jordan1royal.png', 1),
(7, 2, 'shoes', 'OW Jordan 1 8M', '2500.00', 1, 'images/offwhitejordan1.png', 0),
(8, 2, 'shoes', 'Bapesta YBG 10M', '350.00', 0, 'images/bapesta.png', 1),
(9, 2, 'shoes', 'Nike SB DUNK 11M', '400.00', 1, 'images/reddunk.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 62607, 'testing1234', 'testing', '2021-12-07 21:17:37'),
(2, 716324, 'test', '1234', '2021-12-07 02:59:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
