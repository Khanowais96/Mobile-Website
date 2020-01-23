-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 04:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`) VALUES
('owi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `images`) VALUES
(2, 'Huawei Mate 10', '87,998', 'img/22.jpg'),
(3, 'Huawei P10 ', '79,999', 'img/4.jpeg'),
(4, 'Huawei Mate S', '50,000 ', 'img/5.jpg'),
(5, 'Huawei Honor 8', ' 41,999', 'img/6.jpg'),
(6, 'Huawei P8', ' 49,999 ', 'img/7.jpeg'),
(7, 'Huawei Honor 6', '36,499 ', 'img/8.jpg'),
(8, 'Huawei Honor 7', '40,000 ', 'img/9.jpg'),
(10, 'Samsung E', '50000', 'img/1.jpg'),
(11, 'Samsung E', '67000', 'img/2.jpg'),
(14, 'hdghf', '7878', 'img/9.jpg'),
(15, 'sdhdj', '8787', 'img/corei7.jpg'),
(17, 'Huawei S', '45000', 'img/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `samsung`
--

CREATE TABLE `samsung` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `samsung`
--

INSERT INTO `samsung` (`id`, `name`, `price`, `image`) VALUES
(1, 'Samsung S9', '122,000', 'img/11.jpg'),
(2, 'Samsung Note', '99,999 ', 'img/12.jpg'),
(3, 'Samsung S7', '67,999 ', 'img/13.jpg'),
(4, 'Samsung A7', '44,999', 'img/14.jpg'),
(5, 'Samsung A5', '41,999', 'img/15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samsung`
--
ALTER TABLE `samsung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `samsung`
--
ALTER TABLE `samsung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
