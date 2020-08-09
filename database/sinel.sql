-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 07:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinel`
--

-- --------------------------------------------------------

--
-- Table structure for table `capsbanks`
--

CREATE TABLE `capsbanks` (
  `caps-id` int(11) NOT NULL,
  `caps-name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `months` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rappen` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `energy-saved` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `passcode` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `passcode`) VALUES
(1, 'firstpost@gmail.com', '123'),
(2, 'secondpost@gmail.com', '12345'),
(3, 'thirdpost@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `meters`
--

CREATE TABLE `meters` (
  `meter-id` int(11) NOT NULL,
  `meter-name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rappen` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `energy-cost` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rename-assets`
--

CREATE TABLE `rename-assets` (
  `asset-id` int(5) NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `meter` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `meter2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `capbank1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `capbank2` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rename-assets`
--

INSERT INTO `rename-assets` (`asset-id`, `email`, `meter`, `meter2`, `capbank1`, `capbank2`) VALUES
(1, 'firstpost@gmail.com', 'myMeter', 'myMeter2', 'Mycap', 'MyBank2'),
(2, 'secondpost@gmail.com', 'myMeter', 'myMeter3', 'MYcap3', 'Mycap4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capsbanks`
--
ALTER TABLE `capsbanks`
  ADD PRIMARY KEY (`caps-id`),
  ADD UNIQUE KEY `caps-name` (`caps-name`),
  ADD UNIQUE KEY `months` (`months`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meters`
--
ALTER TABLE `meters`
  ADD PRIMARY KEY (`meter-id`),
  ADD UNIQUE KEY `meter-name` (`meter-name`),
  ADD UNIQUE KEY `month` (`month`);

--
-- Indexes for table `rename-assets`
--
ALTER TABLE `rename-assets`
  ADD PRIMARY KEY (`asset-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meters`
--
ALTER TABLE `meters`
  MODIFY `meter-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rename-assets`
--
ALTER TABLE `rename-assets`
  MODIFY `asset-id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
