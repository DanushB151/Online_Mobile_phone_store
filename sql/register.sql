-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 06:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneCode` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `gender`, `email`, `phoneCode`, `phone`) VALUES
(1, '2021-03-08 10:36:35', 'dns123', 'm', 'dns@gmail.com', 977, 1111111),
(2, 'danuka', 'danuka123', 'm', 'danuka@gmail.com', 973, 22222),
(3, '2021-03-07 13:20:47', 'sadun123', 'm', 'sadun@gmail.com', 972, 22222222),
(4, 'mihiri', 'mihiri123', 'f', 'mihiri@gmail.com', 973, 6565656),
(5, 'malinga', 'malinga123', 'm', 'malinga@gmail.com', 977, 777777),
(6, '2021-03-07 13:29:23', 'samantha', 'm', 'samantha@gmail.com', 977, 4539853),
(7, '2021-03-07 16:40:15', 'kavi123', 'f', 'kavi@gmai.com', 977, 53455345345),
(8, 'gihan bandara', 'gihan', 'm', 'gihan@gmail.com', 977, 718931933),
(9, '2021-03-07 19:54:05', 'malika', 'm', 'malika@gmail.com', 977, 1111111),
(10, '2021-03-07 21:36:35', 'vidu', 'f', 'vidu@gmail.com', 977, 45345),
(11, '2021-03-08 10:35:00', 'aaaa', 'f', 'ayesh@gmail.com', 973, 71893345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
