-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2017 at 07:13 AM
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
-- Table structure for table `cart_admin`
--

DROP TABLE IF EXISTS `cart_admin`;
CREATE TABLE IF NOT EXISTS `cart_admin` (
  `id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_admin`
--

INSERT INTO `cart_admin` (`id`, `quantity`) VALUES
(1029, 3),
(1018, 2),
(1003, 2),
(1000, 1),
(1022, 1),
(1020, 1),
(1023, 3),
(1004, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart_qq`
--

DROP TABLE IF EXISTS `cart_qq`;
CREATE TABLE IF NOT EXISTS `cart_qq` (
  `id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_sayansen`
--

DROP TABLE IF EXISTS `cart_sayansen`;
CREATE TABLE IF NOT EXISTS `cart_sayansen` (
  `id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_sayansen2`
--

DROP TABLE IF EXISTS `cart_sayansen2`;
CREATE TABLE IF NOT EXISTS `cart_sayansen2` (
  `id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_sayansen2`
--

INSERT INTO `cart_sayansen2` (`id`, `quantity`) VALUES
(1022, 9),
(1029, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_sayantan12112`
--

DROP TABLE IF EXISTS `cart_sayantan12112`;
CREATE TABLE IF NOT EXISTS `cart_sayantan12112` (
  `id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_sayantan12112`
--

INSERT INTO `cart_sayantan12112` (`id`, `quantity`) VALUES
(1001, 66),
(1002, 23);

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
(1003, 17);

-- --------------------------------------------------------

--
-- Table structure for table `cart_souvik`
--

DROP TABLE IF EXISTS `cart_souvik`;
CREATE TABLE IF NOT EXISTS `cart_souvik` (
  `id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_souvik`
--

INSERT INTO `cart_souvik` (`id`, `quantity`) VALUES
(1001, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_svik`
--

DROP TABLE IF EXISTS `cart_svik`;
CREATE TABLE IF NOT EXISTS `cart_svik` (
  `id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` varchar(32) NOT NULL,
  `username` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pin` int(10) NOT NULL,
  `item_id` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `username`, `price`, `status`, `address`, `pin`, `item_id`, `quantity`) VALUES
('1000', '1', '4', '44', '444', 4444, '', 0),
('10000', 'sd', '50000', 'ordered', '512333492025', 123456, '1003', 10),
('10000', 'sd', '50000', 'ordered', '512333492025', 123456, '1003', 10),
('10000', 'sd', '50000', 'ordered', '1234691345', 123456, '1003', 10),
('10000', 'sd', '60000', 'ordered', '1235456778', 888888, '1003', 12),
('10001', 'sd', '60000', 'ordered', '123580245', 123456, '1003', 12),
('10002', 'sd', '85000', 'ordered', '1097809786', 700001, '1003', 17),
('10006', 'admin', '0', 'canceled', 'sousa\nad\nsda\nasd\nphone Number= 123456789pin=743222', 743222, '1029', 3),
('10007', 'admin', '0', 'ordered', 'sousa\nad\nsda\nasd\nphone Number= 123456789pin=743222', 743222, '1018', 1),
('10008', 'admin', '0', 'ordered', 'sousa\nad\nsda\nasd\nphone Number= 123456789pin=743222', 743222, '1003', 2),
('10009', 'admin', '0', 'ordered', 'sousa\nad\nsda\nasd\nphone Number= 123456789pin=743222', 743222, '1000', 1),
('10010', 'admin', '0', 'canceled', 'werty\nzxcvbnm\nqwedfghnm\nzsdftyu\nphone Number= 1234567890pin=123456', 123456, '1029', 3),
('10011', 'admin', '0', 'ordered', 'werty\nzxcvbnm\nqwedfghnm\nzsdftyu\nphone Number= 1234567890pin=123456', 123456, '1018', 1),
('10012', 'admin', '0', 'ordered', 'werty\nzxcvbnm\nqwedfghnm\nzsdftyu\nphone Number= 1234567890pin=123456', 123456, '1003', 2),
('10013', 'admin', '0', 'ordered', 'werty\nzxcvbnm\nqwedfghnm\nzsdftyu\nphone Number= 1234567890pin=123456', 123456, '1000', 1),
('10014', 'admin', '9897', 'canceled', 'werty\nzxcvbnm\nqwedfghnm\nzsdftyu\nphone Number= 1234567890pin=123456', 123456, '1029', 3),
('10015', 'admin', '10490', 'ordered', 'werty\nzxcvbnm\nqwedfghnm\nzsdftyu\nphone Number= 1234567890pin=123456', 123456, '1018', 1),
('10016', 'admin', '10490', 'ordered', 'werty\nzxcvbnm\nqwedfghnm\nzsdftyu\nphone Number= 1234567890pin=123456', 123456, '1003', 2),
('10017', 'admin', '10490', 'ordered', 'werty\nzxcvbnm\nqwedfghnm\nzsdftyu\nphone Number= 1234567890pin=123456', 123456, '1000', 1),
('10018', 'admin', '9897', 'canceled', 'qwertyuiop\nsdfghjklhgfdsdfghjk\nzsxedcrfvtgbyhnujmik,ol\nzxcvbnm\nphone Number= 1234567890pin=123456', 123456, '1029', 3),
('10019', 'admin', '10490', 'ordered', 'qwertyuiop\nsdfghjklhgfdsdfghjk\nzsxedcrfvtgbyhnujmik,ol\nzxcvbnm\nphone Number= 1234567890pin=123456', 123456, '1018', 1),
('10020', 'admin', '10490', 'ordered', 'qwertyuiop\nsdfghjklhgfdsdfghjk\nzsxedcrfvtgbyhnujmik,ol\nzxcvbnm\nphone Number= 1234567890pin=123456', 123456, '1003', 2),
('10021', 'admin', '10490', 'ordered', 'qwertyuiop\nsdfghjklhgfdsdfghjk\nzsxedcrfvtgbyhnujmik,ol\nzxcvbnm\nphone Number= 1234567890pin=123456', 123456, '1000', 1),
('10022', 'admin', '9897', 'canceled', 'sayan\nbkp oasdoasd as\nn24pgs\nwb\nphone Number= 1234567890pin=123456', 123456, '1029', 3),
('10023', 'admin', '10490', 'ordered', 'sayan\nbkp oasdoasd as\nn24pgs\nwb\nphone Number= 1234567890pin=123456', 123456, '1018', 1),
('10024', 'admin', '10490', 'ordered', 'sayan\nbkp oasdoasd as\nn24pgs\nwb\nphone Number= 1234567890pin=123456', 123456, '1003', 2),
('10025', 'admin', '10490', 'ordered', 'sayan\nbkp oasdoasd as\nn24pgs\nwb\nphone Number= 1234567890pin=123456', 123456, '1000', 1),
('10026', 'admin', '10568', 'ordered', 'sayan\nbkp oasdoasd as\nn24pgs\nwb\nphone Number= 1234567890pin=123456', 123456, '1023', 3),
('10027', 'admin', '9897', 'canceled', 'dictator\nasdfghjklqwertyuiop\nzxcvbnm\nwb\nphone Number= 5656565656pin=456456', 456456, '1029', 3),
('10028', 'admin', '11083', 'ordered', 'dictator\nasdfghjklqwertyuiop\nzxcvbnm\nwb\nphone Number= 5656565656pin=456456', 456456, '1018', 2),
('10029', 'admin', '11083', 'ordered', 'dictator\nasdfghjklqwertyuiop\nzxcvbnm\nwb\nphone Number= 5656565656pin=456456', 456456, '1003', 2),
('10030', 'admin', '11083', 'ordered', 'dictator\nasdfghjklqwertyuiop\nzxcvbnm\nwb\nphone Number= 5656565656pin=456456', 456456, '1000', 1),
('10031', 'admin', '11160', 'ordered', 'dictator\nasdfghjklqwertyuiop\nzxcvbnm\nwb\nphone Number= 5656565656pin=456456', 456456, '1022', 1),
('10032', 'admin', '11365', 'ordered', 'dictator\nasdfghjklqwertyuiop\nzxcvbnm\nwb\nphone Number= 5656565656pin=456456', 456456, '1020', 1),
('10033', 'admin', '11443', 'ordered', 'dictator\nasdfghjklqwertyuiop\nzxcvbnm\nwb\nphone Number= 5656565656pin=456456', 456456, '1023', 3),
('10034', 'admin', '12567', 'ordered', 'dictator\nasdfghjklqwertyuiop\nzxcvbnm\nwb\nphone Number= 5656565656pin=456456', 456456, '1004', 2),
('10035', 'sayansen2', '693', 'ordered', 'sayan sen\nasdfghjklwertyuiop\nxcvbnm,\nwb\nphone Number= 1234567890pin=123456', 123456, '1022', 9),
('10036', 'sayansen2', '693', 'ordered', 'qwertyuio\nssdfghjkl;lkjhgfds\n;lkjhgfdsdfghj\ndfg\nphone Number= 123456789pin=123456', 123456, '1022', 9),
('10037', 'sayansen2', '3992', 'canceled', 'qwertyuio\nssdfghjkl;lkjhgfds\n;lkjhgfdsdfghj\ndfg\nphone Number= 123456789pin=123456', 123456, '1029', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `composition` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `batch-no` varchar(10) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `mfg_date` date DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1030 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `composition`, `image`, `price`, `batch-no`, `expiry_date`, `mfg_date`, `category`) VALUES
(1006, 'Amoxicillin', 'amitriptyline (a mee TRIP ti leen)', 'image/Amoxicillin.jpg ', 22, '3564132', '2019-11-06', '2017-11-01', 'G.M.'),
(1005, 'Amitriptyline', 'amitriptyline (a mee TRIP ti leen)', 'image/Amitriptyline.jpg', 22, '1854623', '2019-12-05', '2017-11-07', 'diabatics'),
(1004, 'Acetaminophen', 'acetaminophen (oral) (a SEET a MIN oh fen)', 'image/Acetaminophen.jpg', 562, '284561', '2020-04-09', '2017-11-01', 'diabatics'),
(1007, 'Ciprofloxacin', 'ciprofloxacin (oral) (SIP roe FLOX a sin)', 'image/Ciprofloxacin.jpg', 114, '564512', '2020-10-30', '2017-07-11', 'G.M.'),
(1008, 'Citalopram', 'citalopram (si TAL o pram)', 'img/Citalopram.jpg ', 2016, '1346452', '2019-12-31', '2017-11-01', 'diabatics'),
(1009, 'Clindamycin', 'clindamycin (oral/injection) (klin da MYE sin)', 'image/Clindamycin.jpg', 2214, '13684651', '2022-11-22', '2017-07-16', 'diabatics'),
(1010, 'Doxycycline', 'doxycycline (DOX i SYE kleen)', 'image/Doxycycline.jpg', 66, '5613225', '2021-06-12', '2017-11-15', 'diabatics'),
(1011, 'Ibuprofen', 'ibuprofen (EYE bue PROE fen)', 'image/Ibuprofen.jpg', 65, '789465', '2019-08-08', '2017-11-05', 'G.M.'),
(1012, 'Lyrica', 'pregabalin (pre GAB a lin)', 'image/Lyrica.jpg', 823, '4156132', '2021-01-09', '2017-01-01', 'diabatics'),
(1013, 'Metoprolol', 'metoprolol (me TOE pro lol)', 'image/Metoprolol.jpg', 63, '45612356', '2019-02-12', '2017-01-02', 'diabatics'),
(1014, 'AKTIVE ORTHO\'S KNEE SUPPORT (GREY)', 'AKTIVE ORTHO\'S KNEE SUPPORT (GREY)', 'image/KNEE SUPPORT1.jpg', 247, '8945123', NULL, NULL, 'Ortho'),
(1015, 'AKTIVE ORTHO\'S KNEE SUPPORT (4 WAY)', 'AKTIVE ORTHO\'S KNEE SUPPORT (4 WAY)', 'image/KNEE SUPPORT2.jpg', 246, '7845612', NULL, NULL, 'Ortho'),
(1016, 'AKTIVE ORTHO\'S KNEE SUPPORT CLOSED PATELLA', 'AKTIVE ORTHO\'S KNEE SUPPORT CLOSED PATELLA', 'image/KNEE SUPPORT3.jpg', 592, '451256', NULL, NULL, 'Ortho'),
(1017, 'AKTIVE ORTHO\'S NEOPRENE KNEE SUPPORT', 'AKTIVE ORTHO\'S NEOPRENE KNEE SUPPORT', 'image/KNEE SUPPORT4.jpg', 637, '794561', NULL, NULL, 'Ortho'),
(1018, 'AKTIVE ORTHO\'S HINGED KNEE SUPPORT', 'AKTIVE ORTHO\'S HINGED KNEE SUPPORT', 'image/KNEE SUPPORT5.jpg', 593, '78451321', NULL, NULL, 'Ortho'),
(1019, 'KNEE IMMOBILIZER', 'AKTIVE ORTHO\'S KNEE IMMOBILIZER', 'image/KNEE IMMOBILIZER.jpg', 722, '4512451', NULL, NULL, 'Ortho'),
(1020, 'NESTLÉ CERELAC', 'NESTLÉ CERELAC INFANT CEREAL STAGE-3 300 GM', 'image/205cm.jpg', 205, '8945612', '2021-04-12', '2017-11-03', 'Child'),
(1021, 'NESTLÉ CERELAC', 'NESTLÉ CERELAC INFANT CEREAL STAGE-1 300 GM', 'image/154cm.jpg', 154, '9456125', '2019-02-11', '2017-08-08', 'Child'),
(1022, 'Care OIL', 'PATANJALI SHISHU CARE MASSAGE OIL 100ML', 'image/77cm.jpg', 77, '8456123', '2019-12-12', '2017-11-11', 'Child'),
(1023, 'Huggies Pants', 'HUGGIES WONDER PANTS DIAPERS (LARGE)', 'image/26cm.jpg', 26, '45612321', '2018-12-12', '2017-07-06', 'Child'),
(1024, 'Soap', 'HIMALAYA EXTRA MOISTURIZING BABY SOAP', 'image/30cm.jpg', 30, '8945612', '2019-12-14', '2017-02-05', 'Child'),
(1025, 'Muscle', 'MuscleBlaze PRE Workout 300, 0.55 lb Melon Twist', 'image/1349f.jpg', 1349, '1648956', '2018-12-14', '2017-12-12', 'Fitness'),
(1026, 'Nutrition', 'Domin8r Nutrition Smash, 0.41 lb Orange', 'image/1988f.jpg', 1988, '8451221', '2019-12-11', '2017-11-11', 'Fitness'),
(1027, 'MuscleBlaze', 'MuscleBlaze Citrulline Malate, 0.22 lb Unflavoured', 'image/637f.jpg', 637, '4512213', '2018-12-12', '2017-11-11', 'Fitness'),
(1028, 'MuscleBlaze', 'MuscleBlaze Torque Pre-Workout, 1.1 lb Orange', 'image/1649f.jpg', 1649, '4561233', '2019-12-11', '2017-12-11', 'Fitness'),
(1029, 'Amino', 'Cellucor Alpha Amino, 0.8 lb Blue Raspberry', 'image/3299f.jpg', 3299, '894563', '2020-12-12', '2017-11-07', 'Fitness');

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
('sd', 'sd@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('sayantan12112', 'smandal366@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
('admin', 'sanu121@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
('qq', 'sq@gamil.co', '25d55ad283aa400af464c76d713c07ad'),
('svik', 'souvikdey97@gmail.com', '87b885d339d73cbe635bc232b6982d8b'),
('souvik', 'souvikdey@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
('sayansen', 'asd@gm.com', '25f9e794323b453885f5181f1b624d0b'),
('sayansen2', 'asd@gmail.com', '25f9e794323b453885f5181f1b624d0b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
