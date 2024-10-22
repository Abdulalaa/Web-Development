-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 22, 2024 at 01:44 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `jpcCategories`
--

CREATE TABLE IF NOT EXISTS `jpcCategories` (
  `jpcCategoryID` int(11) NOT NULL,
  `jpcCategoryCode` varchar(64) NOT NULL,
  `jpcCategoryName` varchar(64) NOT NULL,
  `jpcCategoryDesc` text NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jpcCategories`
--

INSERT INTO `jpcCategories` (`jpcCategoryID`, `jpcCategoryCode`, `jpcCategoryName`, `jpcCategoryDesc`, `DateCreated`) VALUES
(100, 'VVR', 'Vintage Vinyl Records', 'Rare vintage vinyl records from Japan. Includes a variety of artists and genres.', '2024-10-21 14:39:20'),
(101, 'CB', 'Comic Books', 'A wide selection of comic books and manga box sets from Japan. A variety of publishers and genres included.', '2024-10-21 14:52:42'),
(102, 'AC', 'Antique Coins', 'Rare and collectible antique coins from Japan. Includes a variety of denominations and time periods', '2024-10-21 14:52:43'),
(103, 'SC', 'Stamp Collections', 'Rare and collectible stamp collections from Japan. Includes a variety of denominations and time periods', '2024-10-21 14:52:45'),
(104, 'AF', 'Action Figures', 'A strong variety of Japanese Anime action figures. Action figures from multiple sources and shows', '2024-10-21 14:52:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jpcCategories`
--
ALTER TABLE `jpcCategories`
 ADD PRIMARY KEY (`jpcCategoryID`), ADD UNIQUE KEY `jpcCategoryCode` (`jpcCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
