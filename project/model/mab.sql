-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 04:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mab`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(10) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `productId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `username`, `productId`) VALUES
(3, 'sam', 1),
(7, 'sam', 5),
(8, 'helen', 5),
(9, 'helen', 6),
(10, 'jenny', 5),
(11, 'jenny', 5),
(12, 'jenny', 5),
(13, 'jenny', 5),
(14, 'jenny', 5),
(15, 'jenny', 6),
(16, 'jenny', 6),
(17, 'jenny', 6),
(18, 'jenny', 10),
(19, 'jenny', 10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `productName` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subCategory` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `buyingPrice` float NOT NULL,
  `sellingPrice` float NOT NULL,
  `stock` int(30) NOT NULL,
  `discount` int(30) NOT NULL,
  `displayable` tinyint(4) DEFAULT 0,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `deliveryStatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `productName`, `category`, `subCategory`, `description`, `buyingPrice`, `sellingPrice`, `stock`, `discount`, `displayable`, `photo1`, `photo2`, `photo3`, `deliveryStatus`) VALUES
(5, 'puff tops', 'cloths', 'ladies items', 'puff tops', 0, 450, 40, 10, 0, '../photos/tpuf.jpg', '', '', 0),
(6, 'kurti', 'cloths', 'kurti', 'nksnksncsk', 0, 2300, 20, 10, 0, '../photos/kurti.jpg', '', '', NULL),
(8, 'saree', 'cloths', 'ladies items', 'nnkssnkn', 0, 2700, 25, 20, 0, '../photos/saree.jpg', '', '', NULL),
(10, 'Perfume ', 'llnckn', 'perfume', 'mncdn', 0, 2300, 600, 50, 0, '../photos/perfume.jpg', '', '', NULL),
(20, 'panjabi', 'cloths', 'men\'s item', 'panjabi', 1000, 2100, 10, 20, 0, '../photos/panjabi.jpg', '', '', 0),
(22, 'Gucci bag', 'bag', 'bag', 'hckc', 1, 2500, 10, 30, 0, '../photos/bag.jpg', '', '', 0),
(23, 'shirt', 'cloths', 'men\'s item', 'shirt', 0, 1600, 100, 10, 0, '../photos/mens.jpg', '', '', 0),
(24, 'Victoria\'s', 'perfume', 'ladies items', 'perfumr', 1, 1500, 1000, 30, 0, '../photos/per.jpg', '', '', 0),
(25, 'Shirt', 'cloth', 'shirt', 'shirt', 2, 2200, 18, 20, 0, '../photos/shr.jpg', '', '', 0),
(26, 'shampoo', 'shampoo', 'shampoo', 'jsksjk', 1, 500, 300, 10, 0, '../photos/sham.jpg', '', '', 0),
(27, 'shampoo', 'shampoo', 'shampoo', 'ddn', 0, 1500, 200, 0, 0, '../photos/biotin.jpg', '', '', 0),
(28, 'Facewash', 'face', 'cleanser', 'nkvedk', 0, 500, 800, 0, 0, '../photos/fac.jpg', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `gender`, `dob`) VALUES
(2, '', '12', '', '', ''),
(3, '', '12', '', '', ''),
(4, '', '12', '', '', ''),
(5, '', '12', '', '', ''),
(6, '', '12', '', '', ''),
(13, '', '12', '', '', ''),
(14, 'sam', '123', 'sam@gmail.com', 'Female', '2013-10-07'),
(15, 'hero alam', '1234', 'hero@gmail.com', 'Male', '2015-02-02'),
(16, 'lamia ', '12345', 'lam@gmail.com', 'Female', '2011-12-05'),
(17, 'jenny', '1234', 'jenny@gmail.com', 'Female', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `wish`
--

CREATE TABLE `wish` (
  `wid` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish`
--

INSERT INTO `wish` (`wid`, `username`, `productId`) VALUES
(4, 'sam', 8),
(5, 'helen', 5),
(6, 'jenny', 5),
(7, 'jenny', 5),
(8, 'jenny', 6),
(9, 'jenny', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wish`
--
ALTER TABLE `wish`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
