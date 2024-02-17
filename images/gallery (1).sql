-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 04:38 PM
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
-- Database: `ciccd`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `age` int(123) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `gender` varchar(123) NOT NULL,
  `photo` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `age`, `description`, `gender`, `photo`) VALUES
(12, 'Martin Muli', 0, 'Has Family of 5 children\r\nNeeds a Wheel Chair\r\nLack of Funds', 'Male', 'image4.jpg'),
(13, 'Mbithi Kitunga', 0, 'Parents with no work Born in Family of 2 children\nParalysed on the half side of the body \nLack of Funds', 'Male', 'image2.jpg'),
(14, 'Pidelit Musyimi', 0, 'Born in a Family of 3 children\r\nLoose Memory\r\nPrimary School Class 4', 'Female', 'image1.jpg'),
(15, 'James Mwinzi', 0, 'Born in a Family of 2 children\r\n7years old,Total Paralysed\r\nParents not working Lack of Funds', 'Male', 'image6.jpg'),
(16, 'Agela Mausa', 0, 'Paralysed\r\n not working Lack of Funds', 'Female', 'image7.jpg'),
(17, 'Faith Muasa', 0, 'Born in a Family of 5 children\r\n24 years old,Form 4 Paralysed\r\n not working Lack of Funds', 'Female', 'image7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
