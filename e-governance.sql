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
-- Database: `e-governance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', '97e3046c110d447cf0e0166588a42dd0');

-- --------------------------------------------------------

--
-- Table structure for table `citizens_projects`
--

CREATE TABLE `citizens_projects` (
  `id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `file_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file`, `file_text`) VALUES
(1, '', ''),
(2, 'dvd.PNG', ''),
(3, 'dvd.PNG', ''),
(4, 'dvd.PNG', ''),
(5, 'dvd.PNG', ''),
(6, '', ''),
(7, 'Fee-Payment-Policy.pdf', ''),
(8, 'Fee-Payment-Policy.pdf', ''),
(9, 'limo.docx', ''),
(10, 'limo.docx', ''),
(11, 'results clip.pdf', 'download results slip here'),
(12, 'results clip.pdf', 'download results slip here');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(1, 'C360_2017-05-28-07-23-36-959.jpg', 'mose'),
(2, 'C360_2017-06-13-17-09-32-266.jpg', 'this is kipsang moses enjoying himself'),
(3, 'C360_2017-06-13-16-05-45-393.jpg', 'my fav snap'),
(4, 'C360_2017-06-16-14-08-51-801.jpg', 'this area needs to be repaired by our county governement'),
(5, 'IMG-20170425-WA0000.jpg', 'this is from Mt.Elgon subcounty'),
(6, 'WIN_20181223_18_54_46_Pro.jpg', 'this area needs your concern');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(20) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `pnumber` int(20) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `jobselect` varchar(100) NOT NULL,
  `doc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `subcounty`, `ward`, `pnumber`, `degree`, `school`, `course`, `jobselect`, `doc`) VALUES
(1, 'Saboti', 'kinyoro', 711254122, 'Yes', 'UOE', 'IT', 'Senior ICT officer', ''),
(2, 'Cherengani', 'makutano', 700214456, 'No', 'Moi', 'B-com', 'Accountant 1', ''),
(3, 'Kiminini', 'Tol', 711224158, 'Other', 'MMUST', 'Supply Chain', 'Senior Supplay Chain Officer', ''),
(4, 'Kwanza', 'sabwani', 71236625, 'Yes', 'TUK', 'BBIT', 'Records Management officer', ''),
(5, 'Select Sub-county', '', 0, '', '', '', 'Vacancies', '');

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
(9, 'joe', 'jumaer', 'johnnytum2@gmail.com', 'johnny', '$2y$10$mHx6wUgrJmJhr73HZWCK9ufW10A4ufzMsZbnyuiW5prWy7gkBzvYq', ''),
(10, 'joe', 'siele', 'johnnytum2@gmail.com', 'johnny', '$2y$10$bt1ldAzkovPWVlyO5IPRD.hf4sqEm58rWIbXBM3s/9z.xBPSnmORO', ''),
(11, 'jom', 'johnny', 'johnnysiele@gmail.com', 'john', '$2y$10$3/0pEJA3n/3rI6QwQe9l7.BUxp0IK1zz9lHZ6dusM2V0z2p4DklT2', ''),
(12, 'abby', 'cheruto', 'cheruto@yahoo.com', 'cheruto', '$2y$10$/uG1w8gIFLjolqCNRlGxhO0e0mFUnLZyvI061tJSC1Qg4ThBtfRly', ''),
(13, 'Frank', 'Chirchir', 'frank@yahoo.com', 'frank', '$2y$10$7pFkWzmklKWC4UD9txeM0ukNqDWZ8QU59oy4ohSgd5A.mNLrQb2ni', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizens_projects`
--
ALTER TABLE `citizens_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citizens_projects`
--
ALTER TABLE `citizens_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
