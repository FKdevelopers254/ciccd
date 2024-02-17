-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 01:51 PM
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
-- Database: `markiniltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(123) NOT NULL,
  `title` varchar(123) NOT NULL,
  `location` varchar(123) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `photo1` varchar(3000) NOT NULL,
  `photo2` varchar(300) NOT NULL,
  `photo3` varchar(300) NOT NULL,
  `photo4` varchar(300) NOT NULL,
  `photo5` varchar(300) NOT NULL,
  `availability` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `location`, `description`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `availability`) VALUES
(1, 'Construction Site', '', '', 'estate1.jpg', 'estate2.jpg', 'estate3.jpg', 'estate4.jpg', 'estate5.jpg', 'ongoing'),
(2, 'Interior Room Design ', '', '', 'bedroom6.jpg', 'bedroom2.jpg', 'bedroom3.jpg', 'bedroom4.jpg', 'bedroom5.jpg', 'completed'),
(3, 'Kitchen Furnishing', '', '', 'kitchen1.jpg', 'kitchen2.jpg', 'kitchen3.jpg', 'kitchen4.jpg', 'kitchen5.jpg', 'ongoing'),
(4, 'Mosque', '', '', 'mosque1.jpg', 'mosque2.jpg', 'mosque3.jpg', 'mosque4.jpg', 'mosque5.jpg', 'ongoing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
