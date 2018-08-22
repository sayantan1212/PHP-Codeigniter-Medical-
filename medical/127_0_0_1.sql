-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2017 at 12:39 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--
CREATE DATABASE IF NOT EXISTS `medical` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medical`;

-- --------------------------------------------------------

--
-- Table structure for table `cart_sd`
--

DROP TABLE IF EXISTS `cart_sd`;
CREATE TABLE IF NOT EXISTS `cart_sd` (
  `id` int(11) NOT NULL,
  `items` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_sd`
--

INSERT INTO `cart_sd` (`id`, `items`) VALUES
(1001, 8),
(1003, 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `composition` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `batch-no` varchar(10) NOT NULL,
  `expiry_date` date NOT NULL,
  `mfg_date` date DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `composition`, `image`, `price`, `batch-no`, `expiry_date`, `mfg_date`, `category`) VALUES
(1000, 'parasitamol', 'parasitamol 200mg', 'image/baby.jpg', 500, '1022011002', '2018-11-16', '2017-11-30', 'G.M'),
(1001, 'lamulate', 'parasitamol 200mg', 'image/fitness.jpg', 5, '10223105', '2018-11-30', '2017-11-30', 'G.M'),
(1002, 'lamulate', 'parasitamol 200mg', 'image/baby.jpg', 50, '654451313', '2017-11-25', '2016-12-30', 'G.M'),
(1003, 'BP Machine', 'to measure bp', 'image/diabatics.jpg', 5000, '323352315', '2017-11-01', NULL, 'diabatics');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('sanu', 's@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('sd', 'sd@gmail.com', '25d55ad283aa400af464c76d713c07ad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
