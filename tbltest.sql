-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 03:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ret`
--

CREATE TABLE `ret` (
  `pid` int(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `orderdate` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ret`
--

INSERT INTO `ret` (`pid`, `category`, `orderdate`, `name`, `location`, `mob`, `reason`) VALUES
(13, 'Dog', '2021-06-10', 'Kabeer', 'Parappanagandi', '9846563421', 'Im going too abroad, so i cant care my pet.... ');

-- --------------------------------------------------------

--
-- Table structure for table `tbltest`
--

CREATE TABLE `tbltest` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `activities` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Dumping data for table `tbltest`
--

INSERT INTO `tbltest` (`id`, `fname`, `breed`, `age`, `color`, `height`, `weight`, `activities`, `food`, `location`, `price`, `images`) VALUES
(13, 'Dog', 'Pug', '3 Month', 'Black and White', '30 cm', '2 kg', 'Friendly', 'Dog Food', 'Parappanagandi', 'Rs 10000', 'all_images/aa0bcfecd5063c0503ce43f8626e7dcapug.jpg'),
(14, 'Fish', 'Guppy', '1 Month', 'Red', 'nil', 'nil', 'nil', 'Fish Food', 'Malappuram', 'Rs 50', 'all_images/c552d3bb433d5b3205e3591a8d0df7dagupp.jpg');





--
-- Indexes for dumped tables
--

--
-- Indexes for table `ret`
--
ALTER TABLE `ret`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbltest`
--
ALTER TABLE `tbltest`
  ADD PRIMARY KEY (`id`);
  


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ret`
--
ALTER TABLE `ret`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
  


--
-- AUTO_INCREMENT for table `tbltest`
--
ALTER TABLE `tbltest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
