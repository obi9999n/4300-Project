-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2021 at 07:17 PM
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
  `imagePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `listPrice`, `stock`, `imagePath`) VALUES
(6, 2, 'shoes', 'Cool Grey 11 8M', '300.00', 4, 'images/coolgrey11.png'),
(7, 2, 'shoes', 'Patent AJ1 9M', '320.00', 7, 'images/patentbred1.png'),
(8, 2, 'shoes', 'Yeezy 500 Brwn 7M', '260.00', 5, 'images/yeezy500brwn.png'),
(9, 2, 'shoes', 'Nike Dunk EMB 12M', '340.00', 3, 'images/dunkemb.png'),
(11, 1, 'shoes', 'Balenciaga Triple S Drk Grn', '700.00', 0, 'images/baltriples.png'),
(12, 1, 'shoes', 'Balenciaga Track Sneaker Indigo', '800.00', 0, 'images/baltrksnkr.png'),
(13, 1, 'shoes', 'OW MOMA AF1 10M', '6000.00', 0, 'images/momaaf12.png'),
(15, 1, 'shoes', 'VLONE AF1 8.5M', '4500.00', 0, 'images/vloneaf1.png');

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
(2, 716324, 'test', '1234', '2021-12-07 02:59:13'),
(3, 3202, 'mama', 'mama', '2021-12-15 21:22:55'),
(4, 11940540608333, 'mama', 'mama', '2021-12-15 21:23:12');

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
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
