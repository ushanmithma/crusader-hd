-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 10:55 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `download_count`
--
CREATE DATABASE IF NOT EXISTS `download_count` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `download_count`;

-- --------------------------------------------------------

--
-- Table structure for table `shc_download`
--

CREATE TABLE `shc_download` (
  `id` int(11) NOT NULL,
  `download_date` date NOT NULL,
  `download_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shc_download`
--

INSERT INTO `shc_download` (`id`, `download_date`, `download_ip`) VALUES
(1, '2017-12-22', '::1'),
(2, '2017-12-22', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shc_download`
--
ALTER TABLE `shc_download`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shc_download`
--
ALTER TABLE `shc_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
