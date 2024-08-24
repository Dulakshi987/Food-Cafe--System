-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 29, 2024 at 09:08 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

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
-- Table structure for table `a_login`
--

DROP TABLE IF EXISTS `a_login`;
CREATE TABLE IF NOT EXISTS `a_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(8, 'Dulakshi', 'Keshani', 'dulakshi@gmail.com', '$2y$10$UYA3OD3qFGPXB72dQYSw6.eHWfqkTmf/bY1Bj1G0gEAzMrIvQ45GK'),
(9, 'Saman', 'silva', 'saman@gmail.com', '$2y$10$JuyRPF8QUWCP8BB0SxFS0uPDyRsZXDPAXfmwpCDv0I.ZXnkSMGidq'),
(6, 'gayani', 'pathirana', 'dula01123@gmail.com', '$2y$10$x/iW78gBkDaw2gQh9kIp5OdwqqfqQryQLK993OdUD9i6qvJTJtyYC'),
(7, 'wasana', 'Diwyanjali', 'dula0123@gmail.com', '$2y$10$Y77sGd4B9BaI1pTdv1MQlO9fnTZRSQ5n1K./syQzE1AlZIUf26Jum'),
(5, 'W.P.gayani', 'pathirana', 'gayani1@gmail.com', '$2y$10$Ph/Uc9KygyKQKGDkvNjnfugNKkBE65Oz50.x4kO8sFFJhWH8Hr2.G'),
(10, 'Saman', 'silva', 'dulakshi0@gmail.com', '$2y$10$OrWBjK1W6T/4QVbfO93WNetAzia4dX/f62oq5eym6HshoIfu2M66m');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `time` varchar(225) NOT NULL,
  `party_size` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `party_type` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `date`, `time`, `party_size`, `contact`, `party_type`) VALUES
(1, 'Dulakshi', '2024/02/23', '', '10', '0765432189', 'birthday party');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `tel` varchar(225) NOT NULL,
  `post` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_login`
--

DROP TABLE IF EXISTS `c_login`;
CREATE TABLE IF NOT EXISTS `c_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `c_login`
--

INSERT INTO `c_login` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'P.A.D.Dulakshi', 'Keshani', 'dulakshi0111@gmail.com', '$2y$10$VXgiHqJHJh6B7D7VM33Rhuim3MvqcDjukx3LgL1rt1.PG/e0fQQE6'),
(2, 'wasana', 'Desumini', 'wasana123@gmail.com', '$2y$10$sA2h.bxQf1OwaiPeZztqwOdABC8sO0O3ZHUrIh7ZULWP6g3u3IU1C'),
(3, 'Sakuni', 'Diwyanjali', 'dula0123@gmail.com', '$2y$10$tK2psFBa86XNCnwBdbKayuGRspzfqqYRAPnEOsiCvY3J75liDWH7O'),
(4, 'danuka', 'gamage', 'danuka123@gmail.com', '$2y$10$jQoOsWSY.VQtWQaTwnfi8O5iGDQVDPsynvbTxQdzwNQ3R0aXhWcd.'),
(6, 'Dulakshi', 'Keshani', 'dulakshi@gmail.com', '$2y$10$//q2POLOJFTg6AQ3ETeLbOevo/BaFLUjji6hKH9IlLnIZZtSN/cs.'),
(7, 'Saman', 'silva', 'saman@gmail.com', '$2y$10$d/nN2T.IvskVGQyZkGPtXuReslgREFHpx8mRekOPLPsm6l9PjZ83.');

-- --------------------------------------------------------

--
-- Table structure for table `c_orders`
--

DROP TABLE IF EXISTS `c_orders`;
CREATE TABLE IF NOT EXISTS `c_orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `tel` varchar(225) NOT NULL,
  `food_name` varchar(225) NOT NULL,
  `quantity` varchar(225) NOT NULL,
  `total` varchar(225) NOT NULL,
  `get_method` varchar(225) NOT NULL,
  `payament_method` varchar(225) NOT NULL,
  `cardholder_name` varchar(225) NOT NULL,
  `card_Number` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `c_orders`
--

INSERT INTO `c_orders` (`id`, `customer_name`, `address`, `email`, `tel`, `food_name`, `quantity`, `total`, `get_method`, `payament_method`, `cardholder_name`, `card_Number`) VALUES
(1, 'Dilanka', 'Colombo', 'dilanka@gamil.com', '01178456370', 'Nasiguran', '1', 'Rs:1900.00', 'Delievery', 'Cash on delivery', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

DROP TABLE IF EXISTS `food_items`;
CREATE TABLE IF NOT EXISTS `food_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cuisine_type` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `image_url` varchar(225) NOT NULL,
  `order_url` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `name`, `description`, `cuisine_type`, `price`, `image_url`, `order_url`) VALUES
(1, 'Rice & curry', 'included rice & curry', 'Sri Lankan', '350.00', 'menu6.jpg', 'order.php'),
(26, 'Nasiguran', 'included chicken & egg', 'Arabic food', 'Rs:2000.00', 'menu15.jpg', 'order.php'),
(6, 'Nasiguran', 'included egg & chicken', 'indian ', 'Rs:1900.00', 'menu10.jpg', 'order.php'),
(7, 'sambarine', 'included egg & vegitable', 'Sri lankan& koriya', 'Rs:350.00', 'menu4.jpg', 'order.php'),
(8, 'Egg role', 'included egg', 'Sri lankan', 'Rs:90.00 ', 'menu2.jpg', 'order.php'),
(9, 'Burger', 'included crispy chicken', 'Japan', 'Rs:300.00 [Today! 15%]', 'slide1.jpg', 'order.php'),
(10, 'Samosa', 'included vegetable', 'Indian', 'Rs:90.00', 'slide3.jpg', 'order.php'),
(11, 'orange juice', 'included orange ', 'All of country', 'Rs:300.00 [Today! 15%]', 'menu7.jpg', 'order.php'),
(12, 'Faluda', 'included faluda & jelly', 'All of country', 'Rs:350.00', 'menu8.jpg', 'order.php'),
(13, 'pashan', 'included pashan', 'Sri lankan & japan', 'Rs:150.00', 'menu11.jpg', 'order.php'),
(14, 'Ice-coffe', 'included milk & coffee', 'Sri lankan', 'Rs:400.00', 'menu12.jpg', 'order.php'),
(15, 'Crispy chicken', 'included flour,oil & egg', 'Sri Lankan', 'RS:1000.00 [2 pieces only]', 'menu13.jpg', 'order.php'),
(2, 'Koththu', 'included egg & chicken', 'Sri Lankan', 'Rs:1100.00', 'menu9.jpg', 'order.php'),
(24, 'cup cake', 'included chocolate & vanila', 'Sri Lankan & other country', 'Rs:160.00', 'menu14.jpg', 'order.php');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `tel` varchar(225) NOT NULL,
  `food_name` varchar(225) NOT NULL,
  `quantity` varchar(225) NOT NULL,
  `total` varchar(225) NOT NULL,
  `get_method` varchar(225) NOT NULL,
  `payament_method` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cardholder_name` varchar(225) NOT NULL,
  `card_Number` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ex_date` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cvv` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `address`, `email`, `tel`, `food_name`, `quantity`, `total`, `get_method`, `payament_method`, `cardholder_name`, `card_Number`, `ex_date`, `cvv`) VALUES
(7, 'Dilanka', 'Colombo', 'dilanka@gamil.com', '01178456370', 'Nasiguran', '1', 'Rs:1900.00', 'Delievery', 'Cash on delivery', 'No', 'No', 'No', ''),
(10, 'Saman silva', 'Delgoda', 'saman@gmail.com', '0115634788', 'Burgar', '2', 'Rs:600.00', 'Delievery', 'Cash on delivery', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `o_login`
--

DROP TABLE IF EXISTS `o_login`;
CREATE TABLE IF NOT EXISTS `o_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `o_login`
--

INSERT INTO `o_login` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Dulakshi', 'Keshani', 'dulakshi@gmail.com', '$2y$10$VsIvmubTPhzx/zulnJiARu9e0hLtn6tvgQhO2RdU9Od5eo6XctGxS'),
(2, 'Dulakshi', 'Keshani', 'dulakshi0@gmail.com', '$2y$10$D.qpD5NlXb4Gd9NKgWUNFe93lmn/U8uV.c0BahqQVGcI2j1VMLjGG');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `time` varchar(225) NOT NULL,
  `party_type` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `party_size` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `date`, `time`, `party_type`, `contact`, `party_size`) VALUES
(10, 'Dulakshi', '2024/02/23', '16:00', 'birthday party', '0765432189', '10'),
(7, 'Dulakshi', '2024/02/23', '16:00', 'birthday party', '0779917732', '10'),
(8, 'Dulakshi Keshani', '2024/09/30', '17:00', 'birthday party', '0762345890', '20 person'),
(11, 'Dulakshi', '2024/02/23', '16:00', 'birthday party', '0765432189', '10'),
(12, 'Dulakshi', '2024/02/23', '', 'birthday party', '0765432189', '10'),
(13, 'Dulakshi', '2024/02/23', '', 'birthday party', '0765432189', '10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
