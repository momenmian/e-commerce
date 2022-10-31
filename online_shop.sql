-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 09:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(8) NOT NULL,
  `name` text NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `name`, `price`) VALUES
(10000004, 'a', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` int(4) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `name`, `address`, `order_status`) VALUES
(1004, 'Madhurjo', 'Dhaka', 'On the Way');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `product_id` int(8) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `category` text NOT NULL,
  `shop_name` text NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`product_id`, `name`, `image`, `category`, `shop_name`, `price`) VALUES
(10000008, 'Shirt Exclusive', 'download.jpg', 'Trousers and Shorts', 'Abir Clothing', 3000),
(10000007, 'Nike ', 'download.jpg', 'Shoes', 'Abir Clothing', 8000),
(10000000, 'Armani', 'download.jpg', 'Suits', 'Mdhurjo Clothing', 6000),
(10000004, 'a', '', 'Shirt', 'Abir Clothing', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `shop_list`
--

CREATE TABLE `shop_list` (
  `shop_id` int(5) NOT NULL,
  `name` text NOT NULL,
  `mob` int(11) NOT NULL,
  `addrs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_list`
--

INSERT INTO `shop_list` (`shop_id`, `name`, `mob`, `addrs`) VALUES
(10006, 'Mdhurjo Clothing', 1234736367, 'Chittagong'),
(10003, 'Abir Clothing', 188837737, 'Narshindi'),
(10009, 'Asif Clothing', 188838733, 'Mymensingh');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `fullname` text NOT NULL,
  `uname` text NOT NULL,
  `gen` text NOT NULL,
  `email` text NOT NULL,
  `addrs` text NOT NULL,
  `dob` date NOT NULL,
  `mob` int(11) NOT NULL,
  `pass` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`fullname`, `uname`, `gen`, `email`, `addrs`, `dob`, `mob`, `pass`, `role`) VALUES
('0', 'momen', 'Male', 'momen@duck.com', 'Dhaka', '2022-08-30', 2147483647, 'momen', ''),
('0', 'ee', 'ee', 'ee', 'ee', '2022-08-15', 2147483647, '44', ''),
('momff', 'ggg', 'ggg', 'gg', 'dfg', '2022-09-01', 1234578643, 'ggg', ''),
('admin', 'admin', 'admin', 'admin', 'admin', '2022-08-31', 1234567890, '12345', 'admin'),
('Madhurjo', 'madhurjo', 'Male', 'madhurjo@gmail.com', 'Dhaka', '2005-05-09', 188388383, '3456', ''),
('', '', '', '', '', '0000-00-00', 0, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
