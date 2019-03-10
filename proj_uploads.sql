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
  `image` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj_uploads`
--

INSERT INTO `proj_uploads` (`id`, `first`, `gender`, `Phonenumber`, `sub_county`, `area`, `project`, `image_text`, `image`, `status`) VALUES
(51, 'Masai', '', 74454456, 'saboti', '', 'Road repair', 'nmnmnmnm', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(52, 'kipsang', '', 744151122, 'chepalungu', '', 'bridge', 'bridge construction', 'WIN_20181223_18_54_50_Pro.jpg', 'On the process'),
(53, 'Frank', '', 74466116, 'saboti', '', 'bridge', 'bridge repair', 'WIN_20181223_18_54_46_Pro.jpg', 'On the process'),
(58, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(59, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(60, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(61, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(62, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'On the process'),
(63, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(64, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'On the process'),
(65, '', '', 0, 'chepalungu', '', '', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'On the process'),
(66, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(67, '', '', 0, 'chepalungu', '', '', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'On the process'),
(68, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'On the process'),
(69, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'On the process'),
(70, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'On the process'),
(71, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(72, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(73, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', 'Finished'),
(74, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(75, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(76, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(77, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(78, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(79, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(80, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(81, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(82, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(83, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(84, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(85, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(86, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(87, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(88, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(89, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(90, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(91, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(92, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(93, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(94, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(95, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(96, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(97, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(98, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(99, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(100, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(101, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(102, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(103, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(104, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(105, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(106, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(107, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(108, 'kips', '', 733651247, 'chepalungu', '', 'Public toilets ', 'there are no toilets', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(121, 'kips', '', 477774, 'kisawai', '', 'ECDE', 'We need more classes', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(122, 'kips', '', 477774, 'kisawai', '', 'ECDE', 'We need more classes', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(123, 'kips', '', 477774, 'kisawai', '', 'ECDE', 'We need more classes', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(124, 'kips', '', 477774, 'kisawai', '', 'ECDE', 'We need more classes', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(125, 'john', '', 711221, 'kisawai', '', 'Road construction', 'We need road', 'WIN_20181223_18_54_46_Pro.jpg', ''),
(126, 'kiplimo', '', 74415221, 'Select Sub-county', '', 'bridge', '', '', 'Finished'),
(127, 'chumpa', '', 745554144, 'kiminini', '', 'Garbage collection', 'this are is full of waste which i think it is the responsibility of county to do something', 'jewish.png', ''),
(128, 'Emmah', 'male', 712226545, 'kibomet', '', 'School construction', 'We lack enough class rooms', 'abstract.png', ''),
(129, 'Emmah', 'male', 712226545, 'kibomet', '', 'School construction', 'We lack enough class rooms', 'abstract.png', ''),
(130, 'Emmah', 'Female', 744125512, 'kibomet', '', 'School construction', 'We don\'t have enough classroms in this school', 'abstract.png', ''),
(131, 'kim', 'Male', 711221125, 'chepalungu', '', 'School construction', 'we need school', 'abstract.png', ''),
(132, 'mika', 'Male', 122554, 'Endebes', 'john power', 'School construction', 'there is need for classrooms in this area', 'Capturea.PNG', 'On the process'),
(133, 'mika', 'Male', 122554, 'Endebes', 'john power', 'School construction', 'there is need for classrooms in this area', 'Capturea.PNG', 'On the process'),
(134, 'james', 'Male', 75144554, 'Cherengani', 'Makutano', 'Bridge', 'the above mentioned bridge needs urgent repair', 'backup failed.PNG', 'On the process'),
(135, 'Kisa', 'Male', 711415551, 'Endebes', 'Sabwani', 'Road repair', 'The sabwani road is impasable right now. Please help us', 'canon-eos-1d-c-3403x2552-camera-best-cameras-2015-professional-photo-3286.jpg', 'On the process'),
(142, '', 'Male', 0, 'Kiminini', 'Tol', '', 'road repair', 'abstract.png', 'Finished'),
(143, '', 'Male', 0, 'Kiminini', 'Kiminini town', '', 'the are a lot of holes on the road from kitale', 'backup failed.PNG', 'Finished');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proj_uploads`
--
ALTER TABLE `proj_uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proj_uploads`
--
ALTER TABLE `proj_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
