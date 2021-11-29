-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 01:30 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(4) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varbinary(201) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`) VALUES
(2, 'john', 0x445bc9c69c7e302f8129aac70bf0e6fc, 'john@asd.asd'),
(15, 'Kevin', 0x646f3649676146666330693863, 'kevin@sdf.asd'),
(16, 'Peter', 0x646f3649676146666330693863, 'peter@wer.asd'),
(18, 'Valerie', 0x646f3649676146666330693863, 'valerie@asddd.ert'),
(47, 'Malkz', 0x646f3649676146666330693863, 'malkz@malcolmlevon.com'),
(49, 'George', 0x646f3649676146666330693863, 'george@george.com'),
(50, '<script>alert("Uhhh");</script>', 0x31323334, ''),
(51, '<script>alert("Ooooh");</script>', 0x31323334, ''),
(52, '<script>alert("Ooooh");</script>', 0x31323334, ''),
(53, '<script>alert("AAAAoh");</script>', 0x31323334, ''),
(54, 'Don', 0x646f3649676146666330693863, 'don@don.com'),
(55, 'Bilybob', 0x646f4c756834412e4c766a6851, 'alsdkja@asdkljas.com'),
(56, 'Colin', 0x646f3649676146666330693863, 'col@col.com'),
(57, 'Fred', 0x646f3649676146666330693863, 'fred@fred.com');

-- --------------------------------------------------------

--
-- Table structure for table `text_right2`
--

CREATE TABLE `text_right2` (
  `text_right2ID` int(11) NOT NULL,
  `content` text NOT NULL,
  `modified_time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_right2`
--

INSERT INTO `text_right2` (`text_right2ID`, `content`, `modified_time`) VALUES
(1, 'This text has been downloaded form a database instead of a text file.', '2017-02-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_right2`
--
ALTER TABLE `text_right2`
  ADD PRIMARY KEY (`text_right2ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `text_right2`
--
ALTER TABLE `text_right2`
  MODIFY `text_right2ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
