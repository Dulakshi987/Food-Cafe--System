-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2024 at 10:47 AM
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
  `expire_date` varchar(225) NOT NULL,
  `cvv` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `address`, `email`, `tel`, `food_name`, `quantity`, `total`, `get_method`, `payament_method`, `cardholder_name`, `expire_date`, `cvv`) VALUES
(2, 'Dulakshi keshani', 'dulakshi@gamil.com', 'dulakshi@gamil.com', '0987654321', 'fried rice', '1', 'Rs:1000.00', 'cash on delivery', 'online-card', 'Dulakshikeshani', '2024/07/3', '123'),
(4, 'jaysiri', 'colombo', 'jayasiri@gmail.com', '01156754370', 'orange juice', '5', 'Rs:1500.00', 'delivery', 'online-card', 'P.A.D.Jaysiri', '8/25', '567');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
