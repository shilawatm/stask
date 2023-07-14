-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2023 at 06:35 PM
-- Server version: 5.7.42-0ubuntu0.18.04.1
-- PHP Version: 7.2.34-37+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tests`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `countryname` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `countryname`) VALUES
(1, 'India'),
(2, 'UK'),
(3, 'US');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `stateid` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcitys`
--

CREATE TABLE `tblcitys` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `stateid` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `countryid` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`id`, `name`, `countryid`) VALUES
(1, 'Maharastra', 1),
(2, 'Goa', 1),
(3, 'Hyadrabad', 1),
(4, 'UP', 1),
(5, 'Gujrath', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `mobile_no` varchar(225) DEFAULT NULL,
  `gender` varchar(225) DEFAULT NULL,
  `country` varchar(225) DEFAULT NULL,
  `state` varchar(225) DEFAULT NULL,
  `city` varchar(225) DEFAULT NULL,
  `img` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_no`, `gender`, `country`, `state`, `city`, `img`, `created_at`) VALUES
(1, 'Manoj Shilawat', 'vivekpathak.datagrid@gmail.com', '9875451245', 'Male', 'india', 'MH', '1', '', NULL),
(2, 'Manoj Shilawat', 'email@gmail.com', '9875451245', 'Male', 'india', 'Ga', '1', '', NULL),
(3, 'Manoj Shilawat', 'email@gmail.com', '9875451245', 'Male', 'india', 'MH', '1', '', NULL),
(4, 'Manoj Shilawat', 'email@gmail.com', '9875451245', 'Male', 'india', 'MH', '1', '', NULL),
(5, 'Manoj Shilawat', 'email@gmail.com', '9875451245', 'Male', 'india', 'MH', '1', '', NULL),
(6, 'Manoj Shilawat', 'shilawatm3@gmail.com', '8954121545', 'Male', 'india', 'MH', '1', '', NULL),
(7, 'Manoj Shilawat', 'shilawatm3@gmail.com', '8954121545', 'Male', 'india', 'MH', '2', '', NULL),
(8, 'Manoj Shilawat', 'shilawatm3@gmail.com', '8954121545', 'Male', 'india', 'MH', '1', 'why-icon4.png', NULL),
(9, 'Manoj Shilawat', 'shilawatm3@gmail.com', '8954121545', 'Male', 'india', 'Ga', '1', 'why-icon4.png', '2023-07-14 11:40:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
