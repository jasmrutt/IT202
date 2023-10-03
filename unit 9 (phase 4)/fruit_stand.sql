-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 05:53 AM
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
(1, 1, '4017', 'Granny Smith', 'These green apples are crispy, juicy, and tart.', '1.25', '2023-03-24 00:21:35'),
(2, 1, '4020', 'Golden Delicious', 'These yellow-ish green apples are very sweet.', '0.75', '2023-03-24 12:39:22'),
(3, 1, '3283', 'Honeycrisp', 'These red and yellow-ish apples are crisp with a sweet-tart flavor.', '0.78', '2023-03-24 12:40:16'),
(4, 2, '4011', 'Yellow', 'These bananas are starchy in texture and covered in a rind that is yellow.', '0.12', '2023-03-24 12:41:04'),
(5, 2, '4238', 'Red', 'When ripe, these red bananas are soft and taste sweet, with a hint of rasberry.', '0.55', '2023-03-24 12:41:59'),
(6, 2, '3287', 'Plaintains', 'These types of bananas are starchy and not very sweet compared to yellow bananas.', '0.50', '2023-03-24 12:43:54'),
(7, 3, '3319', 'Pitahaya', 'This yellow skinned fruit has white flesh and is subtly sweet, as well as, slightly sourish.', '13.99', '2023-03-24 12:47:09'),
(9, 3, '3002', 'Halleys Comet', 'This fruit has pink and green skin and pink flesh, as well as, a sweet taste. ', '15.00', '2023-03-24 13:10:39'),
(10, 3, '3120', 'Guyute', 'Has a pleasant sweet, best eaten when chilled and fresh.', '31.95', '2023-03-24 13:12:02'),
(11, 4, '3355', 'Alpine', 'These strawberries are tart and are similar to SweetTarts candy.', '11.99', '2023-03-24 13:13:59'),
(12, 4, '3356', 'Quinault', 'These types of strawberries are sweet and good for making jams.', '15.95', '2023-03-24 13:15:02'),
(13, 4, '4247', 'Sonata', 'These types of strawberries are very sweet, mildly acidic, and aromatic, when you bite into them.', '233.00', '2023-03-24 13:25:14'),
(14, 5, '3281', 'Crimson', 'These watermelons are seedless, have light and dark green stripes, and sweet, bright red flesh.', '2.90', '2023-03-24 13:28:15'),
(15, 5, '4031', 'Jubilee', 'This watermelon has seeds, a green rind, and flesh that is red and sweet. This type of watermelon is perfect for a picnic.', '8.95', '2023-03-24 13:30:29'),
(16, 5, '4341', 'Desert King', 'This type of watermelon has a light green and sweet, yellow flesh.', '33.40', '2023-03-24 13:31:34');

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
(1, 'johndoe@gmail.com', 'sfjD3ghj8*t', 'John', 'Doe'),
(2, 'joeshmoe@gmail.com', 'sjkl*@#345fght', 'Joe', 'Shmoe'),
(3, 'johnnysmith@gmail.com', 'lkjasd#$df34*t', 'Johnny', 'Smith'),
(4, 'jnr7@gmail.com', '$2y$10$MR3r8DeTg5sSVhRbdAzDh.2VWoz82y2AcED9dwQxqV9es/oEhjiWS', 'Jasmin', 'Sosing');

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
  MODIFY `fruitID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `fruitcategories`
--
ALTER TABLE `fruitcategories`
  MODIFY `fruitCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fruitmanagers`
--
ALTER TABLE `fruitmanagers`
  MODIFY `fruitManagerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
