-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 04:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruit_stand`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `fruitID` int(11) NOT NULL,
  `fruitCategoryID` int(11) NOT NULL,
  `fruitCode` varchar(10) NOT NULL,
  `fruitName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`fruitID`, `fruitCategoryID`, `fruitCode`, `fruitName`, `description`, `price`, `dateAdded`) VALUES
(28, 2, '4011', 'Yellow', 'These bananas are starchy in texture and covered in a rind that is yellow.', '0.12', '2023-04-15 15:34:00'),
(29, 2, '4238', 'Red', 'When ripe, these red bananas are soft and taste sweet, with a hint of rasberry.', '0.55', '2023-04-15 15:34:36'),
(34, 3, '3120', 'Guyute', 'Has a pleasant sweet taste, best eaten when chilled and fresh.', '31.95', '2023-04-21 16:33:13'),
(35, 4, '4249', 'King Fruit', 'These strawberries are similar to skittles.', '90.00', '2023-04-21 18:27:22'),
(36, 4, '3891', 'Purple Woman', 'These strawberries comes from Asia and are exported from Malaysia, they are sweet and purple in color.', '200.00', '2023-04-21 19:29:27'),
(42, 1, '3319', 'Green Apple', 'Fuji apples are really delicious to eat and hard to cut.', '678.99', '2023-04-21 22:00:41'),
(43, 1, '1234', 'Sonata Apples', 'These apples are pink and sour like, best eaten when ripe.', '90.00', '2023-04-21 22:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `fruitcategories`
--

CREATE TABLE `fruitcategories` (
  `fruitCategoryID` int(11) NOT NULL,
  `fruitCategoryName` varchar(255) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruitcategories`
--

INSERT INTO `fruitcategories` (`fruitCategoryID`, `fruitCategoryName`, `dateAdded`) VALUES
(1, 'Apples', '2023-03-24 00:20:36'),
(2, 'Bananas', '2023-03-24 00:20:48'),
(3, 'Dragon Fruits', '2023-03-24 00:21:02'),
(4, 'Strawberries', '2023-03-24 00:21:18'),
(5, 'Watermelons', '2023-03-24 00:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `fruitmanagers`
--

CREATE TABLE `fruitmanagers` (
  `fruitManagerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruitmanagers`
--

INSERT INTO `fruitmanagers` (`fruitManagerID`, `emailAddress`, `password`, `firstName`, `lastName`) VALUES
(5, 'nsh25@gmail.com', '$2y$10$CmuRY6Nhnb2FTgU3Cs9nf.EfLY60vC6/xZ69o66OP.PjIaNcY2fDO', 'Ning Shu', 'Hong'),
(7, 'joeshmoe@gmail.com', '$2y$10$.5YrHPnurgLVwRa5NMDHgOmW4Fxj1NQAKNH84OwvM1O1yRklpMiLS', 'Joe', 'Shmoe'),
(10, 'johnDoe33@gmail.com', '$2y$10$4b61oqPnrgUDViS9wK.WD.o9lhBaK/BmRrUT0cW7o4WFASFcgJieK', 'John', 'Doe'),
(11, 'is67@gmail.com', '$2y$10$r8blAMxsGNarcuJh7.8Yhux2vNqrHIprtAieZPEZ/NHWAtZh23o1S', 'Ivannah', 'Shmoe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`fruitID`),
  ADD UNIQUE KEY `fruitCode` (`fruitCode`);

--
-- Indexes for table `fruitcategories`
--
ALTER TABLE `fruitcategories`
  ADD PRIMARY KEY (`fruitCategoryID`);

--
-- Indexes for table `fruitmanagers`
--
ALTER TABLE `fruitmanagers`
  ADD PRIMARY KEY (`fruitManagerID`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `fruitID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `fruitcategories`
--
ALTER TABLE `fruitcategories`
  MODIFY `fruitCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fruitmanagers`
--
ALTER TABLE `fruitmanagers`
  MODIFY `fruitManagerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
