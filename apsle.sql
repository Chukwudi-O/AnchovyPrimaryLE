-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 04:09 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apsle`
--
CREATE DATABASE IF NOT EXISTS `apsle` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `apsle`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogins`
--

CREATE TABLE `adminlogins` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlogins`
--

INSERT INTO `adminlogins` (`id`, `username`, `pass`) VALUES
(4, 'chuck', '283f93ae5e0703d093e942714022c72fb6b0bbb2005c39f01d0f192221181745');

-- --------------------------------------------------------

--
-- Table structure for table `grade1students`
--

CREATE TABLE `grade1students` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `class` int(64) DEFAULT NULL,
  `teacherName` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade1students`
--

INSERT INTO `grade1students` (`id`, `username`, `pass`, `class`, `teacherName`) VALUES
(2, 'student11', 'dbc6629b707818ae64b268613a9ddd823f49db15310c0d66f3997b23a7b024ac', 1, 'Chuck');

-- --------------------------------------------------------

--
-- Table structure for table `grade2students`
--

CREATE TABLE `grade2students` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `class` int(64) DEFAULT NULL,
  `teacherName` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade2students`
--

INSERT INTO `grade2students` (`id`, `username`, `pass`, `class`, `teacherName`) VALUES
(2, 'student21', 'a77a62ffce23360d08c468519a4b7ab335d8cd4fecd427d74ea934dfa8998266', 1, 'Chevil');

-- --------------------------------------------------------

--
-- Table structure for table `grade3students`
--

CREATE TABLE `grade3students` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `class` int(64) DEFAULT NULL,
  `teacherName` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade3students`
--

INSERT INTO `grade3students` (`id`, `username`, `pass`, `class`, `teacherName`) VALUES
(4, 'student31', 'c6fa6014595b610e449e42cbcba3654cdf2522b24c33e3646c87ad9c2f8b267e', 1, 'Kyle');

-- --------------------------------------------------------

--
-- Table structure for table `grade4students`
--

CREATE TABLE `grade4students` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `class` int(64) DEFAULT NULL,
  `teacherName` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade4students`
--

INSERT INTO `grade4students` (`id`, `username`, `pass`, `class`, `teacherName`) VALUES
(2, 'student41', 'a8992bfc639911830dabe499fabe7b08ae7e2dcd2753c3cb4f3f1e1dfc580d8d', 1, 'Larnelle');

-- --------------------------------------------------------

--
-- Table structure for table `grade5students`
--

CREATE TABLE `grade5students` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `class` int(64) DEFAULT NULL,
  `teacherName` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade5students`
--

INSERT INTO `grade5students` (`id`, `username`, `pass`, `class`, `teacherName`) VALUES
(2, 'student51', '28478328dad972374958a88aa03ff5a44a3bf25e17840e8d4580b8e7c69c8b28', 1, 'teacher51');

-- --------------------------------------------------------

--
-- Table structure for table `grade6students`
--

CREATE TABLE `grade6students` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `class` int(64) DEFAULT NULL,
  `teacherName` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade6students`
--

INSERT INTO `grade6students` (`id`, `username`, `pass`, `class`, `teacherName`) VALUES
(2, 'student61', '87c251309c657f7aa8dd814999b23bdda0ebbbeb152032cee3510c045072a9d8', 1, 'teacher61');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogins`
--

CREATE TABLE `teacherlogins` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `gradeNum` int(11) DEFAULT NULL,
  `classNum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacherlogins`
--

INSERT INTO `teacherlogins` (`id`, `username`, `pass`, `gradeNum`, `classNum`) VALUES
(1, 'Chuck', '87cf1c2f3db20cfcd199f2c8724b8b5fce6ea86539328d9ceb055aaa07fba19c', 1, 1),
(2, 'Chevil', '8529ab6899015263573df683e57a9de269d60d38f9a5493152e1f53e8c5c2730', 2, 1),
(3, 'Kyle', '927a3aed189d610b2e151c4208913b3ed0cb38f6be613756819b1513c8924d7f', 3, 1),
(4, 'Larnelle', '0ac97f88712e41314f9843cf3d6f22a108f1568d55eddbd0dd25ce80ccd02bcd', 4, 1),
(5, 'teacher51', '8dc12152cb3fe333d338f3fa34b352294c5bdfe84016eb661f8b82bf3ee9f916', 5, 1),
(6, 'teacher61', 'f6035753306ae0f71106b23c80cbf76889f14e8fea74e0ee8d14422e353212fb', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacheruploads`
--

CREATE TABLE `teacheruploads` (
  `id` int(11) NOT NULL,
  `fileN` varchar(64) DEFAULT NULL,
  `extension` varchar(64) DEFAULT NULL,
  `subject` varchar(64) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `gradeNum` int(11) DEFAULT NULL,
  `classNum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacheruploads`
--

INSERT INTO `teacheruploads` (`id`, `fileN`, `extension`, `subject`, `type`, `gradeNum`, `classNum`) VALUES
(8, 'project-demo-schedule (1)', 'pdf', 'math', 'material', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogins`
--
ALTER TABLE `adminlogins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade1students`
--
ALTER TABLE `grade1students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade2students`
--
ALTER TABLE `grade2students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade3students`
--
ALTER TABLE `grade3students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade4students`
--
ALTER TABLE `grade4students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade5students`
--
ALTER TABLE `grade5students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade6students`
--
ALTER TABLE `grade6students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherlogins`
--
ALTER TABLE `teacherlogins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacheruploads`
--
ALTER TABLE `teacheruploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogins`
--
ALTER TABLE `adminlogins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grade1students`
--
ALTER TABLE `grade1students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grade2students`
--
ALTER TABLE `grade2students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grade3students`
--
ALTER TABLE `grade3students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grade4students`
--
ALTER TABLE `grade4students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grade5students`
--
ALTER TABLE `grade5students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grade6students`
--
ALTER TABLE `grade6students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacherlogins`
--
ALTER TABLE `teacherlogins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacheruploads`
--
ALTER TABLE `teacheruploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
