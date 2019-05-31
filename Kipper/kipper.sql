-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 01:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kipper`
--

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(1024) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bdate` date NOT NULL,
  `plan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`fname`, `lname`, `username`, `email`, `password`, `gender`, `bdate`, `plan`, `token`) VALUES
('Ashraf', 'Ghanem', 'ashrafghanem', 'ashraf.nadir3@gmail.com', 'e7f21626e10d98d36ddca1c191de0c5811a61e05732abe5ef5720c4a324b28c3', 'M', '1998-01-11', '6-month plan', 'viamsqt4nj');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurantID` int(255) NOT NULL,
  `ownerUsername` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` int(15) NOT NULL,
  `mobile` int(15) NOT NULL,
  `restEmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `poBox` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tablesNum` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurantID`),
  ADD KEY `ownerUsername` (`ownerUsername`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurantID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`ownerUsername`) REFERENCES `owners` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
