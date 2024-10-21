-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 06:17 AM
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
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `name`, `institution`, `country`, `address`, `is_deleted`) VALUES
(1, '2200018364@webmail.uad.ac.id', 'Ivan dhany', 'UAD', 'BKL', 'asdsadasd', 1),
(2, 'muhahammadfatih222@gmail.com', 'Muhammad Hifdzul Fatih', 'UAD', 'JKT', 'asdsadasd', 1),
(4, '2200018364@webmail.uad.ac.id', 'Ivan dhany Jessica', 'UAD', 'thailand', 'Tamanan', 0),
(5, 'ahsbd@gmail.com', 'Riski', 'UAD', 'INDO', 'GANG MAWA', 1),
(6, 'muhammadfatih222@yahoo.com', 'Iwan YANTO', 'uad', 'Indonesia', 'GG. Lele', 1),
(7, 'ezza2100018028@webmail.uad.ac.id', 'Muhammad Hifdzul Fatih', 'UAD', 'weqwr', 'asdadwqewqweqew', 1),
(8, 'muhahammadfatih222@gmail.com', 'Ivan dhany', 'UAD', 'malaysia', 'godean', 1),
(12, 'joangjo@gmail.com', 'Joangjooo', 'UGM', 'philiphine', 'Lamongan', 0),
(13, 'riski@gmail.com', 'Riski Yanto', 'UI', 'indonesia', 'Tamsis', 0),
(14, 'muhammadfatih222@yahoo.com', 'Aufa Hamdy', 'UAD', 'australia', 'bantul', 1),
(15, 'rifman@gmail.com', 'rifman', 'UAD', 'thailand', 'sewon', 0),
(16, 'ahsbd@gmail.com', 'Ivan dhany', 'dsad', 'australia', 'dfvdf', 1),
(17, '2200018364@webmail.uad.ac.id', 'Muhammad Hifdzul Fatih', 'UAD', 'usa', 'Tamanan', 0),
(18, 'ezza2100018028@webmail.uad.ac.id', 'Ezzata', 'UI', 'vietnam', 'Yk', 0),
(19, 'ezza2100018028@webmail.uad.ac.id', 'Ezzata', 'UI', 'vietnam', 'Yk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
