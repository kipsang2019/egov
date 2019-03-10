-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 06:26 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `proj_uploads`
--

CREATE TABLE `proj_uploads` (
  `id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Phonenumber` int(100) NOT NULL,
  `sub_county` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `project` varchar(200) NOT NULL,
  `image_text` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj_uploads`
--

INSERT INTO `proj_uploads` (`id`, `first`, `gender`, `Phonenumber`, `sub_county`, `area`, `project`, `image_text`, `image`) VALUES
(51, 'emily', '', 74454456, 'saboti', '', 'Road repair', 'nmnmnmnm', 'WIN_20181223_18_54_46_Pro.jpg'),
(52, 'kipsang', '', 744151122, 'chepalungu', '', 'bridge', 'bridge construction', 'WIN_20181223_18_54_50_Pro.jpg'),
(53, 'Frank', '', 74466116, 'saboti', '', 'bridge', 'bridge repair', 'WIN_20181223_18_54_46_Pro.jpg'),
(58, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(59, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(60, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(61, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(62, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(63, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(64, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(65, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(66, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(67, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(68, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(69, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(70, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(71, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(72, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(73, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(74, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(75, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(76, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(77, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(78, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(79, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(80, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(81, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(82, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(83, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(84, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(85, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(86, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(87, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(88, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(89, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(90, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(91, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(92, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(93, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(94, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(95, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(96, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(97, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(98, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(99, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(100, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(101, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(102, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(103, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(104, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(105, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(106, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(107, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(108, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg'),
(121, 'kips', '', 477774, 'kisawai', '', 'ECDE', 'We need more classes', 'WIN_20181223_18_54_46_Pro.jpg'),
(122, 'kips', '', 477774, 'kisawai', '', 'ECDE', 'We need more classes', 'WIN_20181223_18_54_46_Pro.jpg'),
(123, 'kips', '', 477774, 'kisawai', '', 'ECDE', 'We need more classes', 'WIN_20181223_18_54_46_Pro.jpg'),
(124, 'kips', '', 477774, 'kisawai', '', 'ECDE', 'We need more classes', 'WIN_20181223_18_54_46_Pro.jpg'),
(125, 'john', '', 711221, 'kisawai', '', 'Road construction', 'We need road', 'WIN_20181223_18_54_46_Pro.jpg'),
(126, '', '', 0, 'Select Sub-county', '', '', '', ''),
(127, 'chumpa', '', 745554144, 'kiminini', '', 'Garbage collection', 'this are is full of waste which i think it is the responsibility of county to do something', 'jewish.png'),
(128, 'Emmah', 'male', 712226545, 'kibomet', '', 'School construction', 'We lack enough class rooms', 'abstract.png'),
(129, 'Emmah', 'male', 712226545, 'kibomet', '', 'School construction', 'We lack enough class rooms', 'abstract.png'),
(130, 'Emmah', 'Female', 744125512, 'kibomet', '', 'School construction', 'We don\'t have enough classroms in this school', 'abstract.png'),
(131, 'kim', 'Male', 711221125, 'chepalungu', '', 'School construction', 'we need school', 'abstract.png'),
(132, 'mika', 'Male', 122554, 'Endebes', 'john power', 'School construction', 'there is need for classrooms in this area', 'Capturea.PNG'),
(133, 'mika', 'Male', 122554, 'Endebes', 'john power', 'School construction', 'there is need for classrooms in this area', 'Capturea.PNG'),
(134, 'james', 'Male', 75144554, 'Cherengani', 'Makutano', 'Bridge', 'the above mentioned bridge needs urgent repair', 'backup failed.PNG'),
(135, 'Kisa', 'Male', 711415551, 'Endebes', 'Sabwani', 'Road repair', 'The sabwani road is impasable right now. Please help us', 'canon-eos-1d-c-3403x2552-camera-best-cameras-2015-professional-photo-3286.jpg'),
(142, 'kipsang', 'Male', 74454445, 'Kiminini', 'Tol', 'road repair', 'road repair', 'abstract.png'),
(143, 'kipsang', 'Male', 7455515, 'Kiminini', 'Kiminini town', 'road', 'the are a lot of holes on the road from kitale', 'backup failed.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(100) NOT NULL,
  `user_last` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_uid` varchar(100) NOT NULL,
  `user_pwd` varchar(100) NOT NULL,
  `avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `avatar`) VALUES
(1, 'kipsang', 'moses', 'moses@gmail.com', 'moses', '$2y$10$pOUWAwaZdb48HLvyiufuH.PjnwVAxnqt.r2GFW6AiuIc6BeejnjC2', ''),
(2, 'kipsang', 'moses', 'moses@gmail.com', 'mose', '$2y$10$0erI2/fobXhdGzSQK69oCeDJLdQCjcOepV1QheJA25kCABSmDR2C.', ''),
(3, 'john', 'siele', 'johnnysiele@gmail.com', 'johnny', '$2y$10$UGcXoLoGqcfzFDSbZXio2.a9KWo8u5jm1sMkuBPF.Dj49VM6Dr7Yq', ''),
(4, 'moses', 'kim', 'kim@gmail.com', 'kim', '$2y$10$Q9zH5bMOc6mqSLSQY6u12OkzbF5ldkE16qPun8HYIncCUrweGNEM2', ''),
(5, 'moses', 'kim', 'kim@gmail.com', 'kim', '$2y$10$EI67MFlgwh4SZANzzr1RXuTtZdbnboMcHHYARm4KjqaFsk/ignzcK', ''),
(6, 'moses', 'kim', 'kim@gmail.com', 'kim', '$2y$10$gAYZ5C0mhodGrArYAFu/4OwnSl7HeFhOFJ7oZf4rhr03iHIPBgxfe', ''),
(7, 'moses', 'kim', 'kim@gmail.com', 'kimtai', '$2y$10$swkRdkIGuE8aPyJo.NUzVOYqHedoi9N5P2miGGPbL14eGxyJacc/2', ''),
(8, 'eric', 'juma', 'juma@gmail.com', 'juma', '$2y$10$FYJIZrfc5LvWhYT0Jcy53.yB3Xy/wpjqMTlJ/CVOmKmajIf1cmgOu', ''),
(9, 'moses', 'kim', 'kim@gmail.com', 'kim', '$2y$10$ZdOPtQ4PFxpFypc/0LmJleTyeH09Acc.ixBeAveHLqH590F4cjBHO', ''),
(10, 'john', 'siele', 'johnnysiele@gmail.com', 'john', '$2y$10$RR47OHwOzLhiKdY/BaI0R.oLFVtmCGWOeaTvaiLKna4OLTKVkufMK', ''),
(11, 'kipsang', 'juma', 'kim@gmail.com', 'mose', '$2y$10$Cd4wa0XntGFp6DYF3aNESuPpl70u1GrAqSWkAT3LZTfJILbmNYVJy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proj_uploads`
--
ALTER TABLE `proj_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proj_uploads`
--
ALTER TABLE `proj_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
