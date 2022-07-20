-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 01:48 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `jenis` varchar(6) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`no`, `id`, `nama`, `harga`, `jenis`, `jumlah`) VALUES
(4, 4, 'Women Blue Denim', 200000, 'Summer', 3),
(8, 3, 'Grey Over Coat', 550000, 'Winter', 1),
(10, 9, 'Beige Solid Longline Overcoat', 600000, 'Winter', 1),
(11, 2, 'Women Black Self-Design A-Line', 140000, 'Summer', 1),
(12, 16, 'Blue Checked Maxi Dress', 150000, 'Summer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `jenis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `nama`, `harga`, `jenis`) VALUES
(1, 'Rust Red Trenchcoat', 450000, 'Winter'),
(2, 'Women Black Self-Design A-Line', 140000, 'Summer'),
(3, 'Grey Over Coat', 550000, 'Winter'),
(4, 'Women Blue Denim', 200000, 'Summer'),
(5, 'Woowzerz Women Pink Suede Slim', 800000, 'Winter'),
(6, 'Women Yellow Printed', 145000, 'Summer'),
(7, 'Mustard Yellow Cape-Style Coat', 360000, 'Winter'),
(8, 'Woman Navy & White Striped', 275000, 'Summer'),
(9, 'Beige Solid Longline Overcoat', 600000, 'Winter'),
(10, 'Blue Solid Shirt Dress', 180000, 'Summer'),
(11, 'Navy Standard Fit Overcoat', 140000, 'Winter'),
(12, 'Grey Printed Maxi Dress', 200000, 'Summer'),
(13, 'Pink Solid Overcoat', 650000, 'Winter'),
(14, 'Blue Printed Maxi Dress', 160000, 'Summer'),
(15, 'Black Trench Coat', 530000, 'Winter'),
(16, 'Blue Checked Maxi Dress', 150000, 'Summer'),
(17, 'Black Hooded Coat', 350000, 'Winter'),
(18, 'White & Orange Striped Maxi', 150000, 'Summer'),
(19, 'Slim Fit Longline OverCoat', 890000, 'Winter'),
(20, 'Fuchsia & White Striped', 250000, 'Summer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
