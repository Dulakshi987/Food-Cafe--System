-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2024 at 10:46 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `name`, `description`, `cuisine_type`, `price`, `image_url`, `order_url`) VALUES
(1, 'Rice & curry', 'included rice & curry', 'Sri Lankan', '350.00', 'menu6.jpg', 'order.php'),
(4, 'fried rice', 'included chicken & egg', 'Sri Lankn and other', 'Rs:1000.00', 'menu3.jpg', 'order.php'),
(5, 'Koththu', ' included chicken & egg', 'Sri lankan & other country', 'Rs:1000.00    [Today! 5%]', 'menu9.jpg', 'order.php'),
(6, 'Nasiguran', 'included egg & chicken', 'indian ', 'Rs:1900.00', 'menu10.jpg', 'order.php'),
(7, 'sambarine', 'included egg & vegitable', 'Sri lankan& koriya', 'Rs:350.00', 'menu4.jpg', 'order.php'),
(8, 'Egg role', 'included egg', 'Sri lankan', 'Rs:90.00 ', 'menu2.jpg', 'order.php'),
(9, 'Burger', 'included crispy chicken', 'Japan', 'Rs:300.00 [Today! 15%]', 'slide1.jpg', 'order.php'),
(10, 'Samosa', 'included vegetable', 'Indian', 'Rs:90.00', 'slide3.jpg', 'order.php'),
(11, 'orange juice', 'included orange ', 'All of country', 'Rs:300.00 [Today! 15%]', 'menu7.jpg', 'order.php'),
(12, 'Faluda', 'included faluda & jelly', 'All of country', 'Rs:350.00', 'menu8.jpg', 'order.php'),
(13, 'pashan', 'included pashan', 'Sri lankan & japan', 'Rs:150.00', 'menu11.jpg', 'order.php'),
(14, 'Ice-coffe', 'included milk & coffee', 'Sri lankan', 'Rs:400.00', 'menu12.jpg', 'order.php');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
