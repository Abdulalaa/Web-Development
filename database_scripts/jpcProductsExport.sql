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
-- Table structure for table `jpcProducts`
--

CREATE TABLE IF NOT EXISTS `jpcProducts` (
  `jpcProductID` int(11) NOT NULL,
  `jpcProductCode` varchar(10) NOT NULL,
  `jpcProductName` varchar(64) NOT NULL,
  `jpcProductDescription` text NOT NULL,
  `jpcProductYear` int(11) NOT NULL,
  `jpcCategoryID` int(11) NOT NULL,
  `jpcWholesalePrice` decimal(10,2) NOT NULL,
  `jpcListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jpcProducts`
--

INSERT INTO `jpcProducts` (`jpcProductID`, `jpcProductCode`, `jpcProductName`, `jpcProductDescription`, `jpcProductYear`, `jpcCategoryID`, `jpcWholesalePrice`, `jpcListPrice`, `DateCreated`) VALUES
(1000, 'VVR001', 'Tokyo Jazz Classics', 'A collection of classic jazz records from Tokyo, featuring various legendary artists.', 1990, 100, 30.00, 45.00, '2024-10-21 15:10:34'),
(1001, 'VVR002', 'Japanese Rock Hits', 'A compilation of the best rock music from Japan, including various popular bands.', 1985, 100, 25.00, 40.00, '2024-10-21 15:10:34'),
(1002, 'VVR003', 'Anime Soundtrack Vinyl', 'Limited edition vinyl of famous anime soundtracks, perfect for any anime lover.', 2021, 100, 20.00, 35.00, '2024-10-21 15:10:34'),
(2000, 'MNG001', 'Naruto Complete Box Set', 'All volumes of Naruto in a special collector’s box set, perfect for fans.', 2015, 101, 200.00, 300.00, '2024-10-21 15:10:35'),
(2001, 'MNG002', 'Dandadan Complete Box Set', 'All volumes of Dandadan in a collector’s box set, packed with adventure.', 2022, 101, 180.00, 270.00, '2024-10-21 15:10:35'),
(2002, 'MNG003', 'My Hero Academia Complete Box Set', 'The complete My Hero Academia series in a beautiful box set.', 2021, 101, 210.00, 320.00, '2024-10-21 15:10:35'),
(2003, 'MNG004', 'Demon Slayer Complete Box Set', 'All volumes of Demon Slayer bundled together for a complete collection.', 2022, 101, 220.00, 330.00, '2024-10-21 15:10:35'),
(2004, 'MNG005', 'One Piece Complete Box Set', 'All volumes of One Piece in a collector’s box set, ideal for adventure lovers.', 2023, 101, 250.00, 400.00, '2024-10-21 15:10:35'),
(2005, 'MNG006', 'Attack on Titan Complete Box Set', 'All volumes of Attack on Titan in a comprehensive box set.', 2022, 101, 240.00, 380.00, '2024-10-21 15:10:35'),
(2006, 'MNG007', 'The Promised Neverland Complete Box Set', 'A thrilling collection of The Promised Neverland in a box set.', 2019, 101, 195.00, 290.00, '2024-10-21 15:10:35'),
(2007, 'MNG008', 'Tokyo Ghoul Complete Box Set', 'Complete collection of Tokyo Ghoul in a box set, perfect for horror fans.', 2021, 101, 210.00, 320.00, '2024-10-21 15:10:35'),
(3000, 'AC001', 'Edo Period Silver Coin', 'A rare silver coin from the Edo period, featuring intricate designs.', 1700, 102, 50.00, 75.00, '2024-10-21 15:10:36'),
(3001, 'AC002', 'Meiji Era Gold Coin', 'A collectible gold coin from the Meiji era, perfect for collectors.', 1880, 102, 100.00, 150.00, '2024-10-21 15:10:36'),
(3002, 'AC003', 'Taisho Period Bronze Coin', 'A bronze coin from the Taisho period with historical significance.', 1920, 102, 30.00, 45.00, '2024-10-21 15:10:36'),
(4000, 'SC001', 'Vintage Japanese Stamp Set', 'A collection of vintage Japanese stamps, ideal for collectors.', 1950, 103, 15.00, 25.00, '2024-10-21 15:10:37'),
(4001, 'SC002', 'Anime Themed Stamps', 'A unique set of stamps featuring popular anime characters.', 2020, 103, 10.00, 20.00, '2024-10-21 15:10:37'),
(4002, 'SC003', 'Post-War Stamp Collection', 'Stamps from Japan’s post-war period, showcasing historical events.', 1946, 103, 20.00, 30.00, '2024-10-21 15:10:37'),
(5000, 'AF001', 'Orakun Action Figure', 'High-quality action figure of Orakun from Dandadan, capturing his unique features.', 2023, 104, 25.00, 40.00, '2024-10-21 15:10:38'),
(5001, 'AF002', 'Momo Action Figure', 'Detailed action figure of Momo from Dandadan, perfect for collectors.', 2023, 104, 25.00, 40.00, '2024-10-21 15:10:38'),
(5002, 'AF003', 'Gohan Action Figure', 'Dynamic figure of Gohan in his training outfit from Dragon Ball.', 2021, 104, 30.00, 50.00, '2024-10-21 15:10:38'),
(5003, 'AF004', 'Rengoku Action Figure', 'Collectible figure of Kyojuro Rengoku from Demon Slayer, showcasing his fierce expression.', 2022, 104, 28.00, 45.00, '2024-10-21 15:10:38'),
(5004, 'AF005', 'Eren Yeager Action Figure', 'Striking figure of Eren Yeager from Attack on Titan, capturing his determination.', 2022, 104, 28.00, 45.00, '2024-10-21 15:10:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jpcProducts`
--
ALTER TABLE `jpcProducts`
 ADD PRIMARY KEY (`jpcProductID`), ADD UNIQUE KEY `jpcProductCode` (`jpcProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
