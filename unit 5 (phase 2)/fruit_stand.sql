-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 02:49 AM
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
(1, 1, '4017', 'Granny Smith', 'These green apples are crisp, juicy, and tart.', '1.25', '2023-03-02 15:54:10'),
(2, 1, '4020', 'Golden Delicious', 'These yellow-ish green apples are very sweet.', '0.75', '2023-03-02 16:13:48'),
(3, 1, '3283', 'Honeycrisp', 'These red and yellow-ish apples are crisp with a sweet-tart flavor.', '0.78', '2023-03-02 16:16:52'),
(4, 2, '4011', 'Yellow', 'These bananas are starchy in texture and covered in a rind that is yellow.', '0.12', '2023-03-02 16:26:00'),
(5, 2, '4238', 'Red', 'When ripe, these red bananas are soft and taste sweet, with a hint of rasberry.', '0.55', '2023-03-02 16:30:50'),
(6, 2, '3287', 'Plaintains', 'These types of bananas are starchy and not very sweet compared to yellow bananas.', '0.50', '2023-03-02 21:56:30'),
(7, 3, '3319', 'Pitahaya', 'This yellow skinned fruit has white flesh and is subtly sweet, as well as, slightly sourish.', '13.99', '2023-03-02 22:02:00'),
(8, 3, '3002', 'Halleys Comet', 'This fruit has pink and green skin and pink flesh, as well as, a sweet taste.', '15.00', '2023-03-02 22:05:19'),
(9, 3, '3120', 'Guyute', 'Has a pleasant sweet taste, best eaten when chilled and fresh.', '31.95', '2023-03-02 22:02:39'),
(10, 4, '3355', 'Alpine', 'These strawberries are tart and are similar to SweetTarts candy.', '11.99', '2023-03-02 22:11:11'),
(11, 4, '3356', 'Quinault', 'These types of strawberries are sweet and good for making jams.', '15.95', '2023-03-02 22:14:30'),
(12, 4, '4247', 'Sonata', 'These types of strawberries are very sweet, mildly acidic, and aromatic when you bite into them.', '233.00', '2023-03-02 22:20:40'),
(13, 5, '3281', 'Crimson', 'These watermelons are seedless, have light and dark green stripes, and sweet, bright red flesh.', '2.90', '2023-03-02 22:24:11'),
(14, 5, '4031', 'Jubilee', 'This watermelon has seeds, a green rind, and flesh that is red and sweet. This type of watermelon is perfect for a picnic.', '8.95', '2023-03-02 22:26:47'),
(15, 5, '4341', 'Desert King', 'This type of watermelon has a light green rind and sweet, yellow flesh.', '33.40', '2023-03-02 22:33:33');

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
(1, 'Apples', '2023-03-02 15:46:06'),
(2, 'Bananas', '2023-03-02 15:47:35'),
(3, 'Dragon Fruits', '2023-03-02 15:49:12'),
(4, 'Strawberries', '2023-03-02 15:49:35'),
(5, 'Watermelons', '2023-03-02 15:49:57');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `fruitID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fruitcategories`
--
ALTER TABLE `fruitcategories`
  MODIFY `fruitCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
