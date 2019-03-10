-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 11:10 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `id` int(20) NOT NULL,
  `bs_id` int(50) NOT NULL,
  `bs_name` varchar(100) NOT NULL,
  `boxno` int(100) NOT NULL,
  `town` varchar(50) NOT NULL,
  `Land_zone` varchar(100) NOT NULL,
  `plot_no` int(100) NOT NULL,
  `physical_address` varchar(200) NOT NULL,
  `act_code` varchar(100) NOT NULL,
  `bs_descr` varchar(500) NOT NULL,
  `bs_tel` int(30) NOT NULL,
  `premise_area` varchar(50) NOT NULL,
  `emp_no` int(20) NOT NULL,
  `id_no` int(12) NOT NULL,
  `bs_rep` varchar(100) NOT NULL,
  `box1` int(30) NOT NULL,
  `destin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`id`, `bs_id`, `bs_name`, `boxno`, `town`, `Land_zone`, `plot_no`, `physical_address`, `act_code`, `bs_descr`, `bs_tel`, `premise_area`, `emp_no`, `id_no`, `bs_rep`, `box1`, `destin`) VALUES
(1, 41, 'digitech', 212, 'Kitale', 'Mara', 12, 'Mara market alongKisawai-Kitale road', '45', 'selling electronics', 712002541, 'Marambach', 15, 33002422, 'james', 212, 'kitale'),
(2, 41, 'digitech', 212, 'Kitale', 'Mara', 12, 'Mara market alongKisawai-Kitale road', '45', 'selling electronics', 712002541, 'Marambach', 15, 33002422, 'james', 212, 'kitale'),
(3, 41, 'digitech', 212, 'Kitale', 'Mara', 12, 'Mara market alongKisawai-Kitale road', '45', 'selling electronics', 712002541, 'Marambach', 15, 33002422, 'james', 212, 'kitale');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
